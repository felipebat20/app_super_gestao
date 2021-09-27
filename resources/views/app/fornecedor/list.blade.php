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
          class="table table-striped"
        >
          <thead class="thead-dark">
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
                  <small>
                    {{ $fornecedor->name }}
                  </small>
                </td>

                <td>
                  <small>
                    {{ $fornecedor->site }}
                  </small>
                </td>

                <td>
                  <small>
                    {{ $fornecedor->uf }}
                  </small>
                </td>
                <td>
                  <small>
                    {{$fornecedor->email }}
                  </small>
                </td>

                <td>
                  <a
                    class="btn-success btn-sm "
                    href="{{ route('app.fornecedor.edit', $fornecedor->id) }}"
                  >
                    Editar
                  </a>
                </td>

                <td>
                  <a
                    href="#"
                    class="btn-danger btn-sm"
                  >
                    Excluir
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {{ $fornecedores->appends($request)->links() }}

        Exibindo {{ $fornecedores->count() }} fornecedores de {{ $fornecedores->total() }} (de {{ $fornecedores->firstItem() }} a {{ $fornecedores->lastItem() }})
      </div>
    </div>
  </div>
@endsection