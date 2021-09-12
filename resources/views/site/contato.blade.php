@extends('site.layouts.master')

@section('title', $title)

@section('container')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <pre>
            {{print_r($errors)}}
        </pre>

        <div class="informacao-pagina">
            <div class="contato-principal"  style="width: 50%; margin:auto">
                @component('site.components.form_contato', ['border'=> 'borda-preta'])
                    {{-- <p>Passando conteúdo html para o component form contato</p> --}}
                    {{-- <p>Isso foi possível ao utilizarmos a variavel $slot dentro do component.</p> --}}
                    <p>Não há nada que não possa aprender, desde que apenas comece a ler, praticar, ver videos e ensinar.</p>
                @endcomponent
            </div>
        </div>
    </div>

    @include('site.partials.footer')
@endsection