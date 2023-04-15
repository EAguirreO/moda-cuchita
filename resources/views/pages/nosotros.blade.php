@extends('layouts.main-layout')

@section('styles')
    <link href="{{ asset('css/nosotros.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <div class="section_home">
        <div class="div_nos_01">
            <div class="col-12 col-md-10 col-lg-8 row mx-auto div_nos_01_contanier">
                <div class="col-12 col-md-4 div_nos_01_01"></div>
                <div class="col-12 col-md-8 div_nos_01_02">
                    <div class="">
                        <h1>HAY MUCHAS VARIACIONES</h1>
                        <h5>DE LOS PASAJES DE LOREM ISUMP DISPONIBLES, PERO LA MAYORÍA SUFRIÓ ALTERACIONES</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam sit, error dolores quis veritatis corrupti iusto dolorem, praesentium atque saepe eaque adipisci sed rerum. Ipsum deserunt odit iusto autem id.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="div_nos_02">
            <div class="col-12 col-md-10 col-lg-8 mx-auto">
                <div class="nos2_1">
                    <h2>VARIACIONES</h2>
                    <div class="row mx-0">
                        <div class="col-12 col-md-7 div_nos_02_text_01">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem corporis eum numquam nihil
                            aspernatur accusantium modi perferendis illo dolorum, ipsum sint incidunt, perspiciatis itaque
                            quis, possimus minus qui deleniti nulla. <br><br>consectetur adipisicing elit. Reiciendis enim
                            eum fugiat tenetures possimus alias. Autem, porro!
                        </div>
                        <div class="col-12 col-md-5 div_nos_02_img_01 text-center">
                            <img src="{{ asset('img/nosotros/3.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="">
                    <h2>VARIACIONES</h2>
                    <div class="row mx-0">
                        <div class="col-12 col-md-7 div_nos_02_text_02">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae blanditiis fugiat quisquam,
                            inventore animi quos quae qui minus dolor beatae. Ratione tempore quidem, voluptates quo in
                            officia fugit distinctio debitis! <br><br>consectetur adipisicing elit. Enim, sit, neque ab,
                            sint fugiat assumenda quisquam totam autem ea quae porro eligendi est illo. Vel veritatis, enim
                            hic neque eaque.
                        </div>
                        <div class="col-12 col-md-5 div_nos_02_img_02 text-center">
                            <img src="{{ asset('img/nosotros/3.jpg') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="div_nos_03">
            <div class="col-12 col-md-10 col-lg-8 mx-auto px-3">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos dolorem quos nulla
                    repudiandae aut possimus tempore, sequi Ipsa, vero quo Dolores, earum!</p>
            </div>
        </div>
    </div>
@endsection
