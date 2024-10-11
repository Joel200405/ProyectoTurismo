<!-- resources/views/destinos/show.blade.php -->
@extends('layouts.general')

@section('content')
<div class="detalle-destino-container">
    <!-- Título del destino -->
    <div class="detalle-header">
        <h1 class="detalle-titulo">{{ $destino->nombre }}</h1>
    </div>

    <!-- Contenedor principal dividido en dos columnas: Imagen y Descripción -->
    <div class="detalle-main">
        <!-- Imagen del destino -->
        <div class="detalle-img">
            <img src="{{ asset('css/img/' . $destino->imagen_url) }}" alt="{{ $destino->nombre }}">
        </div>

        <!-- Descripción y detalles -->
        <div class="detalle-info">
            <p><strong>Categoría:</strong> {{ $destino->categoria }}</p>
            <p><strong>Descripción:</strong> {{ $destino->descripcion }}</p>
            <p><strong>Precio:</strong> S/ {{ $destino->precio }}</p>
            <p><strong>Duración:</strong> {{ $destino->duracion }}</p>
            <p><strong>Ubicación:</strong> {{ $destino->ubicacion }}</p>
            <!-- Otros detalles interesantes -->
            <p><strong>Recomendaciones:</strong> Lleva ropa cómoda, bloqueador solar, y mucha agua.</p>
        </div>
    </div>

    <!-- Botón de reservar -->
    <div class="reservar-btn-container">
        <button class="reservar-btn">Reservar</button>
    </div>
</div>
@endsection

@section('styles')
    <!-- Llamamos al CSS específico para esta página -->
    <link rel="stylesheet" href="{{ asset('css/styleDShow.css') }}">
@endsection