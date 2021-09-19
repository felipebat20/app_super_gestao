<?php

namespace App\Http\Middleware;

use Closure;
use Facade\FlareClient\Http\Response;

class AuthenticationMiddleware
{
    public function handle($request, Closure $next)
    {
        if (true) {
            return $next($request);
        }

        return Response('Acesso negado! Rota exige autenticacao');
    }
}
