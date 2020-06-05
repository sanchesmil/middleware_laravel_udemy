<?php

namespace App\Http\Middleware;


use Closure;
use Log;

class TerceiroMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $nome, $idade) // Recebe os parâmetros nome e idade
    {

        Log::debug("Passou pelo TerceiroMiddleware e recebeu os parâmetros [nome = $nome, idade=$idade]");

        return $next($request);
    }
}
