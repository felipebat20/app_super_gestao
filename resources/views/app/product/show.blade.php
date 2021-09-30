@extends('app.layouts.master')

@section('title', 'Produto')

@section('container')
  <div class="conteudo-pagina">
    @include('app.product.partials.header', ['title' => 'Detalhes do produto'])
    <div class="informacao-pagina">
      <div
        style="width: 80%;text-align:left;"
        class="mx-auto text-left"
      >
      <ul class="list-unstyled">
        <li>
          <strong>
            Nome:
          </strong>
          {{ $product->name }}
        </li>
        <li>
          <strong>
            Descrição:
          </strong>
          {{ $product->description }}
        </li>
        <li>
          <strong>
            Peso:
          </strong>
          {{ $product->weight }}
        </li>
        <li>
          <strong>
            Unidade ID:
          </strong>
          {{ $product->unidade_id }}
        </li>
      </ul>
      </div>
    </div>
  </div>
@endsection