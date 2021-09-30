@extends('app.layouts.master')

@section('title', 'produtos')

@section('container')
  <div class="conteudo-pagina">
    @include('app.product.partials.header', ['title' => 'Listar produtos'])

    <div class="informacao-pagina">
      <div style="width: 90%;" class="mx-auto">
        <table
          width="100%"
          class="table table-striped"
        >
          <thead class="thead-dark">
            <tr>
              <th>
                Nome
              </th>

              <th>
                Descrição
              </th>

              <th>
                Peso
              </th>

              <th>
                Unidade ID
              </th>
              <th />
              <th />
              <th />
            </tr>
          </thead>
          <tbody>
            @foreach ($produtos as $produto)
              <tr>
                <td>
                  <small>
                    {{ $produto->name }}
                  </small>
                </td>

                <td>
                  <small>
                    {{ $produto->description }}
                  </small>
                </td>

                <td>
                  <small>
                    {{ $produto->weight }}
                  </small>
                </td>

                <td>
                  <small>
                    {{ $produto->unidade_id }}
                  </small>
                </td>

                <td>
                  <a
                    class="btn-info btn-sm text-white"
                    href="{{ route('product.show', $produto->id) }}"
                  >
                    Ver
                  </a>
                </td>

                <td>
                  <a
                    class="btn-success btn-sm "
                    href="{{ route('product.edit', $produto->id) }}"
                  >
                    Editar
                  </a>
                </td>

                <td>
                  <a
                    {{-- href="{{ route('product.delete', $produto->id) }}" --}}
                    class="btn-danger btn-sm"
                  >
                    Excluir
                  </a>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {{ $produtos->appends($request)->links() }}

        Exibindo {{ $produtos->count() }} produtos de {{ $produtos->total() }} (de {{ $produtos->firstItem() }} a {{ $produtos->lastItem() }})
      </div>
    </div>
  </div>
@endsection