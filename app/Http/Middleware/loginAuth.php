<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class loginAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // return $next($request);

        if(!$request->session()->has('email')){
            return redirect('loginform');
            // return view('userLoggedin');
        }
        return $next($request);
    }
}
