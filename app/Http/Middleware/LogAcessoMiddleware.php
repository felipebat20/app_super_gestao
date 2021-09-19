<?php

namespace App\Http\Middleware;

use Closure;
use App\LogAcesso;
use Facade\FlareClient\Http\Response;

class LogAcessoMiddleware
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
        // return $next($request);
        $ip = $request->server->get('REMOTE_ADDR');
        $route = $request->getRequestUri();
        LogAcesso::create(['log' => "Ip {$ip} requisitou a rota {$route}"]);

        return Response('Chegamos no middleware e finalizamos no próprio middleware');
    }
}
