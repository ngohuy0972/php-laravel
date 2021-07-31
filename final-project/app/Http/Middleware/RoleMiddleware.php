<?php

namespace App\Http\Middleware;
use Auth;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
    
        if(!Auth::user() || Auth::user()->role->name != $role) {
            return redirect()->route('/home_page');
        }
        return $next($request);
    }
}
