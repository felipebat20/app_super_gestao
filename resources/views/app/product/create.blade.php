@extends('app.layouts.master')

@section('title', 'Produto')

@section('container')
  <div class="conteudo-pagina">
    @if (isset($product->id))
      @include('app.product.partials.header', ['title' => 'Editar produto'])
    @else
      @include('app.product.partials.header', ['title' => 'Criar produto'])
    @endif
    <div class="informacao-pagina">
      <div
        style="width:30%;"
        class="mx-auto text-left"
      >
        @component('app.product.components.form_create_edit', ['units' => $units])

        @endcomponent
          <button
            type="submit"
            class="borda-preta"
          >
            Cadastrar
          </button>
        </form>
      </div>
    </div>
  </div>
@endsection