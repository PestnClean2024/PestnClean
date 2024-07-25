<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Utils\JwtHelper;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
    public function home()
    {
        return view('home');
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

    public function login(LoginRequest $request)
    {

        $credentials = $this->credentials($request);

        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return redirect()->back()->withErrors(['error' => 'Tài khoản của bạn không đúng'])->withInput();
            }
        } catch (JWTException $e) {
            return redirect()->back()->withErrors(['error' => 'Không thể tạo token'])->withInput();
        }

        $user = auth()->user();

        $token = JwtHelper::generateToken(Auth::user());

        $cookie = cookie('token', $token, 60); // 60 minutes

        if ($user->role == 'customer') {
            return redirect()->route('home')->withCookie($cookie)->with('user', $user);
        } else {
            dd('yes');
            return redirect()->route('dashboard')->withCookie($cookie)->with('user', $user);
        }
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
