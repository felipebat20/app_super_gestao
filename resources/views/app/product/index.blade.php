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
                Comprimento
              </th>

              <th>
                Altura
              </th>

              <th>
                Largura
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
                    {{ $produto->itemDetail->length ?? 'Não informado' }}
                  </small>
                </td>

                <td>
                  <small>
                    {{ $produto->itemDetail->width ?? 'Não informado' }}
                  </small>
                </td>

                <td>
                  <small>
                    {{ $produto->itemDetail->height ?? 'Não informado' }}
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
                  <form
                    action="{{ route('product.destroy', ['product' => $produto->id]) }}"
                    method="POST"
                    class="p-0"
                  >
                    @csrf
                    @method('DELETE')
                    <button
                      type="submit"
                      class="btn-sm btn-danger m-0"
                    >
                      Excluir
                    </button>
                  </form>
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