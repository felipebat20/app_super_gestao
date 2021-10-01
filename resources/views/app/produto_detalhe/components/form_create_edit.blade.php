@if (isset($productDetail->id))
  <form
    action="{{ route('product-detail.update', ['product_detail' => $productDetail->id]) }}"
    method="post"
  >
    @csrf
    @method('PUT')
@else
  <form
    action="{{ route('product-detail.store') }}"
    method="post"
  >
    @csrf
@endif
    <input
      type="number"
      name="produto_id"
      class="borda-preta"
      placeholder="ID do produto"
      value="{{ $productDetail->produto_id ?? old('produto_id') }}"
    >
      {{ $errors->first('produto_id') ?? '' }}

    <input
      type="number"
      name="length"
      class="borda-preta"
      placeholder="Comprimento"
      value="{{ $productDetail->length ?? old('length') }}"
    >
      {{ $errors->first('length') ?? '' }}

    <input
      type="number"
      name="width"
      class="borda-preta"
      placeholder="Largura"
      value="{{ $productDetail->width ?? old('width') }}"
    >
      {{ $errors->first('width') ?? '' }}

    <input
      type="number"
      name="height"
      class="borda-preta"
      placeholder="Altura"
      value="{{ $productDetail->height ?? old('height') }}"
    >
      {{ $errors->first('height') ?? '' }}

    <select
      name="unidade_id"
      class="borda-preta"
    >
      <option value="">
        Selecione a unidade
      </option>

      @foreach ($units as $unit)
        <option
          value="{{ $unit->id }}"
          {{ ($productDetail->unidade_id ?? old('unidade_id')) == $unit->id ? 'selected' : '' }}
        >
          {{ $unit->description }}
        </option>
      @endforeach
    </select>
      {{ $errors->first('unidade_id') ?? '' }}
