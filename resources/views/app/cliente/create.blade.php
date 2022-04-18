@extends('app.layouts.master')

@section('title', 'Produto')

@section('container')
  <div class="conteudo-pagina">
    @if (isset($cliente->id))
      @include('app.cliente.partials.header', ['title' => 'Editar produto'])
    @else
      @include('app.cliente.partials.header', ['title' => 'Criar produto'])
    @endif
    <div class="informacao-pagina">
      <div
        style="width:30%;"
        class="mx-auto text-left"
      >
        @component('app.cliente.components.form_create_edit')

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