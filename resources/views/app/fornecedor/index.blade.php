@extends('app.layouts.master')

@section('title', 'Fornecedor')

@section('container')
  <h3>Teste de rota</h3>
  @isset($fornecedores)
    <br>
    @forelse ($fornecedores as $indice => $fornecedor)
      Iteração atual: {{ $loop->iteration }}
      <br>
      Fornecedor: {{ $fornecedor['name'] }}
      <br/>
      Status: {{ $fornecedor['status'] }}
      <br>
      CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido' }}
      <br>
      Telefone: {{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] }}
      <br>
      @if ($loop->first)
        Essa é a primeira iteração do objeto loop
      @endif
      @if ($loop->last)
        Essa é a ultima iteração do objeto loop
        <br>
        Total de registros: {{ $loop->count }}
      @endif
      <hr>
    @empty
      Não existem fornecedores cadastrados.
    @endforelse
  @endisset
@endsection