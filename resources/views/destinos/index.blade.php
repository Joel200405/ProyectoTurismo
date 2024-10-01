@extends('layouts.general')

@section('title', 'Lista de Destinos') <!-- Título personalizado -->

@section('content') <!-- Sección de contenido dinámico -->
    <h1>Destinos</h1>
    <ul>
        @foreach($destinos as $destino)
            <li>
                <a href="{{ route('destinos.show', $destino->id) }}">{{ $destino->nombre }}</a>
            </li>
        @endforeach
    </ul>
@endsection
