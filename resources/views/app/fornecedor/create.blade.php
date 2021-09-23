@extends('app.layouts.master')

@section('title', 'Fornecedor')

@section('container')
  <div class="conteudo-pagina">
    @include('app.fornecedor.partials.header')

    <div class="informacao-pagina">
      <div style="width: 30%;" class="mx-auto">
        <form
          action="{{ route('app.fornecedor') }}"
          method="post"
        >
          <input
            type="text"
            name="name"
            class="borda-preta"
            placeholder="Nome do fornecedor"
          >

          <input
            type="text"
            name="site"
            class="borda-preta"
            placeholder="Site"
          >

          <input
            type="text"
            name="uf"
            class="borda-preta"
            placeholder="Unidade federativa"
          >

          <input
            type="email"
            name="email"
            class="borda-preta"
            placeholder="Email"
          >

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