<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class isUser
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
        $request->user()->assignRole(2);
        return $next($request);
    }
}
