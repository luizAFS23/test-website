@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<h1>Hello World</h1>
<!-- Diretivas do Blade -->
<!-- @if(10 > 5)
    <p>ola mundo</p>
@endif
 -->

<!-- @foreach($events as $event)
    <p>{{$event -> title}} -- {{$event -> description}}</p>
@endforeach -->

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">

    </form>
</div>

@endsection
