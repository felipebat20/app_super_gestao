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
                      class="table table-striped">
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
                                        {{ $fornecedor->email }}
                                    </small>
                                </td>

                                <td>
                                    <a
                                       class="btn-success btn-sm "
                                       href="{{ route('app.fornecedor.edit', $fornecedor->id) }}">
                                        Editar
                                    </a>
                                </td>

                                <td>
                                    <a
                                       href="{{ route('app.fornecedor.delete', $fornecedor->id) }}"
                                       class="btn-danger btn-sm">
                                        Excluir
                                    </a>
                                </td>
                            </tr>
                            @if ($fornecedor->products)
                                <tr class="text-left">
                                    <td colspan="6">
                                        <p>Lista de produtos</p>

                                        <table>
                                            @foreach ($fornecedor->products as $produto)
                                                <p class="py-1">
                                                    Produto numero {{ $loop->index + 1 }}
                                                </p>

                                                <li class="list-group-item">
                                                    <strong>
                                                        Nome do produto:
                                                    </strong>

                                                    {{ $produto->name }}
                                                </li>

                                                <li class="list-group-item">
                                                    <strong>
                                                        Descrição do produto:
                                                    </strong>

                                                    {{ $produto->description }}
                                                </li>

                                                <li class="list-group-item">
                                                    <strong>
                                                        Peso do produto:
                                                    </strong>

                                                    {{ $produto->weight }}
                                                </li>

                                                <li class="list-group-item">
                                                    <strong>
                                                        Nome do produto:
                                                    </strong>

                                                    {{ $produto->name }}
                                                </li>
                                            @endforeach
                                        </table>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
                {{ $fornecedores->appends($request)->links() }}

                Exibindo {{ $fornecedores->count() }} fornecedores de {{ $fornecedores->total() }} (de
                {{ $fornecedores->firstItem() }} a {{ $fornecedores->lastItem() }})
            </div>
        </div>
    </div>
@endsection
