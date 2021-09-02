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
                'cnpj' => null,
                'ddd' => '11',
                'telefone' => '0000-0000',
            ],

            1 => [
                'name' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => '000-000/000',
                'ddd' => '85',
                'telefone' => '0000-0000',
            ],

            2 => [
                'name' => 'Fornecedor 3',
                'status' => 'S',
                'cnpj' => null,
                'ddd' => '32',
                'telefone' => '0000-0000',
            ],
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
