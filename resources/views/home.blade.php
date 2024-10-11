@extends('layouts.plantillaReserva')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<link rel="stylesheet" href="{{ asset('css1/styleheader.css') }}">

@section('content')

    <section class="destinos">
        <h1>Principales Destinos</h1>

        <div class="grid-container">
            <div class="destino">
                <img src="{{ asset('css1/img-login/collcas.jpg') }}" alt="Roma">
                <h2>Restos Arqueológicos de Colcas</h2>
                <div class="info-hover">
                    <h3>Restos Arqueológicos de Colcas</h3>
                    <p>15 actividades</p>
                    <p>250 000 opiniones</p>
                    <p>8.5/10 valoración</p>
                </div>
            </div>

            <div class="destino">
                <img src="{{ asset('css1/img-login/bañostermales.jpg') }}" alt="Roma">
                <h2>Baños Termomedicinales de Collpa</h2>
                <div class="info-hover">
                    <h3>Baños Termomedicinales de Collpa</h3>
                    <p>150 actividades</p>
                    <p>250 000 opiniones</p>
                    <p>8.5/10 valoracion</p>
                </div>
            </div>

            <div class="destino">
                <img src="{{ asset('css1/img-login/lagunaHuascay.jpg') }}" alt="Roma">
                <h2>Laguna de Huascacocha</h2>
                <div class="info-hover">
                    <h3>Laguna de Huascacocha</h3>
                    <p>150 actividades</p>
                    <p>250 000 opiniones</p>
                    <p>8.5/10 valoracion</p>
                </div>
            </div>

            <div class="destino">
                <img src="{{ asset('css1/img-login/lagunaHuegue.jpg') }}" alt="Roma">
                <h2>Lagunas de Hueghue y Taprash</h2>
                <div class="info-hover">
                    <h3>Lagunas de Hueghue y Taprash</h3>
                    <p>150 actividades</p>
                    <p>250 000 opiniones</p>
                    <p>8.5/10 valoracion</p>
                </div>
            </div>

            <div class="destino">
                <img src="{{ asset('css1/img-login/lagunaTuctococha.jpg') }}" alt="Roma">
                <h2>Laguna de Tuctococha</h2>
                <div class="info-hover">
                    <h3>Laguna de Tuctococha</h3>
                    <p>150 actividades</p>
                    <p>250 000 opiniones</p>
                    <p>8.5/10 valoracion</p>
                </div>
            </div>

            <div class="destino">
                <img src="{{ asset('css1/img-login/bellaDurmiente.jpg') }}" alt="Roma">
                <h2>La Bella Durmiente de Carhuacayán</h2>
                <div class="info-hover">
                    <h3>La Bella Durmiente de Carhuacayán</h3>
                    <p>150 actividades</p>
                    <p>250 000 opiniones</p>
                    <p>8.5/10 valoracion</p>
                </div>
            </div>

            <div class="reserve-button">
                <a href="{{ route('reservas.index') }}">
                    <button>Reservar ahora</button>
                </a>
            </div>

        </div>

    </section>    

@endsection