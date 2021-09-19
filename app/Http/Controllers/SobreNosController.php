<?php

namespace App\Http\Controllers;

use App\Http\Middleware\LogAcessoMiddleware;
class SobreNosController extends Controller
{
    public function __construct()
    {
        $this->middleware(LogAcessoMiddleware::class);
    }

    public function sobrenos() {
        return view('site.sobre-nos');
    }
}
