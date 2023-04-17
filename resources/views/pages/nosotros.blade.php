@extends('layouts.main-layout')

@section('styles')
<link href="{{ asset('css/nosotros.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="section_general">
    <div class="section-1 d-flex align-items-center">
        <div class="sec-1-div-1 d-flex flex-column justify-content-center">
            <h2>Acerca de Nosotros</h2>
            <div class="linea"></div>
            <p>Información de la marca, principalmente la historia o un texto introductorio para que los clientes conozcan más de Moda Cuchita. Información de la marca, principalmente la historia o un texto introductorio para que los clientes conozcan más de Moda Cuchita. Información de la marca, principalmente la historia o un texto introductorio para que los clientes conozcan más de Moda Cuchita. Información de la marca, principalmente la historia o un texto introductorio para que los clientes conozcan más de Moda Cuchita. 
            </p>
        </div>
        <div class="sec-1-div-2 d-flex">
            <img style="width: 100%" class="img-fluid" src="{{asset('img/nosotros/img01.jpg')}}" alt="">
        </div>
    </div>
    <div class="section-2 d-flex">
        <div class="sec-2-div-1 d-flex flex-column justify-content-center">
            <h3>Misión</h3>
            <div class="linea"></div>
            <p style="margin-bottom: 70px;">Texto de simulación para la misión de la marca. Texto de simulación para la misión de la marca. Texto de simulación para la misión de la marca. Texto de simulación para la misión de la marca. Texto de simulación para la misión de la marca. Texto de simulación para la misión de la marca.</p>

            <h3>Visión</h3>
            <div class="linea"></div>
            <p>Texto de simulación para la visión de la marca. Texto de simulación para la visión de la marca. Texto de simulación para la visión de la marca. Texto de simulación para la visión de la marca. Texto de simulación para la visión de la marca. Texto de simulación para la visión de la marca.</p>
        </div>
        <div class="sec-2-div-2 d-flex align-items-center">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <img class="img-fluid mx-auto d-block" src="{{asset('img/inicio/logo-01.png')}}" alt="">
                </div>
                <div class="col-12 col-sm-6">
                    <img class="img-fluid mx-auto d-block" src="{{asset('img/inicio/logo-02.png')}}" alt="">
                </div>
                <div class="col-12 col-sm-6">
                    <img class="img-fluid mx-auto d-block" src="{{asset('img/inicio/logo-03.png')}}" alt="">
                </div>
                <div class="col-12 col-sm-6">
                    <img class="img-fluid mx-auto d-block" src="{{asset('img/inicio/logo-04.png')}}" alt="">
                </div>
                <div class="col-12 col-sm-6">
                    <img class="img-fluid mx-auto d-block" src="{{asset('img/inicio/logo-05.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
