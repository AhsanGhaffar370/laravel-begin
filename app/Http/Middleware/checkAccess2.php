<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkAccess2
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

        echo("global msg for all pages");
        if($request->height && $request->height < 5){
            return redirect('noaccess1');
        }

        return $next($request);
    }
}
