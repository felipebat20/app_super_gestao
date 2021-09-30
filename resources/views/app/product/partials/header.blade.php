<div class="titulo-pagina-2">
  <p>
    {{ $title ?? ''}}
  </p>
</div>

<div class="menu">
  <ul>
    <li>
      <a href="{{ route('product.create') }}">
        Novo
      </a>

      <a href="{{ route('product.index') }}">
        Consultar
      </a>
    </li>
  </ul>
</div>