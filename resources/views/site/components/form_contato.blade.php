{{ $slot }}
{{ $parametro ?? ''}}
<form action="{{ route('site.contato') }}" method="POST">
    @csrf
    <input name="name" value="{{ old('name') }}" type="text" placeholder="Nome" class="{{ $border }}">
    <br>
    <input name="telefone" value="{{ old('telefone') }}" type="text" placeholder="Telefone" class="{{ $border }}">
    <br>
    <input name="email" value="{{ old('email') }}" type="text" placeholder="E-mail" class="{{ $border }}">
    <br>
    <select name="contact_reason" class="{{ $border }}">
        <option value="">Qual o motivo do contato?</option>
        @foreach ($motivos as $key => $motivo )
            <option value="{{ $key }}" {{ old('contact_reason') == $key ? 'selected' : '' }}>{{ $motivo }}</option>
        @endforeach
    </select>
    <br>
    <textarea name="message" value="{{ old('message') }}" class="{{ $border }}">{{ old('message') ?? 'Preencha aqui a sua mensagem' }}
    </textarea>
    <br>
    <button type="submit" class="{{ $border }}">ENVIAR</button>
</form>