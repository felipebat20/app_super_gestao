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
                'cnpj' => '00.000.000/00',
            ],

            1 => [
                'name' => 'Fornecedor 2',
                'status' => 'S',
            ],
        ];

        return view('app.fornecedor.index', compact('fornecedores'));
        // return view('app.fornecedor.index');
    }
}
