<h3>Teste de rota</h3>

{{-- Um comentário bem desnecessário no blade. Apenas para informar que é assim que comenta no blade --}}
{{ '<h3>Teste de texto</h3>' }}
{!! '<h2>Teste de texto</h2>' !!}
<?= '<h1>Teste de texto</h1>' ?>


{{-- @dd($fornecedores) --}}
@isset($fornecedores)
  <br>
  @foreach ($fornecedores as $indice => $fornecedor)
  Fornecedor: {{ $fornecedor['name'] }}
  <br/>
  Status: {{ $fornecedor['status'] }}
  <br>
  CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido' }}
  <br>
  Telefone: {{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] }}
  <br><br>
  <hr>
  @endforeach
@endisset
