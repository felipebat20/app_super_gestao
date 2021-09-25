@extends('app.layouts.master')

@section('title', 'Fornecedor')

@section('container')
  <div class="conteudo-pagina">
    @include('app.fornecedor.partials.header')


    <div class="informacao-pagina">
      <div
      style="width:30%;"
      class="mx-auto text-left"
      >
        {{ $msg ?? '' }}
        <form
          action="{{ route('app.fornecedor.create') }}"
          method="post"
        >
        <input
          type="hidden"
          name="id"
          value="{{ $fornecedor->id ?? old('id') }}"
        >
          @csrf
          <input
            type="text"
            name="name"
            class="borda-preta"
            placeholder="Nome do fornecedor"
            value="{{ $fornecedor->name ?? old('name') }}"
          >
          {{ $errors->first('name') ?? '' }}

          <input
          type="text"
          name="site"
          class="borda-preta"
          placeholder="Site"
          value="{{ $fornecedor->site ?? old('site') }}"
          >
          {{ $errors->has('site') ? $errors->first('site') : '' }}

          <input
          type="text"
          name="uf"
          class="borda-preta"
          placeholder="Unidade federativa"
          value="{{ $fornecedor->uf ?? old('uf') }}"
          >
          {{ $errors->has('uf') ? $errors->first('uf') : '' }}

          <input
          type="email"
          name="email"
          class="borda-preta"
          placeholder="Email"
          value="{{ $fornecedor->email ?? old('email') }}"
          >
          {{ $errors->first('email') ?? '' }}

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