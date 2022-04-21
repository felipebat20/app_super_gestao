@extends('app.layouts.master')

@section('title', 'pedido produto')

@section('container')
  <div class="conteudo-pagina">
    @if (isset($pedido_produto->id))
      @include('app.pedido_produto.partials.header', ['title' => 'Editar pedido produto'])
    @else
      @include('app.pedido_produto.partials.header', ['title' => 'Adicionar produto ao pedido'])
    @endif
    <div class="informacao-pagina">
      <h4>Detalhes do pedido</h4>
      <p>ID do pedido: {{ $pedido->id }}</p>
      <p>Cliente: {{ $pedido->client_id }}</p>
      <div
        style="width:30%;"
        class="mx-auto text-left"
      >
        @include('app.pedido_produto.components.form_create_edit', ['pedido' => $pedido, 'produtos' => $produtos])
        <button
          type="submit"
          class="borda-preta"
        >
          Cadastrar
        </button>
      </div>
    </div>
  </div>
@endsection