<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(Request $request)
    {
        return view('app.cliente.index', ['clientes' => Cliente::paginate(10), 'request' => $request->all()]);
    }

    public function create()
    {
        return view('app.cliente.create');
    }

    public function store(Request $request)
    {
        Cliente::create($request->all());

        return redirect()->route('cliente.index');
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

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return redirect()->route('cliente.index')->with('success', 'O cliente foi deletado');
    }
}
