@extends('layouts.plantillaReserva')

@section('title', 'Index reserva ')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<link rel="stylesheet" href="{{ asset('css1/style.css') }}">

@section('content')

<div class="slider">
    <!-- list Items -->
    <div class="list">
        <div class="item active">
            <img src="{{ asset('css1/img/t1.jpg') }}">
            <div class="content">
                <p>Tour</p>
                <h3>Destino turistico 1</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, neque?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, ex.
                </p>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('css1/img/t2.jpg') }}">
            <div class="content">
                <p>Tour</p>
                <h3>Destino turistico 2</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, neque?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, ex.
                </p>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('css1/img/t3.jpg') }}">
            <div class="content">
                <p>Tour</p>
                <h3>Destino turistico 3</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, neque?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, ex.
                </p>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('css1/img/t4.jpg') }}">
            <div class="content">
                <p>Tour</p>
                <h3>Destino turistico 4</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, neque?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, ex.
                </p>
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('css1/img/t5.jpg') }}">
            <div class="content">
                <p>design</p>
                <h3>Destino turistico 5</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, neque?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, ex.
                </p>
            </div>
        </div>
    </div>
    <!-- button arrows -->
    <div class="arrows">
        <button id="prev"><</button>
        <button id="next">></button>
    </div>
    <!-- thumbnail -->
    <div class="thumbnail">
        <div class="item active">
            <img src="{{ asset('css1/img/t1.jpg') }}">
            <div class="content">
                Name Slider
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('css1/img/t2.jpg') }}">
            <div class="content">
                Name Slider
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('css1/img/t3.jpg') }}">
            <div class="content">
                Name Slider
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('css1/img/t4.jpg') }}">
            <div class="content">
                Name Slider
            </div>
        </div>
        <div class="item">
            <img src="{{ asset('css1/img/t5.jpg') }}">
            <div class="content">
                Name Slider
            </div>
        </div>
    </div>
</div>

<div class="destino-detalle">
    <h2>Selecciona un destino para ver los detalles</h2>

    <!-- Formulario que envía la selección del destino -->
    <form action="{{ route('reservas.index') }}" method="GET">
        <select name="destino_id" onchange="this.form.submit()">
            <option value="" disabled selected>Selecciona un destino</option>
            @foreach ($destinos as $destino)
                <option value="{{ $destino->id }}" {{ request('destino_id') == $destino->id ? 'selected' : '' }}>
                    {{ $destino->nombre }}
                </option>
            @endforeach
        </select>
    </form>

    <!-- Mostrar detalles del destino seleccionado si existe -->
    @if ($destinoSeleccionado)
        <div id="detallesDestino">
            <img src="{{ asset('css/img/' . $destinoSeleccionado->imagen_url) }}" alt="{{ $destinoSeleccionado->nombre }}">
            <h3>{{ $destinoSeleccionado->nombre }}</h3>
            <p><strong>Descripción:</strong> {{ $destinoSeleccionado->descripcion }}</p>
            <p><strong>Ubicación:</strong> {{ $destinoSeleccionado->ubicacion }}</p>
            <p><strong>Precio:</strong> ${{ $destinoSeleccionado->precio }}</p>
            
            <div class="reservar-btn-container">
                <button class="reservar-btn">
                    Reservar
                </button>
            </div>
        </div>
    @endif

</div>

</main>

@endsection

@section('script')
    <script src="{{ asset('css1/app.js') }}"></script>
@endsection