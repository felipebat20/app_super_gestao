@extends('app.layouts.master')

@section('title', 'Fornecedor')

@section('container')
  <div class="conteudo-pagina">
    @include('app.fornecedor.partials.header')

    <div class="informacao-pagina">
      <div style="width: 90%;" class="mx-auto">
        <table
          border="1"
          width="100%"
        >
          <thead>
            <tr>
              <th>
                Nome
              </th>

              <th>
                Site
              </th>

              <th>
                UF
              </th>

              <th>
                E-mail
              </th>
              <th />
              <th />
            </tr>
          </thead>
          <tbody>
            @foreach ($fornecedores as $fornecedor)
              <tr>
                <td>
                  {{ $fornecedor->name }}
                </td>

                <td>
                  {{ $fornecedor->site }}
                </td>

                <td>
                  {{ $fornecedor->uf }}
                </td>
                <td>
                  {{$fornecedor->email }}
                </td>

                <td>
                  Alterar
                </td>

                <td>
                  Excluir
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection