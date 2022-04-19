@extends('app.layouts.master')

@section('title', 'pedidos')

@section('container')
  <div class="conteudo-pagina">
    @include('app.pedido.partials.header', ['title' => 'Listar pedidos'])

    <div class="informacao-pagina">
      <div style="width: 80%;" class="mx-auto">
        <table
          width="50%"
          class="table text-left"
        >
          <tbody>
            @foreach ($pedidos as $pedido)
              <tr>
                <td width="100%">
                  <div class="row">
                    <div class="col-6 m-0 text-left">
                      <strong>
                        ID do pedido:
                      </strong>

                      <p class="d-inline-block">
                        {{ $pedido->id }}
                      </p>
                    </div>

                    <div class="col-6 m-0 text-left">
                      <strong>
                        Cliente:
                      </strong>

                      <p class="d-inline-block">
                        {{ $pedido->cliente->nome }}
                      </p>
                    </div>

                    <div class="col-6 row">
                      <div class="col-4">
                        <a
                          class="btn btn-info btn-sm d-block text-white"
                          href="{{ route('pedido.show', $pedido->id) }}"
                        >
                          Ver
                        </a>
                      </div>

                      <div class="col-4">
                        <a
                          class="btn btn-success btn-sm d-block"
                          href="{{ route('pedido.edit', $pedido->id) }}"
                        >
                          Editar
                        </a>
                      </div>

                      <div class="col-4">
                        <form
                          action="{{ route('pedido.destroy', ['pedido' => $pedido->id]) }}"
                          method="POST"
                          class="p-0 m-0"
                        >
                          @csrf
                          @method('DELETE')
                            <button
                              type="submit"
                              class="btn btn-sm d-block btn-danger m-0"
                            >
                              Excluir
                            </button>
                        </form>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
        {{ $pedidos->appends($request)->links() }}

        Exibindo {{ $pedidos->count() }} pedidos de {{ $pedidos->total() }} (de {{ $pedidos->firstItem() }} a {{ $pedidos->lastItem() }})
      </div>
    </div>
  </div>
@endsection