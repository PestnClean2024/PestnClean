<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Utils\AccessLogger;
use App\Utils\JwtHelper;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }

    public function showLoginForm()
    {
        return view('login');
    }
    public function register(RegisterRequest $request)
    {

        $user = User::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'address' => $request->address,
            'role' => 'customer',
        ]);

        if ($user) {
            $token = JWTAuth::fromUser($user);
            $cookie = cookie('token', $token, 60); // 60 minutes
            return redirect()->route('home')->withCookie($cookie)->with('user', $user);
        }
        return redirect()->back()->withErrors(['error' => 'Đăng ký không thành công']);
    }

    // public function login(LoginRequest $request)
    // {

    //     $credentials = $this->credentials($request);

    //     try {
    //         if (!$token = JWTAuth::attempt($credentials)) {
    //             return redirect()->back()->withErrors(['error' => 'Tài khoản của bạn không đúng'])->withInput();
    //         }
    //     } catch (JWTException $e) {
    //         return redirect()->back()->withErrors(['error' => 'Không thể tạo token'])->withInput();
    //     }

    //     $user = auth()->user();

    //     $token = JwtHelper::generateToken(Auth::user());

    //     $cookie = cookie('token', $token, 60); // 60 minutes

    //     if ($user->role == 'customer') {
    //         return redirect()->route('home')->withCookie($cookie)->with('user', $user);
    //     } elseif ($user->role == 'superadmin') {
    //         dd(1);
    //         return redirect()->route('superadmin')->withCookie($cookie)->with('user', $user);
    //     } elseif ($user->role == 'admin') {
    //         dd(2);
    //         return redirect()->route('admin')->withCookie($cookie)->with('user', $user);
    //     } else {
    //         dd(3);
    //         return redirect()->route('executive')->withCookie($cookie)->with('user', $user);
    //     }
    // }
    public function authenticate($credentials)
    {
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return [false, 'Tài khoản của bạn không đúng'];
            }
        } catch (JWTException $e) {
            return [false, 'Không thể tạo token'];
        }

        return [true, $token];
    }


    public function redirectToRolePage($user, $token)
    {
        $cookie = cookie('token', $token, 60); // 60 minutes

        switch ($user->role) {
            case 'customer':
                dd('home');
                return;
                // return redirect()->route('home')->withCookie($cookie)->with('user', $user);
            case 'superadmin':
                // Ghi lại hoạt động
                AccessLogger::log('Supser đã đăng nhập');
                dd(11);
                return;
                // return redirect()->route('superadmin')->withCookie($cookie)->with('user', $user);
            case 'admin':
                AccessLogger::log("Admin đã đăng nhập");
                dd(12);
                return;

                // return redirect()->route('admin')->withCookie($cookie)->with('user', $user);
            case 'executive':
                AccessLogger::log("Excutive đã đăng nhập");
                dd(13);
                return;

                // return redirect()->route('executive')->withCookie($cookie)->with('user', $user);
            default:
                return dd('false');
        }
    }

    public function login(LoginRequest $request)
    {
        $credentials = $this->credentials($request);

        list($authenticated, $message) = $this->authenticate($credentials);

        if (!$authenticated) {
            return redirect()->back()->withErrors(['error' => $message])->withInput();
        }

        $user = auth()->user();

        $token = JwtHelper::generateToken($user);

        return $this->redirectToRolePage($user, $token);
    }

    protected function credentials(Request $request)
    {
        $field = filter_var($request->input('login_id'), FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';
        return [
            $field => $request->input('login_id'),
            'password' => $request->input('password'),
        ];
    }

    public function logout(Request $request)
    {
        $token = $request->cookie('token');

        JwtHelper::invalidateToken($token);

        $cookie = Cookie::forget('token');

        return redirect()->route('login')->withCookie($cookie);
    }
}
