@if (isset($product->id))
<form
  action="{{ route('product.update', ['product' => $product->id]) }}"
  method="post"
>
  @csrf
  @method('PUT')
@else
<form
  action="{{ route('product.store') }}"
  method="post"
>
  @csrf
@endif
  <input
    type="text"
    name="name"
    class="borda-preta"
    placeholder="Nome do produto"
    value="{{ $product->name ?? old('name') }}"
  >
    {{ $errors->first('name') ?? '' }}

  <input
    type="text"
    name="description"
    class="borda-preta"
    placeholder="Descrição"
    value="{{ $product->description ?? old('description') }}"
  >
    {{ $errors->first('description') ?? '' }}

  <input
    type="number"
    name="weight"
    class="borda-preta"
    placeholder="Peso"
    value="{{ $product->weight ?? old('weight') }}"
  >
    {{ $errors->first('weight') ?? '' }}

  <select
    name="unidade_id"
    class="borda-preta"
  >
    <option value="">
      Selecione a unidade
    </option>

    @foreach ($units as $unit)
      <option value="{{ $unit->id }}" {{ ($product->unidade_id ?? old('unidade_id')) == $unit->id ? 'selected' : '' }}>
        {{ $unit->description }}
      </option>
    @endforeach
  </select>
    {{ $errors->first('unidade_id') ?? '' }}
