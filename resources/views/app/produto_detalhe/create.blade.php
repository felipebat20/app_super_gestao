@extends('app.layouts.master')

@section('title', 'Detalhes do produto')

@section('container')
  <div class="conteudo-pagina">
    @include('app.product.partials.header', ['title' => 'Criar detalhes do produto'])
    <div class="informacao-pagina">
      <div
        style="width:30%;"
        class="mx-auto text-left"
      >
        @component('app.produto_detalhe.components.form_create_edit', ['units' => $units])

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