<?php

namespace App\Http\Controllers;

use App\Product;
use App\Unidade;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $produtos = Product::paginate(10);

        return view('app.product.index', ['produtos' => $produtos, 'request' => $request->all()]);
    }

    public function create()
    {
        return view('app.product.create', ['units' => Unidade::all()]);
    }

    public function store(Request $request)
    {
        Product::create($request->all());
        return redirect()->route('product.index');
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(Request $request, Product $product)
    {
        //
    }

    public function destroy(Product $product)
    {
        //
    }
}
