<?php

namespace App\Http\Middleware;

use Closure;
use Facade\FlareClient\Http\Response;

class AuthenticationMiddleware
{
    public function handle($request, Closure $next, $auth_method, $profile)
    {
        session_start();

        if (isset($_SESSION['email'])) {
            return $next($request);
        } else {
            return redirect()->route('site.login', ['erro' => 2]);
        }
    }
}
