<div class="titulo-pagina-2">
  <p>
    {{ $title ?? ''}}
  </p>
</div>

<div class="menu">
  <ul>
    <li>
      <a href="{{ route('cliente.create') }}">
        Novo
      </a>

      <a href="{{ route('cliente.index') }}">
        Consultar
      </a>
    </li>
  </ul>
</div>