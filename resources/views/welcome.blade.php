<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


    </head>
    <body>
        <!-- Diretivas do Blade -->
        @if(10 > 5)
            <p>Hello World</p>
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
