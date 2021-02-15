<?php

namespace App\Http\Middleware;

use Closure;

class DocenteRootMiddleware
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
        if (auth()->check() && (auth()->user()->tipo === 'docente' || auth()->user()->tipo === 'subdirector')) {
            return $next($request);
        }

        return redirect('/');
    }
}
