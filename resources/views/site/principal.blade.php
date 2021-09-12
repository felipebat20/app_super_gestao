@extends('site.layouts.master')

@section('title', 'Principal')

@section('container')
    <div class="conteudo-destaque">

        <div class="esquerda">
            <div class="informacoes">
                <h1>Sistema Super Gestão</h1>
                <p>Software para gestão empresarial ideal para sua empresa.<p>
                <div class="chamada">
                    <img src="{{ asset('/img/check.png') }}">
                    <span class="texto-branco">Gestão completa e descomplicada</span>
                </div>
                <div class="chamada">
                    <img src="{{ asset('img/check.png') }}">
                    <span class="texto-branco">Sua empresa na nuvem</span>
                </div>
            </div>

            <div class="video">
                <img src="{{ asset('img/player_video.jpg') }}">
            </div>
        </div>

        <div class="direita">
            <div class="contato">
                <h1>Contato</h1>
                <p>Caso tenha qualquer dúvida por favor entre em contato com nossa equipe pelo formulário abaixo.<p>
                @component('site.components.form_contato', [
                    'border'=> 'borda-branca',
                    'parametro' => 'Agora estamos passando um parâmetro pelo component utilizando o array associativo. Pela segunda instrução do array.',
                    'motivos' => $motivos
                ])
                @endcomponent
            </div>
        </div>
    </div>
@endsection
