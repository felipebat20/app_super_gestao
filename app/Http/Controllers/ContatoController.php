<?php

namespace App\Http\Controllers;

use App\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request) {
        return view('site.contato', ['title' => 'Contato']);
    }

    public function store(Request $request) {

        // $contato = new SiteContato();

        // $contato->name = $request->input('name');
        // $contato->email = $request->input('email');
        // $contato->telefone = $request->input('telefone');
        // $contato->contact_reason = $request->input('contact_reason');
        // $contato->message = $request->input('message');

        // $contato->save();

        $request->validate([
            'name' => 'required',
            'telefone' => 'required',
            'email' => 'required',
            'contact_reason' => 'required',
            'message' => 'required',
        ]);

        SiteContato::create($request->all());
        return view('site.contato', ['title' => 'Contato']);
    }
}
