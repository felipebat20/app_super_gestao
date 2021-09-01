<h3>Teste de rota</h3>

{{-- Um comentário bem desnecessário no blade. Apenas para informar que é assim que comenta no blade --}}
{{ '<h3>Teste de texto</h3>' }}
{!! '<h2>Teste de texto</h2>' !!}
<?= '<h1>Teste de texto</h1>' ?>


{{-- @dd($fornecedores) --}}

Fornecedor: {{ $fornecedores[0]['name'] }}
<br/>
Status: {{ $fornecedores[0]['status'] }}
@if (! ($fornecedores[0]['status'] === 'S'))
  <p>Fornecedor inativo</p>
@endif

@unless ($fornecedores[0]['status'] === 'S')
  <p>Fornecedor inativo</p>
@endunless