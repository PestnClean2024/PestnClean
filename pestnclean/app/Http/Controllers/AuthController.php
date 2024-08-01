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
    // public function showRegisterForm()
    // {
    //     return view('register');
    // }

    // public function showLoginForm()
    // {
    //     return view('login');
    // }
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
            return response()->json([
                'success' => true,
                'redirect' => route('home') // Đường dẫn đến trang sau khi đăng ký thành công
            ]);
        }
        return response()->json([
            'errors' => ['registration' => ['Đăng ký thất bại, vui lòng thử lại.']]
        ], 422);
    }

    public function redirectToRolePage($user)
    {
        $redirectUrl = '';
        switch ($user->role) {
            case 'customer':
                $redirectUrl = route('home');
                break;
            case 'superadmin':
                // Ghi lại hoạt động
                AccessLogger::log('SuperAdmin đã đăng nhập');
                $redirectUrl = route('dashboard');
                break;
            case 'admin':
                AccessLogger::log("Admin đã đăng nhập");
                $redirectUrl = route('dashboard');
                break;
            case 'executive':
                AccessLogger::log("Excutive đã đăng nhập");
                $redirectUrl = route('executive.categoriesArticles.index');
                break;
            default:
                // Redirect đến trang trước đó hoặc trang lỗi
                // $redirectUrl = url()->previous();
                break;
        }
        return response()->json([
            'success' => true,
            'redirect' => $redirectUrl
        ]);
    }

    public function login(LoginRequest $request)
    {
        $credentials = $this->credentials($request);

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'errors' => [
                    'login_id' => ['Tài khoản hoặc mật khẩu của bạn không đúng.']
                ]
            ], 422);
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
        return redirect()->route('home');
    }
}
