<?php

namespace App\Http\Middleware;

use Closure;

class SecretariaRootMiddleware
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
        if (auth()->check() && (auth()->user()->tipo === 'secretaria' || auth()->user()->tipo === 'subdirector')) {
            return $next($request);
        }

        return redirect('/');
    }
}
