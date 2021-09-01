<h3>Teste de rota</h3>

{{-- Um comentário bem desnecessário no blade. Apenas para informar que é assim que comenta no blade --}}
{{ '<h3>Teste de texto</h3>' }}
{!! '<h2>Teste de texto</h2>' !!}
<?= '<h1>Teste de texto</h1>' ?>


{{-- @dd($fornecedores) --}}
@isset($fornecedores)
  Fornecedor: {{ $fornecedores[0]['name'] }}
  <br/>
  Status: {{ $fornecedores[0]['status'] }}
  <br>
  CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Dado não foi preenchido' }}

  {{--
    Só vai entrar na condição se a variável não estiver setada isset()
    Caso o valor da variável seja null
  --}}
@endisset
