<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - @yield('title')</title>
        <meta charset="utf-8">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/normalize.css')}}">
        <link rel="stylesheet" href="{{ asset('css/estilo_base.css')}}">
    </head>

    <body>
        @include('app.layouts.partials.header')
        @yield('container')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"></script>
    </body>
</html>