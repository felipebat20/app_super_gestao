@if (isset($cliente->id))
<form
  action="{{ route('cliente.update', ['cliente' => $cliente->id]) }}"
  method="post"
>
  @csrf
  @method('PUT')
@else
<form
  action="{{ route('cliente.store') }}"
  method="post"
>
  @csrf
@endif
<select
name="cliente_id"
class="borda-preta"
>
<option value="">
  Selecione um cliente
</option>

@foreach ($clientes as $cliente)
  <option value="{{ $cliente->id }}" {{ ($product->cliente_id ?? old('cliente_id')) == $cliente->id ? 'selected' : '' }}>
    {{ $cliente->name }}
  </option>
@endforeach
</select>
