<?php

namespace App\Http\Middleware;

use Auth;
//use Illuminate\Support\Facades\Auth;
use Closure;

class isAdmin
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
        //Auth::user();      
        return $next($request);
    }
}
