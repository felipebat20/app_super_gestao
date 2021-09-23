<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

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

    public function create(): View
    {
        return view('app.fornecedor.create');
    }
}
