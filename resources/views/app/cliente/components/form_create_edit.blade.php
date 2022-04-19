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
  <input
    type="text"
    name="nome"
    class="borda-preta"
    placeholder="Nome do cliente"
    value="{{ $cliente->name ?? old('name') }}"
  >
    {{ $errors->first('name') ?? '' }}
