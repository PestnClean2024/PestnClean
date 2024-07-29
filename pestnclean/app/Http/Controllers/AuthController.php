<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Utils\AccessLogger;
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
            // Lưu thông tin người dùng vào session
            session(['user' => $user]);
            return redirect()->route('home');
        }
        return redirect()->back()->withErrors(['error' => 'Đăng ký không thành công']);
    }

    public function redirectToRolePage($user)
    {
        switch ($user->role) {
            case 'customer':
                return redirect()->route('home');
            case 'superadmin':
                // Ghi lại hoạt động
                AccessLogger::log('Supser đã đăng nhập');
                return redirect()->route('dashboard');
            case 'admin':
                AccessLogger::log("Admin đã đăng nhập");
                return redirect()->route('dashboard');
            case 'executive':
                AccessLogger::log("Excutive đã đăng nhập");
                return redirect()->route('categoriesArticles.index');
            default:
                return redirect()->back();
        }
    }

    public function login(LoginRequest $request)
    {
        $credentials = $this->credentials($request);

        if (!Auth::attempt($credentials)) {
            return redirect()->back()->withErrors(['error' => 'Tài khoản của bạn không đúng'])->withInput();
        }

        $user = auth()->user();

        // Lưu thông tin người dùng vào session
        session(['user' => $user]);
        return $this->redirectToRolePage($user);
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
        Auth::logout();
        $request->session()->flush();
        return redirect()->route('login');
    }
}
