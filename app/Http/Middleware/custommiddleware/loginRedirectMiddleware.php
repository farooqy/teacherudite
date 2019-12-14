<?php

namespace App\Http\Middleware\custommiddleware;

use Closure;

class loginRedirectMiddleware
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
        if(!isset($_COOKIE['is_admin']) || !isset($_COOKIE['admin_id']) )
            return $next($request);
        return redirect()->route('adminIndexPage');
    }
}
