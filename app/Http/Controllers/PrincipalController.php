<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MotivoContato;

class PrincipalController extends Controller
{
    public function principal() {
        $reasons = MotivoContato::all()->pluck('contact_reason', 'id')->toArray();

        return view('site.principal', ['motivos' => $reasons]);
    }
}
