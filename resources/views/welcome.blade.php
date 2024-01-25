@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<!-- Diretivas do Blade -->
<!-- @if(10 < 5)
    <p>ola mundo</p>
@endif
 -->

<!-- @foreach($events as $event)
    <p>{{$event -> title}} -- {{$event -> description}}</p>
@endforeach -->

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" name="search" id="search" class="form-control" placeholder="Procurar">

    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Próximos Eventos</h2>
    <p>Veja os eventos dos próximos dias</p>
</div>

@endsection
