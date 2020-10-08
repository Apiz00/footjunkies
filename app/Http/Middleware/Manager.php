<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Manager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // return $next($request);

        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role == 2) {
            // return redirect()->route('manager');
            return $next($request);
        }

        if (Auth::user()->role == 1) {
            return redirect()->route('admin');
            // return $next($request);
        }


        if (Auth::user()->role == 3) {
            return redirect()->route('customer');
            // return $next($request);
        }
    }
}
