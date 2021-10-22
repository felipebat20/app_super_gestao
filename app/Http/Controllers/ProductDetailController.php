<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Unidade;
use App\ProductDetail;
use App\ItemDetail;

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

    public function show(ProductDetail $id)
    {
        //
    }


    public function edit($id)
    {
        $productDetail = ItemDetail::find($id);
        return view('app.produto_detalhe.edit', [
            'productDetail' => $productDetail,
            'units' => Unidade::all(),
        ]);
    }

    public function update(Request $request, ProductDetail $productDetail)
    {
        $productDetail->update($request->all());
        echo 'Atualização feita com sucesso.';
    }

    public function destroy($id)
    {
        //
    }
}
