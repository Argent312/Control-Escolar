<?php

namespace App\Http\Middleware;

use Closure;

class RootMiddleware
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
        if (auth()->check() && auth()->user()->tipo === 'subdirector') {
            return $next($request);
        }
        //Cambiar por una vista donde diga que no tienes acceso
        return redirect('/');
    }
}
