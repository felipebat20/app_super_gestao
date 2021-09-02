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
  CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Dado não foi preenchido' }}
  <br>
  Telefone: {{ $fornecedores[1]['ddd'] ?? '' }} {{ $fornecedores[1]['telefone'] }}

  @switch($fornecedores[1]['ddd'])
    @case('11')
      São paulo - SP
      @break
    @case('32')
      Juiz de Fora - MG
    @break
    @case('85')
      Fortaleza - CE
    @break
    @default
      Estado não identificado
  @endswitch
@endisset
