<?php

namespace App\Http\Middleware\custommiddleware;

use Closure;

class AdminMiddleware
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
        if($request->cookie('is_admin') !== null && $request->cookie('admin_id') !== null)
            return $next($request);
        return redirect()->route('login');
    }
}
