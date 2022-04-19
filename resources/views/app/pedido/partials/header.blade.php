<div class="titulo-pagina-2">
  <p>
    {{ $title ?? ''}}
  </p>
</div>

<div class="menu">
  <ul>
    <li>
      <a href="{{ route('pedido.create') }}">
        Novo
      </a>

      <a href="{{ route('pedido.index') }}">
        Consultar
      </a>
    </li>
  </ul>
</div>