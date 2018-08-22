<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title or 'Matematicando - Jogo de Inteligência'}}</title>
    <link rel="stylesheet" href="{{ url('css/materialize.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    <script src="{{ url('js/materialize.js') }}"></script>
</head>
<body>
    @include('template.navbar')
      @yield('contents')
    @include('template.footer')
    <script src="{{ url('js/main.js') }}"></script>
</body>
</html>
