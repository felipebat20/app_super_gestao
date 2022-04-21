<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Pedido;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PedidoController extends Controller
{
    public function index(Request $request): View
    {
        return view('app.pedido.index', ['pedidos' => Pedido::paginate(10), 'request' => $request->all()]);
    }

    public function create(): View
    {
        return view('app.pedido.create', ['clientes' => Cliente::all()]);
    }

    public function store(Request $request)
    {
        $rules = [
            'cliente_id' => 'required|exists:clientes,id',
        ];

        $feedback = [
            'cliente_id.required' => 'O campo id do cliente é requerido.',
            'cliente_id.exists' => 'O id do cliente informado não existe.',
        ];

        $request->validate($rules, $feedback);

        Pedido::create(['client_id' => $request->input('cliente_id')]);

        return redirect()->route('pedido.index');
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
