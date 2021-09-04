<form action="{{ route('site.contato') }}" method="POST">
    @csrf
    <input name="name" type="text" placeholder="Nome" class="borda-preta">
    <br>
    <input name="phone" type="text" placeholder="Telefone" class="borda-preta">
    <br>
    <input name="email" type="text" placeholder="E-mail" class="borda-preta">
    <br>
    <select name="reason" class="borda-preta">
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
    </select>
    <br>
    <textarea name="feedback" class="borda-preta">Preencha aqui a sua mensagem</textarea>
    <br>
    {{ $slot }}
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>