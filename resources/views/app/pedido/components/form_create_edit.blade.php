@if (isset($pedido->id))
  <form
    action="{{ route('pedido.update', ['pedido' => $pedido->id]) }}"
    method="post"
  >
    @csrf
    @method('PUT')
@else
  <form
    action="{{ route('pedido.store') }}"
    method="post"
  >
    @csrf
@endif
    <input
      type="text"
      name="nome"
      class="borda-preta"
      placeholder="Nome do cliente"
      value="{{ $pedido->name ?? old('name') }}"
    >
      {{ $errors->first('name') ?? '' }}
