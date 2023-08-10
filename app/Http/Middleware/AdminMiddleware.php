<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    // public function handle(Request $request, Closure $next)
    // {
    //     return $next($request);
    // }

    public function handle(Request $request, Closure $next)
    {
        // Check if the user is an admin (you need to define the 'isAdmin()' method in your User model)
        if (auth()->user()->isAdmin()) {
            return $next($request);
        }

        // If not an admin, redirect to the user side or display an error page
        return redirect('/user/merchants')->with('error', 'Access denied.');
    }
}
