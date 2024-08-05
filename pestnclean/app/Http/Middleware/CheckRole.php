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
    public function handle(Request $request, Closure $next, ...$roles): Response
    {

        // return $next($request);
        $user = Auth::user();

        if (!$user) {
            return redirect('/login');
        }
        // dd($roles);
        foreach ($roles as $role) {
            if ($user->role === $role) {
                return $next($request);
            }
        }
        return redirect()->back(); // Redirect to a different page if the user doesn't have the required role
    }
}
