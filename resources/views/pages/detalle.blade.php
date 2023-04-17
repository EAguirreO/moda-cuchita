@extends('layouts.main-layout')

@section('styles')
<link href="{{ asset('css/detalle.css') }}" rel="stylesheet" />
<link href="{{ asset('css/library/slick.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="section_general">
    <div class="section-1 d-flex">
        <a class="btn-atras" href=""><img class="img-btn-atras" src="{{asset('img/catalogo/atras.png')}}" alt=""><img class="img-btn-atras-oculta" src="{{asset('img/catalogo/atras-hover.png')}}" alt="">ATRÁS</a>
        <p>Hombres / Truzas</p>
    </div>
    <div class="section-2 d-flex align-items-start">
        <div class="sec-2-div-1 d-flex">
            <img class="img-fluid" width="100%" src="{{asset('img/catalogo/producto.jpg')}}" alt="">
        </div>
        <div class="sec-2-div-2 d-flex flex-column align-items-start">
            <p class="categoria">HOMBRES</p>
            <p class="nombre">Bicishort Tejido Rib</p>
            <p class="codigo">COD: 192037</p>
            <p class="precio">S/ 32.50</p>
            <p class="titulo-tallas">Tallas</p>
            <div class="div-tallas d-flex">
                <p>S</p>
                <p>M</p>
                <p>L</p>
            </div>
            <p class="titulo-colores">Colores</p>
            <div class="div-colores d-flex">
                <div class="div-color negro"></div>
                <div class="div-color azul"></div>
                <div class="div-color rojo"></div>
                <div class="div-color blanco"></div>
            </div>
            <button class="btn btn-solicitar">SOLICITAR PRODUCTO</button>
        </div>
    </div>
    <div class="section-3">
        <h2>También te puede interesar...</h2>
        <div class="linea"></div>
        <div class="autoplay">
            <a href="https://www.google.com" class="prod-relacionado">
                <div class="sec-3-prod" style="background-image: url({{asset('img/inicio/slider.jpg')}})">
                    <div class="sec-3-oculto d-flex align-items-end">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <p class="nombre-producto">Bóxer Estampado</p>
                <p class="categoria-producto">HOMBRES</p>
            </a>
            <a href="https://www.google.com" class="prod-relacionado">
                <div class="sec-3-prod" style="background-image: url({{asset('img/inicio/slider.jpg')}})">
                    <div class="sec-3-oculto d-flex align-items-end">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <p class="nombre-producto">Bóxer Ultra Cadera</p>
                <p class="categoria-producto">MUJERES</p>
            </a>
            <a href="https://www.google.com" class="prod-relacionado">
                <div class="sec-3-prod" style="background-image: url({{asset('img/inicio/slider.jpg')}})">
                    <div class="sec-3-oculto d-flex align-items-end">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <p class="nombre-producto">Bicishort Tejido Rib</p>
                <p class="categoria-producto">NIÑOS</p>
            </a>
            <a href="https://www.google.com" class="prod-relacionado">
                <div class="sec-3-prod" style="background-image: url({{asset('img/inicio/slider.jpg')}})">
                    <div class="sec-3-oculto d-flex align-items-end">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <p class="nombre-producto">Bóxer Corto</p>
                <p class="categoria-producto">NIÑOS</p>
            </a>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/slick.min.js') }}"></script>
<script>
    $(function() {
        $('.autoplay').slick({
            dots: false,
            infinite: true,
            // autoplaySpeed: 2000,
            slidesToShow: 4,
            slidesToScroll: 1,
            // autoplay: true,
            // arrows: true,
            // dotsClass: 'slick-dots',
            responsive: [{
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false,
                        arrows: false
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false,
                        arrows: false
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false,
                        arrows: false
                    }
                }
            ]
        });
    });
</script>
@endpush