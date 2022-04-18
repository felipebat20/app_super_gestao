@extends('app.layouts.master')

@section('title', 'clientes')

@section('container')
  <div class="conteudo-pagina">
    @include('app.cliente.partials.header', ['title' => 'Listar clientes'])

    <div class="informacao-pagina">
      <div style="width: 80%;" class="mx-auto">
        <table
          width="50%"
          class="table text-left"
        >
          <tbody>
            @foreach ($clientes as $cliente)
              <tr>
                <td width="100%">
                  <div class="row">
                    <div class="col-6 m-0 text-left">
                      <strong>
                        Nome:
                      </strong>

                      <p class="d-inline-block">
                        {{ $cliente->nome }}
                      </p>
                    </div>

                    <div class="col-6 row">
                      <div class="col-4">
                        <a
                          class="btn btn-info btn-sm d-block text-white"
                          href="{{ route('cliente.show', $cliente->id) }}"
                        >
                          Ver
                        </a>
                      </div>

                      <div class="col-4">
                        <a
                          class="btn btn-success btn-sm d-block"
                          href="{{ route('cliente.edit', $cliente->id) }}"
                        >
                          Editar
                        </a>
                      </div>

                      <div class="col-4">
                        <form
                          action="{{ route('cliente.destroy', ['cliente' => $cliente->id]) }}"
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
        {{ $clientes->appends($request)->links() }}

        Exibindo {{ $clientes->count() }} clientes de {{ $clientes->total() }} (de {{ $clientes->firstItem() }} a {{ $clientes->lastItem() }})
      </div>
    </div>
  </div>
@endsection