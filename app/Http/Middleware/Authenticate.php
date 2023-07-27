<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }

    // public function handle($request, Closure $next)
    // {
    //     if (!Auth::check()) {
    //         return redirect('/login'); // Điều hướng về trang đăng nhập nếu người dùng chưa đăng nhập
    //     }

    //     return $next($request);
    // }

    }
