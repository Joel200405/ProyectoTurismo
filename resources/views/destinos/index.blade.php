@extends('layouts.general')

@section('content')
<div class="titulo-container">
    <h1 class="titulo">TURISMO DE CARHUACAYÁN</h1>
</div>

<div class="destino-container">
    <div class="destino-carousel-wrapper">
        <div class="destino-carousel" id="destinoCarousel">
            @foreach ($destinos as $destino)
            <div class="destino-card">
                <img src="{{ asset('css1/img/' . $destino->imagen_url) }}" alt="{{ $destino->nombre }}">
                <div class="destino-info">
                    <span class="badge">{{ $destino->categoria }}</span>
                    <h3>{{ $destino->nombre }}</h3>
                    <p>{{ $destino->descripcion }}</p>
                    <div class="precio">
                        <p>S/ {{ $destino->precio }}</p>
                        <span>Antes: S/ {{ $destino->precio_regular }}</span>
                    </div>
                    <button class="add-button">+</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="carousel-controls">
        <button id="prevBtn" class="control-btn">‹</button>
        <button id="nextBtn" class="control-btn">›</button>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('js/destinosIndex.js') }}"></script>
@endsection
