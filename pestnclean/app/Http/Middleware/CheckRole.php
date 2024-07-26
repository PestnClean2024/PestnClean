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
    public function handle($request, Closure $next, $role): Response
    {
        try {
            $user = JWTAuth::parseToken()->authenticate();
            if ($user->role !== $role) {
                return redirect('/home')->with('error', 'Bạn không có quyền truy cập vào trang này!');
            }
        } catch (\Exception $e) {
            return redirect('/login');
        }
        return $next($request);
    }
}
