@extends('app.layouts.master')

@section('title', 'Detalhes do produto')

@section('container')
  <div class="conteudo-pagina">
    @include('app.product.partials.header', ['title' => 'Editar detalhes do produto'])
    <div class="informacao-pagina">
      Produto
      <p>
        Nome: {{ $productDetail->product->name }}
      </p>

      <p>
        Descrição: {{ $productDetail->product->description }}
      </p>

      <div
        style="width:30%;"
        class="mx-auto text-left"
      >
        @component('app.produto_detalhe.components.form_create_edit', [
          'productDetail' => $productDetail,
          'units' => $units,
        ])

        @endcomponent
          <button
            type="submit"
            class="borda-preta"
          >
            Atualizar
          </button>
        </form>
      </div>
    </div>
  </div>
@endsection