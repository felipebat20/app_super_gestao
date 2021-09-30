<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unidade;
use App\ProductDetail;

class ProductDetailController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $units = Unidade::all();
        return view('app.produto_detalhe.create', ['units' => $units]);
    }

    public function store(Request $request)
    {
        ProductDetail::create($request->all());
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
