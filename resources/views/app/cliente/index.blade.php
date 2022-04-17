@extends('app.layouts.master')

@section('title', 'clientes')

@section('container')
  <div class="conteudo-pagina">
    @include('app.cliente.partials.header', ['title' => 'Listar clientes'])

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

              <th />
            </tr>
          </thead>

          <tbody>
            @foreach ($clientes as $cliente)
              <tr>
                <td>
                  <small>
                    {{ $cliente->name }}
                  </small>
                </td>

                <td>
                  <div class="d-flex flex-column">
                    <a
                      class="btn-info btn-sm text-white my-1"
                      href="{{ route('cliente.show', $cliente->id) }}"
                    >
                      Ver
                    </a>

                    <a
                      class="btn-success btn-sm my-1"
                      href="{{ route('cliente.edit', $cliente->id) }}"
                    >
                      Editar
                    </a>

                    <form
                      action="{{ route('cliente.destroy', ['cliente' => $cliente->id]) }}"
                      method="POST"
                      class="p-0 my-1"
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
                  </div>
              </tr>
            @endforeach
          </tbody>
        </table>
        {{ $clientes->appends($request)->links() }}

        Exibindo {{ $clientes->count() }} clientes de {{ $clientes->total() }} (de {{ $clientes->firstItem() }} a {{ $clientes->lastItem() }})
      </div>
    </div>
  </div>
@endsection