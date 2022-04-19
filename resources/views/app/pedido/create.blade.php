@extends('app.layouts.master')

@section('title', 'cliente')

@section('container')
  <div class="conteudo-pagina">
    @if (isset($cliente->id))
      @include('app.cliente.partials.header', ['title' => 'Editar cliente'])
    @else
      @include('app.cliente.partials.header', ['title' => 'Criar cliente'])
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