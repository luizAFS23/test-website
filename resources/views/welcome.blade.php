<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/index.js"></script>
    </head>
    <body>
        <h1>Hello World</h1>
        <!-- Diretivas do Blade -->
        @if(10 > 5)
            <p>ola mundo</p>
        @endif

        <p>{{$nome}}</p>

        @if($nome == 'Pedro')
            <p>O nome é Pedro</p>
        @else
            <p>O nome não é Pedro</p>
        @endif

        @foreach($nomes as $nome)
           <p>{{ $loop -> index }}</p>
           <p>{{ $nome }}</p>
        @endforeach

    </body>
</html>
