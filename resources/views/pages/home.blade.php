@extends('layouts.main-layout')

@section('styles')
<link href="{{ asset('css/home.css') }}" rel="stylesheet" />
<link href="{{ asset('css/library/slick.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="section_general">
    <div class="section-1">
        <div class="row">
            <div class="col-12 col-lg-6 px-0">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-fondo" style="background-image: url({{asset('img/inicio/slider.jpg')}})"></div>
                            <img class="carousel-img img-fluid" src="{{asset('img/inicio/slider.jpg')}}" alt="">
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-fondo" style="background-image: url({{asset('img/inicio/slider.jpg')}})"></div>
                            <img class="carousel-img img-fluid" src="{{asset('img/inicio/slider.jpg')}}" alt="">
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-fondo" style="background-image: url({{asset('img/inicio/slider.jpg')}})"></div>
                            <img class="carousel-img img-fluid" src="{{asset('img/inicio/slider.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 px-0">
                <div class="slider-div d-flex flex-column align-items-start justify-content-center h-100">
                    <h1>La prenda que buscas, <br>con la <span>mejor calidad</span></h1>
                    <div></div>
                    <a class="btn" href="">VER CATÁLOGO</a>
                </div>
            </div>
        </div>
    </div>

    <div class="section-2">
        <h2>Productos Destacados</h2>
        <div class="linea"></div>
        <div class="autoplay">
            <a href="https://www.google.com" class="prod-destacado">
                <div class="sec-2-prod" style="background-image: url({{asset('img/inicio/slider.jpg')}})">
                    <div class="sec-2-oculto d-flex align-items-end">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <p class="nombre-producto">Bóxer Estampado</p>
                <p class="categoria">HOMBRES</p>
            </a>
            <a href="https://www.google.com" class="prod-destacado">
                <div class="sec-2-prod" style="background-image: url({{asset('img/inicio/slider.jpg')}})">
                    <div class="sec-2-oculto d-flex align-items-end">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <p class="nombre-producto">Bóxer Ultra Cadera</p>
                <p class="categoria">MUJERES</p>
            </a>
            <a href="https://www.google.com" class="prod-destacado">
                <div class="sec-2-prod" style="background-image: url({{asset('img/inicio/slider.jpg')}})">
                    <div class="sec-2-oculto d-flex align-items-end">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <p class="nombre-producto">Bicishort Tejido Rib</p>
                <p class="categoria">NIÑOS</p>
            </a>
            <a href="https://www.google.com" class="prod-destacado">
                <div class="sec-2-prod" style="background-image: url({{asset('img/inicio/slider.jpg')}})">
                    <div class="sec-2-oculto d-flex align-items-end">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <p class="nombre-producto">Bóxer Corto</p>
                <p class="categoria">NIÑOS</p>
            </a>

            <a href="https://www.google.com" class="prod-destacado">
                <div class="sec-2-prod" style="background-image: url({{asset('img/inicio/slider.jpg')}})">
                    <div class="sec-2-oculto d-flex align-items-end">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <p class="nombre-producto">Bóxer Estampado</p>
                <p class="categoria">HOMBRES</p>
            </a>
            <a href="https://www.google.com" class="prod-destacado">
                <div class="sec-2-prod" style="background-image: url({{asset('img/inicio/slider.jpg')}})">
                    <div class="sec-2-oculto d-flex align-items-end">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <p class="nombre-producto">Bóxer Ultra Cadera</p>
                <p class="categoria">MUJERES</p>
            </a>
            <a href="https://www.google.com" class="prod-destacado">
                <div class="sec-2-prod" style="background-image: url({{asset('img/inicio/slider.jpg')}})">
                    <div class="sec-2-oculto d-flex align-items-end">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <p class="nombre-producto">Bicishort Tejido Rib</p>
                <p class="categoria">NIÑOS</p>
            </a>
            <a href="https://www.google.com" class="prod-destacado">
                <div class="sec-2-prod" style="background-image: url({{asset('img/inicio/slider.jpg')}})">
                    <div class="sec-2-oculto d-flex align-items-end">
                        <p>VER PRODUCTO</p>
                    </div>
                </div>
                <p class="nombre-producto">Bóxer Corto</p>
                <p class="categoria">NIÑOS</p>
            </a>
            
        </div>
    </div>

    <div class="section-3">
        <h2>Conoce cada uno de nuestros productos</h2>
        <div class="linea"></div>
        <div class="row">
            <div class="col-12 col-md-6 col-xl-3">
                <a class="sec-3-cont" href="">
                    <div class="sec-3-img sec-3-fondo-1" >
                        <div class="sec-3-oculto d-flex flex-column align-items-start justify-content-end h-100">
                            <p>PARA NIÑAS</p>
                            <div class="btn btn-rosado">VER CATÁLOGO</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <a class="sec-3-cont" href="">
                    <div class="sec-3-img sec-3-fondo-2" >
                        <div class="sec-3-oculto d-flex flex-column align-items-start justify-content-end h-100">
                            <p>PARA NIÑOS</p>
                            <div class="btn btn-celeste">VER CATÁLOGO</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <a class="sec-3-cont" href="">
                    <div class="sec-3-img sec-3-fondo-3" >
                        <div class="sec-3-oculto d-flex flex-column align-items-start justify-content-end h-100">
                            <p>PARA MUJERES</p>
                            <div class="btn btn-morado">VER CATÁLOGO</div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-12 col-md-6 col-xl-3">
                <a class="sec-3-cont" href="">
                    <div class="sec-3-img sec-3-fondo-4" >
                        <div class="sec-3-oculto d-flex flex-column align-items-start justify-content-end h-100">
                            <p>PARA HOMBRES</p>
                            <div class="btn btn-azul">VER CATÁLOGO</div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="section-4">
        <h2>Nuestras Marcas</h2>
        <div class="linea"></div>
        <div class="autoplay">
            <img class="img-fluid" src="{{asset('img/inicio/logo-01.png')}}" alt="">
            <img class="img-fluid" src="{{asset('img/inicio/logo-02.png')}}" alt="">
            <img class="img-fluid" src="{{asset('img/inicio/logo-03.png')}}" alt="">
            <img class="img-fluid" src="{{asset('img/inicio/logo-04.png')}}" alt="">
            <img class="img-fluid" src="{{asset('img/inicio/logo-01.png')}}" alt="">
            <img class="img-fluid" src="{{asset('img/inicio/logo-02.png')}}" alt="">
            <img class="img-fluid" src="{{asset('img/inicio/logo-03.png')}}" alt="">
            <img class="img-fluid" src="{{asset('img/inicio/logo-04.png')}}" alt="">
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
                        dots: false
                    }
                },{
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: false
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
