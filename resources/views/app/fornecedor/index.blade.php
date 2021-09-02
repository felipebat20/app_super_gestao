<h3>Teste de rota</h3>
@isset($fornecedores)
  <br>
  @forelse ($fornecedores as $indice => $fornecedor)
    Fornecedor: @{{ $fornecedor['name'] }}
    <br/>
    Status: @{{ $fornecedor['status'] }}
    <br>
    CNPJ: @{{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido' }}
    <br>
    Telefone: @{{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] }}
    <br><br>
    <hr>
  @empty
    Não existem fornecedores cadastrados.
  @endforelse
@endisset
