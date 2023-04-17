@extends('layouts.main-layout')

@section('styles')
<link href="{{ asset('css/catalogo.css') }}" rel="stylesheet" />
@endsection

@section('content')
<div class="section_general">
    <div class="section-1">
        <div class="sec-1-fondo d-flex flex-column align-items-center justify-content-center" style="background-image: url({{asset('img/catalogo/caballeros.jpg')}})">
            <h1 class="sec-1-h1">CABALLEROS</h1>
            <div class="linea-lg"></div>
        </div>
    </div>

    @include('pages.productos')

</div>
@endsection