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

<section>
    <h2>Destinos Populares</h2>
    <div class="popular-content">
        <img src="{{ asset('css1/img/t6.jpg') }}" alt="">
        <img src="{{ asset('css1/img/t7.jpg') }}" alt="">
        <img src="{{ asset('css1/img/t8.jpg') }}" alt="">
        <img src="{{ asset('css1/img/t9.jpg') }}" alt="">
        <img src="{{ asset('css1/img/t10.jpg') }}" alt="">
        <img src="{{ asset('css1/img/t11.jpg') }}" alt="">
        <img src="{{ asset('css1/img/t12.jpg') }}" alt="">
    </div>
</section>

<main class="product container">

    <h2>PAQUETES DE TURISMO</h2>

    <div class="product-content">
        @foreach ($destinos as $destino)
            
            <div class="product-1">
                <img src="{{ asset('css1/img/t13.jpg') }}" alt="">
                <div class="producto-txt">
                    <h3> {{ $destino->nombre }} </h3>
                    <div class="price">
                        <p> {{ $destino->precio }} </p>
                        <a href="{{ route('reservas.create', $destino->id) }}" class="btn-2">Contratar</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="{{ asset('css1/img/t14.jpg') }}" alt="">
                <div class="producto-txt">
                    <h3>BAÑOS TERMALES DE COLLPA</h3>
                    <div class="price">
                        <p>$500</p>
                        <a href="#" class="btn-2">Contratar</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="{{ asset('css1/img/t15.jpg') }}" alt="">
                <div class="producto-txt">
                    <h3>MARCAMARCÁN</h3>
                    <div class="price">
                        <p>$500</p>
                        <a href="#" class="btn-2">Contratar</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="{{ asset('css1/img/t16.jpg') }}" alt="">
                <div class="producto-txt">
                    <h3>RESTOS ARQUEOLOGICOS DE COLCAS</h3>
                    <div class="price">
                        <p>$500</p>
                        <a href="#" class="btn-2">Contratar</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="{{ asset('css1/img/t5.jpg') }}" alt="">
                <div class="producto-txt">
                    <h3>LA TORTUGA DE QUILLAWAY</h3>
                    <div class="price">
                        <p>$500</p>
                        <a href="#" class="btn-2">Contratar</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="{{ asset('css1/img/t8.jpg') }}" alt="">
                <div class="producto-txt">
                    <h3>LAGUNAS DE PURICOCHA</h3>
                    <div class="price">
                        <p>$500</p>
                        <a href="#" class="btn-2">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="{{ asset('css1/img/t9.jpg') }}" alt="">
                <div class="producto-txt">
                    <h3>LA BELLA DURMIENTE</h3>
                    <div class="price">
                        <p>$500</p>
                        <a href="#" class="btn-2">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="{{ asset('css1/img/t3.jpg') }}" alt="">
                <div class="producto-txt">
                    <h3>CERRO DE SANTA CLARA</h3>
                    <div class="price">
                        <p>$500</p>
                        <a href="#" class="btn-2">Comprar</a>
                    </div>
                </div>
            </div>

            <div class="product-1">
                <img src="{{ asset('css1/img/t10.jpg') }}" alt="">
                <div class="producto-txt">
                    <h3>LAGUNA DE TUCTOCOCHA</h3>
                    <div class="price">
                        <p>$500</p>
                        <a href="#" class="btn-2">Comprar</a>
                    </div>
                </div>
            </div>
        

        @endforeach

    </div>
</main>

@endsection

@section('script')
    <script src="{{ asset('css1/app.js') }}"></script>
@endsection