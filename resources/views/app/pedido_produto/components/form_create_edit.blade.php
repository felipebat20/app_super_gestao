  <form
    action="{{ route('pedido-produto.store', ['pedido' => $pedido->id]) }}"
    method="post"
  >
    @csrf
    <select
      name="produto_id"
      class="borda-preta"
    >
      <option value="">
          --- Selecione um produto ---
      </option>

      @foreach ($produtos as $produto)
          <option
            value="{{ $produto->id }}"
            {{ old('produto_id') == $produto->id ? 'selected' : '' }}
          >
            {{ $produto->name }}
          </option>
      @endforeach
  </select>
{{ $errors->first('produto_id') ?? '' }}

