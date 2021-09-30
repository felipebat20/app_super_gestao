<?php

namespace App\Http\Controllers;

use App\Product;
use App\Unidade;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request): View
    {
        $produtos = Product::paginate(10);

        return view('app.product.index', ['produtos' => $produtos, 'request' => $request->all()]);
    }

    public function create(): View
    {
        return view('app.product.create', ['units' => Unidade::all()]);
    }

    public function store(Request $request): RedirectResponse
    {
        $rules = [
            'name' => 'required|min:2|max:40',
            'description' => 'required|max:2000',
            'weight' => 'required|integer',
            'unidade_id' => 'exists:unidades,id',
        ];

        $feedback = [
            'required' => 'O campo :attribute é requerido.',
            'min' => 'O campo :attribute é necessário ter pelo menos :min caracteres.',
            'max' => 'O campo :attribute é necessário ter no máximo :max caracteres.',
            'unidade_id.exists' => 'A unidade informada não existe.',
        ];

        Product::create($request->validate($rules, $feedback));

        return redirect()->route('product.index');
    }

    public function show(Product $product): View
    {
        return view('app.product.show', [
            'product' => $product,
        ]);
    }

    public function edit(Product $product): View
    {
        return view('app.product.edit', [
            'product' => $product,
            'units' => Unidade::all(),
        ]);
        // return view('app.product.create', [
        //     'product' => $product,
        //     'units' => Unidade::all(),
        // ]);
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());
        return redirect()->route('product.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index');
    }
}
