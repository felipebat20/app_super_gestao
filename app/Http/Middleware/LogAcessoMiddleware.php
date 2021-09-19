<?php

namespace App\Http\Middleware;

use Closure;
use App\LogAcesso;
use Facade\FlareClient\Http\Response;

class LogAcessoMiddleware
{
    public function handle($request, Closure $next)
    {
        $ip = $request->server->get('REMOTE_ADDR');
        $route = $request->getRequestUri();
        LogAcesso::create(['log' => "Ip {$ip} requisitou a rota {$route}"]);

        return $next($request);
    }
}
