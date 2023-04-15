@extends('adminlte::page')

@section('title', 'Empresa | Subcategorias')

@section('content_header')
    <h1>Subcategorías</h1>
@stop

@section('plugins.Sweetalert2', true)

@section('css')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            @livewire('admin-create-subcategory')
            @livewire('admin-subcategories')
        </div>
    </div>
@stop

@section('js')
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <script>
        Livewire.on('alert', function(message){
            Swal.fire(
                'Éxito',
                message,
                'success'
            )
        })
    </script>
@stop