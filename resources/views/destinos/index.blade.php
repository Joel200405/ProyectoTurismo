@extends('layouts.general')

<link rel="stylesheet" href="{{ asset('css/styleDestinosIndex.css') }}">

@section('content')

<section class="destinos">
    <h1>Principales Destinos</h1>
    <div class="container">
        <div class="destino-display">
            <div class="destino-wrapper">
                <div class="card">
                    <img src="{{ asset('css1/img/img2.jpg') }}" alt="Destino 1">
                    <div class="card-info">
                        <h2>Paradise Island</h2>
                        <p>A stunning getaway with crystal clear waters and white sand beaches.</p>
                        <a href="#" class="reserve-button">Reservar</a>
                    </div>
                </div>

                <div class="card">
                    <img src="{{ asset('css1/img/img3.jpg') }}" alt="Destino 2">
                    <div class="card-info">
                        <h2>Mountain Escape</h2>
                        <p>Experience the breathtaking views and adventure in the mountains.</p>
                        <a href="#" class="reserve-button">Reservar</a>
                    </div>
                </div>

                <div class="card">
                    <img src="{{ asset('css1/img/img4.jpg') }}" alt="Destino 3">
                    <div class="card-info">
                        <h2>Desert Adventure</h2>
                        <p>Explore the vastness of the desert and enjoy a unique experience.</p>
                        <a href="#" class="reserve-button">Reservar</a>
                    </div>
                </div>

                <div class="card">
                    <img src="{{ asset('css1/img/img4.jpg') }}" alt="Destino 3">
                    <div class="card-info">
                        <h2>Desert Adventure</h2>
                        <p>Explore the vastness of the desert and enjoy a unique experience.</p>
                        <a href="#" class="reserve-button">Reservar</a>
                    </div>
                </div>

                <div class="card">
                    <img src="{{ asset('css1/img/img2.jpg') }}" alt="Destino 1">
                    <div class="card-info">
                        <h2>Paradise Island</h2>
                        <p>A stunning getaway with crystal clear waters and white sand beaches.</p>
                        <a href="#" class="reserve-button">Reservar</a>
                    </div>
                </div>

                <div class="card">
                    <img src="{{ asset('css1/img/img3.jpg') }}" alt="Destino 2">
                    <div class="card-info">
                        <h2>Mountain Escape</h2>
                        <p>Experience the breathtaking views and adventure in the mountains.</p>
                        <a href="#" class="reserve-button">Reservar</a>
                    </div>
                </div>

                <div class="card">
                    <img src="{{ asset('css1/img/img4.jpg') }}" alt="Destino 3">
                    <div class="card-info">
                        <h2>Desert Adventure</h2>
                        <p>Explore the vastness of the desert and enjoy a unique experience.</p>
                        <a href="#" class="reserve-button">Reservar</a>
                    </div>
                </div>

                <div class="card">
                    <img src="{{ asset('css1/img/img4.jpg') }}" alt="Destino 3">
                    <div class="card-info">
                        <h2>Desert Adventure</h2>
                        <p>Explore the vastness of the desert and enjoy a unique experience.</p>
                        <a href="#" class="reserve-button">Reservar</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-buttons">
            <button class="nav-button left" onclick="moveDestinos(-1)">&#10094;</button>
            <button class="nav-button right" onclick="moveDestinos(1)">&#10095;</button>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script src="{{ asset('js/destinosIndex.js') }}"></script>
@endsection