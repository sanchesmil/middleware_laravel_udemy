<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class PrimeiroMiddleware
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
        // Chama a fachada 'Log' do Próprio Laravel
        Log::debug('Passou pelo Primeiro middleware');

        return response('PrimeiroMiddleware parando a cadeia de chamadas');

        //return $next($request);
    }
}
