<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Moda Cuchita</title>
    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    {{-- Fuente Baloo Chettan --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Chettan+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('css/general.css')}}">
    <link rel="stylesheet" href="{{asset('css/library/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/library/hover.css')}}">
    
    @yield('styles')
</head>

<body>

    <header class="animated fadeIn overflow-hidden header">
        <div class="d-flex align-items-center justify-content-between mx-auto">
            <div class="text-center">
                <a class="" href="{{url('home')}}">
                    <img class="img-fluid img-logo" src="{{asset('img/inicio/logo-01c.png')}}" alt="">
                </a>
            </div>
            <div class="col">
                <ul class="nav nav-fill justify-content-end align-items-center nav-menu">
                    {{-- <a class="borde-menu-header">|</a> --}}

                    {{-- <a class="nav-link {{ (request()->is('home')) ? 'nav-link-activo' : '' }}" href="{{url('home')}}">Inicio</a> --}}
                    
                    <a class="nav-link {{ (request()->is('nosotros')) ? 'nav-link-activo' : '' }}" href="{{url('nosotros')}}">Nosotros</a>
                    
                    {{-- <a class="nav-link {{ (request()->is('catalogo') || Request::route()->getName() == 'client.productDetail')  ? 'nav-link-activo' :'' }}" href="{{url('catalogo')}}">Catálogo</a> --}}

                    <a class="nav-link {{ (request()->is('nosotros')) ? 'nav-link-activo' : '' }}" href="{{url('nosotros')}}">Niños</a>

                    <a class="nav-link {{ (request()->is('nosotros')) ? 'nav-link-activo' : '' }}" href="{{url('nosotros')}}">Niñas</a>

                    <a class="nav-link {{ (request()->is('nosotros')) ? 'nav-link-activo' : '' }}" href="{{url('nosotros')}}">Caballeros</a>

                    <a class="nav-link {{ (request()->is('nosotros')) ? 'nav-link-activo' : '' }}" href="{{url('nosotros')}}">Damas</a>

                    {{-- <a class="nav-link {{ (request()->is('procesos')) ? 'nav-link-activo' : '' }}" href="{{url('procesos')}}">Procesos</a> --}}

                    {{-- <a class="nav-link {{ (request()->is('galeria')) ? 'nav-link-activo' : '' }}" href="{{url('galeria')}}">Galería</a> --}}
                    
                    <a class="nav-link {{ (request()->is('contactenos')) ? 'nav-link-activo' : '' }}" href="{{url('contactenos')}}">Escríbenos</a>
                    {{-- <a class="borde-menu-header">|</a> --}}
                    <div class="contenedor-rs-header">
                        <a class="header-fb d-inline-block me-3" href="#" target="_blank"><img class="header-img-fb" src="{{asset('img/inicio/facebook-header.png')}}"><img class="img-fb-hover" src="{{asset('img/inicio/facebook-hover.png')}}"></a>
                        <a class="header-inst d-inline-block" href="#" target="_blank"><img class="header-img-inst" src="{{asset('img/inicio/instagram-header.png')}}"><img class="img-inst-hover" src="{{asset('img/inicio/instagram-hover.png')}}"></a>
                    </div>
                </ul>
                <button class="btn btn-light btn-abrir-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
                    <i class="bi bi-list"></i>
                </button>
            </div>
        </div>          
    </header>

    {{-- <div class="btns-lang animated fadeInRight">
        <a href="{{ url('lang/es') }}" class="{{app()->getLocale() == 'es' ? 'active':''}} d-inline-block me-2">
           <img src="{{asset('img/es.png')}}" width="25">
        </a>
        <a href="{{ url('lang/en') }}" class="{{app()->getLocale() == 'en' ? 'active':''}} d-inline-block">
           <img src="{{asset('img/en.png')}}" width="25">
        </a>
    </div> --}}

    <div class="offcanvas offcanvas-start header-offcanvas" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title text-white" id="offcanvasExampleLabel">Menú</h5>
            <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav ms-auto nav-main">
                <li class="nav-item">
                    <a
                        class="
                            nav-link                                
                            text-center 
                            offcanvas-enlace                                   
                            {{ (request()->is('home')) ? 'offcanvas-enlace-activo' :'' }}
                        "
                        style="font-size: 1.5rem"
                        href="{{url('home')}}"
                        >Inicio</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="
                            nav-link                                    
                            text-center
                            offcanvas-enlace
                            {{ (request()->is('nosotros')) ? 'offcanvas-enlace-activo' :'' }}
                        "
                        style="font-size: 1.5rem"
                        href="{{url('nosotros')}}"
                        >Nosotros</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="
                            nav-link                                    
                            text-center 
                            offcanvas-enlace
                            {{ (request()->is('catalogo') || Request::route()->getName() == 'client.productDetail') ? 'offcanvas-enlace-activo' :'' }}
                        "
                        style="font-size: 1.5rem"
                        href="{{url('catalogo')}}"
                        >Catálogo</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="
                            nav-link
                            text-center 
                            offcanvas-enlace
                            {{ (request()->is('procesos')) ? 'offcanvas-enlace-activo' :'' }}
                        "
                        style="font-size: 1.5rem"
                        href="{{url('procesos')}}"
                        >Procesos</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="
                            nav-link
                            text-center 
                            offcanvas-enlace
                            {{ (request()->is('galeria')) ? 'offcanvas-enlace-activo' :'' }}
                        "
                        style="font-size: 1.5rem"
                        href="{{url('galeria')}}"
                        >Galería</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="
                            nav-link
                            text-center 
                            offcanvas-enlace
                            {{ (request()->is('contactenos')) ? 'offcanvas-enlace-activo' :'' }}
                        "
                        style="font-size: 1.5rem"
                        href="{{url('contactenos')}}"
                        >Contacto</a
                    >
                </li>
                <div class="off-canvas-contenedor-rs d-flex justify-content-center mt-4">
                    <a href="#" target="_blank" class="nav-icono-rp me-3">
                        <img src="{{asset('img/inicio/facebook.png')}}" alt="">
                    </a>
                    <a href="#" target="_blank" class="nav-icono-rp">
                        <img src="{{asset('img/inicio/instagram.png')}}" alt="">
                    </a>
                    {{-- <a href="#" class="nav-icono-rp me-3">
                        <img src="{{asset('img/inicio/facebook.svg')}}" alt="">
                    </a>
                    <a href="#" class="nav-icono-rp">
                        <img src="{{asset('img/inicio/instagram.svg')}}" alt="">
                    </a> --}}
                </div>
                <div class="d-flex justify-content-center mt-5">
                    <a href="{{ url('lang/es') }}" class="{{app()->getLocale() == 'es' ? 'active':''}} d-inline-block me-2">
                       <img src="{{asset('img/es.png')}}" width="30">
                    </a>
                    <a href="{{ url('lang/en') }}" class="{{app()->getLocale() == 'en' ? 'active':''}} d-inline-block">
                       <img src="{{asset('img/en.png')}}" width="30">
                    </a>
                </div>
            </ul>
        </div>
    </div>

    <main class="overflow-x-hidden main-web">
        @yield('content')
    </main>

    <footer class="container-fluid">
        <div class="row">
            <div class="col">
                <h3>Moda Cuchita</h3>
                <div class="d-flex flex-column">
                    <a class="" href="{{url('nosotros')}}">Nosotros</a>
                    <a class="" href="{{url('nosotros')}}">Escríbenos</a>
                </div>
            </div>
            <div class="col">
                <h3>Nuestros Productos</h3>
                <div class="d-flex flex-column">
                    <a class="" href="{{url('nosotros')}}">Niños</a>
                    <a class="" href="{{url('nosotros')}}">Niñas</a>
                    <a class="" href="{{url('nosotros')}}">Caballeros</a>
                    <a class="" href="{{url('nosotros')}}">Damas</a>
                </div>
            </div>
            <div class="col">
                <p>Sé el primero en conocer nuestras últimas colecciones y ofertas especiales.</p>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Ingresa tu correo aquí" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2"><img src="{{asset('img/inicio/enviar.png')}}"></span>
                </div>
            </div>
        </div>
    </footer>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    {{-- JQuery --}}
    <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
    {{-- Scroll menu --}}
    <script>
        $(document).on("scroll", function(){
            var desplazamientoActual = $(document).scrollTop();

            if(desplazamientoActual > 10){
                $('.header').css('background', '#fff');
                $('.nav-menu .nav-link').css('color', 'black');
            }

            if(desplazamientoActual < 10){
                $('.header').css('background', '');
            }
        }); 
    </script>

    @livewireScripts
    @stack('scripts')
</body>

</html>