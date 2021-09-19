<?php

namespace App\Http\Controllers;

use App\SiteContato;
use App\MotivoContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request) {
        $reasons = MotivoContato::all()->pluck('contact_reason', 'id')->toArray();

        return view('site.contato', ['title' => 'Contato', 'motivos' => $reasons]);
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
            'name' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'email',
            'contact_reasons_id' => 'required',
            'message' => 'required|max:2000',
        ]);

        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
