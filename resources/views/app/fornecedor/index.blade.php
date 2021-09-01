<h3>Teste de rota</h3>

{{-- Um comentário bem desnecessário no blade. Apenas para informar que é assim que comenta no blade --}}
{{ '<h3>Teste de texto</h3>' }}
{!! '<h2>Teste de texto</h2>' !!}
<?= '<h1>Teste de texto</h1>' ?>


{{-- @dd($fornecedores) --}}
@isset($fornecedores)
  Fornecedor: {{ $fornecedores[1]['name'] }}
  <br/>
  Status: {{ $fornecedores[1]['status'] }}
  <br>
  @isset($fornecedores[1]['cnpj'])
    CNPJ: {{ $fornecedores[1]['cnpj'] }}
  @endisset
@endisset
