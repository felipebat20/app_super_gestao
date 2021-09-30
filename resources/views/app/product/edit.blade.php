@extends('app.layouts.master')

@section('title', 'Produtos')

@section('container')
  <div class="conteudo-pagina">
    @include('app.product.partials.header', ['title' => 'Editar produto'])
    <div class="informacao-pagina">
      <div
        style="width:30%;"
        class="mx-auto text-left"
      >
        @component('app.product.components.form_create_edit', ['product' => $product, 'units' => $units])

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