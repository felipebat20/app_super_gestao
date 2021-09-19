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
        $rules = [
            'name' => 'required|min:3|max:40',
            'telefone' => 'required',
            'email' => 'email',
            'contact_reasons_id' => 'required',
            'message' => 'required|max:2000',
        ];

        $feedback = [
            'name.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
            'name.max' => 'O campo nome precisa ter no máximo 40 caracteres',
            'email.email' => 'O email deve ser um email válido.',
            'message.max' => 'A mensagem deve ter no máximo 2000 caracteres',
            'required' => 'O campo :attribute deve ser preenchido',
        ];

        $request->validate($rules, $feedback);

        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
