<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - @yield('title')</title>
        <meta charset="utf-8">

        <link rel="stylesheet" href="{{ asset('css/normalize.css')}}">
        <link rel="stylesheet" href="{{ asset('css/estilo_base.css')}}">
    </head>

    <body>
        @include('site.partials.header')
        @yield('container')
    </body>
</html>