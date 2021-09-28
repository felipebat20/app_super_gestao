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
        {{-- {{ $msg ?? '' }} --}}
        <form
          {{-- action="{{ route('app.fornecedor.create') }}" --}}
          method="post"
        >
          @csrf
          <input
              type="text"
              name="name"
              class="borda-preta"
              placeholder="Nome do produto"
              {{-- value="{{ $fornecedor->name ?? old('name') }}" --}}
          >

          <input
            type="text"
            name="description"
            class="borda-preta"
            placeholder="Descrição"
            {{-- value="{{ $fornecedor->site ?? old('site') }}" --}}
          >

          <input
            type="number"
            name="weight"
            class="borda-preta"
            placeholder="Peso"
            {{-- value="{{ $fornecedor->uf ?? old('uf') }}" --}}
          >

          <select
            name="unit_id"
            class="borda-preta"
            {{-- value="{{ $fornecedor->email ?? old('email') }}" --}}
          >
            <option value="">
              Selecione a unidade
            </option>

            @foreach ($units as $unit)
              <option value="{{ $unit->id }}">
                {{ $unit->description }}
              </option>
            @endforeach
          </select>

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