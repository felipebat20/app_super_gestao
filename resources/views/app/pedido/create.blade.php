@extends('app.layouts.master')

@section('title', 'pedido')

@section('container')
  <div class="conteudo-pagina">
    @if (isset($pedido->id))
      @include('app.pedido.partials.header', ['title' => 'Editar pedido'])
    @else
      @include('app.pedido.partials.header', ['title' => 'Criar pedido'])
    @endif

    <div class="informacao-pagina">
      <div
        style="width:30%;"
        class="mx-auto text-left"
      >
        @component('app.pedido.components.form_create_edit', ['clientes' => $clientes])

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