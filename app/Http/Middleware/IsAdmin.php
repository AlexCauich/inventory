<?php

namespace App\Http\Middleware;

use Closure, Auth;

class IsAdmin
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
        if(Auth::user()->role == "1"):// Si el user es = 1 le permite contimuar de otro modo
            return $next($request);
        else:
            return redirect('/'); // de vuelta a home
        endif;
    }
}
