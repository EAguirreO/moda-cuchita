<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Moda Cuchita</title>
    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    {{-- Bootstrap Icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
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
            <div class="header-1 text-center">
                <a class="" href="{{url('home')}}">
                    <img class="img-fluid img-logo" src="{{asset('img/inicio/logo-01c.png')}}" alt="">
                </a>
            </div>
            <div class="d-flex">
                <ul class="nav nav-fill justify-content-end align-items-center nav-menu">
                    
                    <a class="nav-link {{ (request()->is('nosotros')) ? 'nav-link-activo' : '' }}" href="{{url('nosotros')}}">Nosotros</a>
                    
                    {{-- <a class="nav-link {{ (request()->is('catalogo') || Request::route()->getName() == 'client.productDetail')  ? 'nav-link-activo' :'' }}" href="{{url('catalogo')}}">Catálogo</a> --}}

                    <a class="nav-link {{ (request()->is('ninios')) ? 'nav-link-activo' : '' }}" href="{{url('ninios')}}">Niños</a>

                    <a class="nav-link {{ (request()->is('ninias')) ? 'nav-link-activo' : '' }}" href="{{url('ninias')}}">Niñas</a>

                    <a class="nav-link {{ (request()->is('caballeros')) ? 'nav-link-activo' : '' }}" href="{{url('caballeros')}}">Caballeros</a>

                    <a class="nav-link {{ (request()->is('damas')) ? 'nav-link-activo' : '' }}" href="{{url('damas')}}">Damas</a>
                    
                    <a class="nav-link {{ (request()->is('contactenos')) ? 'nav-link-activo' : '' }}" href="{{url('contactenos')}}">Escríbenos</a>

                    <div class="contenedor-rs-header">
                        <a class="header-fb d-inline-block me-3" href="#" target="_blank"><img class="header-img-fb" src="{{asset('img/inicio/facebook-header.png')}}"><img class="img-fb-hover" src="{{asset('img/inicio/facebook-hover.png')}}"></a>
                        <a class="header-inst d-inline-block" href="#" target="_blank"><img class="header-img-inst" src="{{asset('img/inicio/instagram-header.png')}}"><img class="img-inst-hover" src="{{asset('img/inicio/instagram-hover.png')}}"></a>
                    </div>
                </ul>
                <button class="btn btn-light btn-abrir-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
                    <i class="bi bi-list" style="font-size: 1.7rem; color: #ad17ba;"></i>
                </button>
            </div>
        </div>          
    </header>

    <div class="offcanvas offcanvas-start header-offcanvas" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasExampleLabel">Menú</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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
                            {{ (request()->is('ninios')) ? 'offcanvas-enlace-activo' :'' }}
                        "
                        style="font-size: 1.5rem"
                        href="{{url('ninios')}}"
                        >Niños</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="
                            nav-link
                            text-center 
                            offcanvas-enlace
                            {{ (request()->is('ninias')) ? 'offcanvas-enlace-activo' :'' }}
                        "
                        style="font-size: 1.5rem"
                        href="{{url('ninias')}}"
                        >Niñas</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="
                            nav-link
                            text-center 
                            offcanvas-enlace
                            {{ (request()->is('caballeros')) ? 'offcanvas-enlace-activo' :'' }}
                        "
                        style="font-size: 1.5rem"
                        href="{{url('caballeros')}}"
                        >Caballeros</a
                    >
                </li>
                <li class="nav-item">
                    <a
                        class="
                            nav-link
                            text-center 
                            offcanvas-enlace
                            {{ (request()->is('damas')) ? 'offcanvas-enlace-activo' :'' }}
                        "
                        style="font-size: 1.5rem"
                        href="{{url('damas')}}"
                        >Damas</a
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
                        >Escríbenos</a
                    >
                </li>
                <div class="off-canvas-contenedor-rs d-flex justify-content-center mt-4">
                    <a href="#" target="_blank" class="nav-icono-rp me-3">
                        <img src="{{asset('img/inicio/facebook-header.png')}}" alt="">
                    </a>
                    <a href="#" target="_blank" class="nav-icono-rp">
                        <img src="{{asset('img/inicio/instagram-header.png')}}" alt="">
                    </a>
                </div>
            </ul>
        </div>
    </div>

    <main class="overflow-x-hidden main-web">
        @yield('content')
    </main>

    <footer class="container-fluid">
        <div class="footer-content-1 d-flex justify-content-between">
            <div class="footer-1 d-flex">
                <div class="footer-sub-1">
                    <h3>Moda Cuchita</h3>
                    <div class="d-flex flex-column align-items-start">
                        <a class="" href="{{url('nosotros')}}">Nosotros</a>
                        <a class="" href="{{url('contactenos')}}">Escríbenos</a>
                    </div>
                </div>
                <div class="footer-sub-2">
                    <h3>Nuestros Productos</h3>
                    <div class="d-flex flex-column align-items-start">
                        <a class="" href="{{url('ninios')}}">Niños</a>
                        <a class="" href="{{url('ninias')}}">Niñas</a>
                        <a class="" href="{{url('caballeros')}}">Caballeros</a>
                        <a class="" href="{{url('damas')}}">Damas</a>
                    </div>
                </div>
            </div>
            <div class="footer-2">
                <p>Sé el primero en conocer nuestras últimas colecciones y ofertas especiales.</p>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Ingresa tu correo aquí..." aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <button class="input-group-text" id="basic-addon2"><img src="{{asset('img/inicio/enviar.png')}}"></button>
                </div>
            </div>
        </div>
        <div class="footer-content-2 row">
            <div class="col-12 col-md-12 col-lg-3 mb-4 mb-md-4 mb-lg-0">
                <p>Diseñado por Katana Studio.</p>
            </div>
            <div class="col-12 col-md-6 col-lg-6 mb-4 mb-md-0">
                <p class="text-center">© Moda Cuchita. Todos los derechos reservados.</p>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="footer-sub-3 d-flex">
                    <p class="me-4">Síguenos:</p>
                    <div>
                        <a class="me-3" href="{{url('nosotros')}}"><img src="{{asset('img/inicio/facebook-footer.png')}}" alt=""></a>
                        <a class="" href="{{url('nosotros')}}"><img src="{{asset('img/inicio/instagram-footer.png')}}" alt=""></a>
                    </div>
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