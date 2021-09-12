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
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="message" value="{{ old('message') }}" class="{{ $border }}">{{ old('message') ?? 'Preencha aqui a sua mensagem' }}
    </textarea>
    <br>
    <button type="submit" class="{{ $border }}">ENVIAR</button>
</form>