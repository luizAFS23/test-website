@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

<h1>Lista de produtos</h1>

@if($id != null)
    <p>Exibindo produto id: {{ $id }}</p>
@else
    <p>Nenhum produto exibido</p>
@endif

@if($busca != '')
<p>Usuario esta buscando por {{ $busca }}</p>
@endif

@endsection
