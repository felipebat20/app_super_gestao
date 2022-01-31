<?php

namespace App\Http\Controllers;

use App\Product;
use App\Item;
use App\Fornecedor;
use App\Unidade;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request): View
    {
        $produtos = Item::with([
            'itemDetail',
            'fornecedor',
        ])->paginate(10);

        return view('app.product.index', [
            'produtos' => $produtos,
            'request' => $request->all(),
        ]);
    }

    public function create(): View
    {
        return view('app.product.create', [
            'units' => Unidade::all(),
            'fornecedores' => Fornecedor::all(),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $rules = [
            'name' => 'required|min:2|max:40',
            'description' => 'required|max:2000',
            'weight' => 'required|integer',
            'unidade_id' => 'exists:unidades,id',
            'fornecedor_id' => 'exists:fornecedores,id',
        ];

        $feedback = [
            'required' => 'O campo :attribute é requerido.',
            'min' => 'O campo :attribute é necessário ter pelo menos :min caracteres.',
            'max' => 'O campo :attribute é necessário ter no máximo :max caracteres.',
            'unidade_id.exists' => 'A unidade informada não existe.',
            'fornecedor_id.exists' => 'O fornecedor não existe.',
        ];

        Item::create($request->validate($rules, $feedback));

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
            'fornecedores' => Fornecedor::all(),
        ]);
    }

    public function update(Request $request, Item $product)
    {
        $rules = [
            'name' => 'required|min:2|max:40',
            'description' => 'required|max:2000',
            'weight' => 'required|integer',
            'unidade_id' => 'exists:unidades,id',
            'fornecedor_id' => 'exists:fornecedores,id',
        ];

        $feedback = [
            'required' => 'O campo :attribute é requerido.',
            'min' => 'O campo :attribute é necessário ter pelo menos :min caracteres.',
            'max' => 'O campo :attribute é necessário ter no máximo :max caracteres.',
            'fornecedor_id.exists' => 'O fornecedor não existe.',
        ];

        $product->update($request->validate($rules, $feedback));

        return redirect()->route('product.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index');
    }
}
