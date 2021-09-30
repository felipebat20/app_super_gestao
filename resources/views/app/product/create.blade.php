@extends('app.layouts.master')

@section('title', 'Fornecedor')

@section('container')
  <div class="conteudo-pagina">
    @include('app.product.partials.header', ['title' => 'Criar produto'])
    <div class="informacao-pagina">
      <div
        style="width:30%;"
        class="mx-auto text-left"
      >
        <form
          action="{{ route('product.store') }}"
          method="post"
        >
          @csrf
          <input
            type="text"
            name="name"
            class="borda-preta"
            placeholder="Nome do produto"
            value="{{ $product->name ?? old('name') }}"
          >
            {{ $errors->first('name') ?? '' }}

          <input
            type="text"
            name="description"
            class="borda-preta"
            placeholder="Descrição"
            value="{{ $product->description ?? old('description') }}"
          >
            {{ $errors->first('description') ?? '' }}

          <input
            type="number"
            name="weight"
            class="borda-preta"
            placeholder="Peso"
            value="{{ $product->weight ?? old('weight') }}"
          >
          {{ $errors->first('weight') ?? '' }}

          <select
            name="unidade_id"
            class="borda-preta"
          >
            <option value="">
              Selecione a unidade
            </option>
            @foreach ($units as $unit)
              <option value="{{ $unit->id }}" {{ $unit->id == old('unidade_id') ? 'selected' : '' }}>
                {{ $unit->description }}
              </option>
            @endforeach
          </select>
            {{ $errors->first('unidade_id') ?? '' }}

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