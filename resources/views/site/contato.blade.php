@extends('site.layouts.master')

@section('title', $title)

@section('container')
    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                @component('site.components.form_contato')
                    
                @endcomponent
            </div>
        </div>
    </div>

    @include('site.partials.footer')
@endsection