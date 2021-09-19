{{ $slot }}
{{ $parametro ?? ''}}
<form action="{{ route('site.contato') }}" method="POST">
    @csrf
    <input name="name" value="{{ old('name') }}" type="text" placeholder="Nome" class="{{ $border }}">
    @if ($errors->has('name'))
        <span class="text-danger text-left">
            {{ $errors->first('name') }}
        </span>
    @endif
    <br>
    <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone" class="{{ $border }}">
    <span class="text-danger text-left">
        {{ $errors->first('telefone') ?? '' }}
    </span>
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="{{ $border }}">
    <span class="text-danger text-left">
        {{ $errors->first('email') ?? '' }}
    </span>
    <br>
    <select name="contact_reasons_id" class="{{ $border }}">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivos as $key => $motivo )
            <option value="{{ $key }}" {{ old('contact_reasons_id') == $key ? 'selected' : '' }}>{{ $motivo }}</option>
        @endforeach
    </select>
    <span class="text-danger text-left">
        {{ $errors->first('contact_reasons_id') ?? '' }}
    </span>
    <br>
    <textarea name="message" value="{{ old('message') }}" class="{{ $border }}">{{ old('message') ?? 'Preencha aqui a sua mensagem' }}
    </textarea>
    <span class="text-danger text-left">
        {{ $errors->first('message') ?? '' }}
    </span>
    <br>
    <button type="submit" class="{{ $border }}">ENVIAR</button>
</form>
