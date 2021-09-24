<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Fornecedor;

class FornecedorController extends Controller
{
    public function index(): View
    {
        return view('app.fornecedor.index');
    }

    public function list(): View
    {
        return view('app.fornecedor.list');
    }

    public function create(Request $request): View
    {
        $msg = "";
        if ($request->input('_token')) {
            $rules = [
                'name' => 'required|min:3|max:40',
                'site' => 'required',
                'uf' => 'required|min:2|max:2',
                'email' => 'email',
            ];

            $feedback = [
                'required' => 'O campo :attribute é essencial.',
                'email' => 'O campo de email precisa ter um formato válido.',
                'min' => 'O campo de :attribute precisa ter no mínimo :min caracteres.',
                'max' => 'O campo de :attribute precisa ter no máximo :max caracteres.',
            ];

            $request->validate($rules, $feedback);

            Fornecedor::create($request->all());

            //Redirect
            //Mensagem de confirmação
            $msg = 'Cadastro efetuado com sucesso.';
        }

        return view('app.fornecedor.create', ['msg' => $msg]);
    }
}
