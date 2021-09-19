<?php

namespace App\Http\Middleware;

use Closure;
use Facade\FlareClient\Http\Response;

class AuthenticationMiddleware
{
    public function handle($request, Closure $next, $auth_method, $profile)
    {
        echo $auth_method.' - '.$profile;
        if (true) {
            return $next($request);
        }

        return Response('Acesso negado! Rota exige autenticacao');
    }
}
