<?php

namespace App\Http\Middleware\Teacher;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */

     // すでにログイン済みの場合は、リダイレクトする
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard('teacher')->check()) {
            return redirect('/teacher/profile');
        }

        return $next($request);
    }
}
