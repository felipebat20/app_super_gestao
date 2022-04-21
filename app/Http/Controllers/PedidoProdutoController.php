<?php

namespace App\Http\Controllers;

use App\Item;
use App\Pedido;
use Illuminate\Http\Request;

class PedidoProdutoController extends Controller
{
    public function index()
    {
        //
    }

    public function create(Pedido $pedido)
    {
        return view('app.pedido_produto.create', ['pedido' => $pedido, 'produtos' => Item::all()]);
    }

    public function store(Request $request, Pedido $pedido)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
