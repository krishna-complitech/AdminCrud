<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Auth;

class CheckRole
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
        
        if ( Auth::check() && Auth::user()->isAdmin() ){
            return redirect('admin');
        } else {
            return redirect('welcome');
        }
        
        //return redirect('welcome');
        //return $next($request);
    }
}
