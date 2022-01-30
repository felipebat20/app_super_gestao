@extends('site.layouts.master')

@section('title', $title)

@section('container')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>
              Login
            </h1>
        </div>

        <div class="informacao-pagina">
          <div style="width:30%; margin-left:auto; margin-right:auto;">
            <form
              action="{{ route('site.login')}}"
              method="post"
            >
              @csrf

              <input
                type="text"
                name="user"
                placeholder="Usuário"
                class="borda-preta"
                value="{{ old('user') }}"
              >

              <small class="text-danger text-left">
                {{ $errors->has('user') ? $errors->first('user') : '' }}
              </small>

              <input
                type="password"
                name="password"
                placeholder="Senha"
                class="borda-preta"
                value="{{ old('password') }}"
              >

              <small class="text-danger text-left">
                {{ $errors->first('password') ?? '' }}
              </small>

              <button
                type="submit"
                class="borda-preta"
              >
                Acessar
              </button>
            </form>
            {{ isset($error) && $error !== '' ? $error : ''}}
          </div>
        </div>
    </div>

    @include('site.partials.footer')
@endsection