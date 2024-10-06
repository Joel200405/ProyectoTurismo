@extends('layouts.plantillaReserva')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<link rel="stylesheet" href="{{ asset('css1/styleheader.css') }}">

@section('content')

    <section class="destinos">
        <h1>Principales Destinos</h1>

        <div class="grid-container">
            <div class="destino">
                <img src="{{ asset('css1/img-login/homegrid.jpg') }}" alt="Roma">
                <h2>Roma</h2>
                <div class="info-hover">
                    <h3>Roma</h3>
                    <p>150 actividades</p>
                    <p>250 000 opiniones</p>
                    <p>8.5/10 valoracion</p>
                </div>
            </div>

            <div class="destino">
                <img src="{{ asset('css1/img-login/homegrid.jpg') }}" alt="Roma">
                <h2>Roma</h2>
                <div class="info-hover">
                    <h3>Roma</h3>
                    <p>150 actividades</p>
                    <p>250 000 opiniones</p>
                    <p>8.5/10 valoracion</p>
                </div>
            </div>

            <div class="destino">
                <img src="{{ asset('css1/img-login/homegrid.jpg') }}" alt="Roma">
                <h2>Roma</h2>
                <div class="info-hover">
                    <h3>Roma</h3>
                    <p>150 actividades</p>
                    <p>250 000 opiniones</p>
                    <p>8.5/10 valoracion</p>
                </div>
            </div>

            <div class="destino">
                <img src="{{ asset('css1/img-login/homegrid.jpg') }}" alt="Roma">
                <h2>Roma</h2>
                <div class="info-hover">
                    <h3>Roma</h3>
                    <p>150 actividades</p>
                    <p>250 000 opiniones</p>
                    <p>8.5/10 valoracion</p>
                </div>
            </div>

            <div class="destino">
                <img src="{{ asset('css1/img-login/homegrid.jpg') }}" alt="Roma">
                <h2>Roma</h2>
                <div class="info-hover">
                    <h3>Roma</h3>
                    <p>150 actividades</p>
                    <p>250 000 opiniones</p>
                    <p>8.5/10 valoracion</p>
                </div>
            </div>

            <div class="destino">
                <img src="{{ asset('css1/img-login/homegrid.jpg') }}" alt="Roma">
                <h2>Roma</h2>
                <div class="info-hover">
                    <h3>Roma</h3>
                    <p>150 actividades</p>
                    <p>250 000 opiniones</p>
                    <p>8.5/10 valoracion</p>
                </div>
            </div>

            <div class="reserve-button">
                <button>Reservar ahora</button>
            </div>

        </div>

    </section>    

@endsection