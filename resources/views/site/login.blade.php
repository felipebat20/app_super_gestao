@extends('site.layouts.master')

@section('title', $title)

@section('container')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Login</h1>
        </div>

        <div class="informacao-pagina">
          <div style="width:30%; margin-left:auto; margin-right:auto;">
            <form action="{{ route('site.login')}}" method="post">
              @csrf
              <input type="text" name="user" placeholder="Usuário" class="borda-preta">
              <input type="text" name="password" placeholder="Senha" class="borda-preta">
              <button type="submit" class="borda-preta">Acessar</button>
            </form>
          </div>

        </div>
    </div>

    @include('site.partials.footer')
@endsection