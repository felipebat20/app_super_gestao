<h3>Teste de rota</h3>

{{-- Um comentário bem desnecessário no blade. Apenas para informar que é assim que comenta no blade --}}
{{ '<h3>Teste de texto</h3>' }}
{!! '<h2>Teste de texto</h2>' !!}
<?= '<h1>Teste de texto</h1>' ?>

{{-- @dd($fornecedores) --}}

@if (count($fornecedores) > 0 && count($fornecedores) < 10)
  <h3>Existem alguns fornecedores cadastrados</h3>
@elseif (count($fornecedores) > 10)
  <h3>Existem muitos fornecedores cadastrados<h3>
@else
  <h3>Ainda não existem fornecedores cadastrados</h3>
@endif