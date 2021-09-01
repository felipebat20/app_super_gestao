<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index() {
        $fornecedores = [
            0 => [
                'name' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '0123',
            ],

            1 => [
                'name' => 'Fornecedor 2',
                'status' => 'S',
            ],
        ];

        $msg = isset($fornecedores[1]['cnpj']) ? 'CNPJ informado' : 'CNPJ não informado';
        echo $msg;

        return view('app.fornecedor.index', compact('fornecedores'));
        // return view('app.fornecedor.index');
    }
}
