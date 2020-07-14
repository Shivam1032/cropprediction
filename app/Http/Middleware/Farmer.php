<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Farmer
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
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->role == 0) 
        {
            return redirect()->route('superadmin');
        }

        if (Auth::user()->role == 1) 
        {
            
            return redirect()->route('admin');
        }

        if (Auth::user()->role == 2) 
        {
           return redirect()->route('seeddistributor');
        }

        if (Auth::user()->role == 3) 
        {
            return redirect()->route('soiltester');
        }

        if (Auth::user()->role == 4) 
        {
            return redirect()->route('buyer');
        }

        if (Auth::user()->role == 5) 
        {
            return $next($request);
        }
    }
}
