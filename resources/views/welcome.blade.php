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
    <form action="" method="GET"> {{-- Método GET para buscar coisas do banco de dados --}}
        <input type="text" name="search" id="search" class="form-control" placeholder="Procurar">
    </form>
</div>

<div id="events-container" class="col-md-12">
    @if($search)
        <h2>Buscando por: {{$search}}</h2>
    @else
        <h2>Próximos Eventos</h2>
        <p class="subtitle">Veja os eventos dos próximos dias</p>
    @endif
    <div id="cards-container" class="row">
        @foreach($events as $event)
            <div class="card col-md-3">
                <img src="/img/events/{{$event -> image}}" alt="{{ $event -> title }}">
                <div class="card-body">
                    <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                    <h5 class="card-title">{{$event -> title}}</h5>
                    <p class="card-participants">X Participantes</p>
                    <a href="/events/{{ $event -> id }}" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @endforeach
        @if(count($events) == 0 && $search)
            <p>Não foi possível encontrar por nenhum evento com {{$search}}! <a href="/">Ver todos os eventos</a></p>
        @elseif(count($events) == 0)
            <p>Não há eventos disponíveis!</p>
        @endif
    </div>
</div>

@endsection
