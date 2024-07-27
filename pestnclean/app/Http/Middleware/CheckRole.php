<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Facades\JWTAuth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // Kiểm tra nếu người dùng đã đăng nhập
        if (!session('user')) {
            return redirect('/login');
        }

        $user = session('user');

        // Kiểm tra quyền truy cập của người dùng
        if (isset($user->role) && $user->role !== $role) {
            return redirect('/home')->with('error', 'Bạn không có quyền truy cập vào trang này!');
        }

        return $next($request);
    }
}
