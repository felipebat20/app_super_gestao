<h3>Teste de rota</h3>

{{-- Um comentário bem desnecessário no blade. Apenas para informar que é assim que comenta no blade --}}
{{ '<h3>Teste de texto</h3>' }}
{!! '<h2>Teste de texto</h2>' !!}
<?= '<h1>Teste de texto</h1>' ?>


{{-- @dd($fornecedores) --}}
@isset($fornecedores)
  @php
      $i = 0;
  @endphp
  @while (isset($fornecedores[$i]))
  <br>
    Fornecedor: {{ $fornecedores[$i]['name'] }}
    <br/>
    Status: {{ $fornecedores[$i]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[$i]['cnpj'] ?? 'Dado não foi preenchido' }}
    <br>
    Telefone: {{ $fornecedores[$i]['ddd'] ?? '' }} {{ $fornecedores[$i]['telefone'] }}
    <br><br>
    <hr>
    @php
      $i++
    @endphp
  @endwhile
@endisset
