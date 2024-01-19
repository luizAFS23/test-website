@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

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

@endsection
