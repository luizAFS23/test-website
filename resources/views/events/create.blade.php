@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST">
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control">
        </div>
    </form>
</div>

@endsection
