<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * AdminGuestMiddleware
 *
 * Protects "guest-only" admin pages (e.g. login).
 * If the visitor is already authenticated as an admin, redirect them
 * straight to the dashboard instead of showing the login page again.
 */
class AdminGuestMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        return $next($request);
    }
}
