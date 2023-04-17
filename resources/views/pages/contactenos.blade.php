@extends('layouts.main-layout')

@section('styles')
    <link href="{{ asset('css/contactenos.css') }}" rel="stylesheet" />
@endsection

@push('scripts')
    {{-- SWEETALERT2 --}}
    <script src="{{asset('js/sweetalert2@11.js')}}"></script>

    @if (session('msgSuccess'))
        <script>
            console.log('mensaje enviado');
            Swal.fire({
                'imageUrl': @json(asset('img/contacto/mensaje.png')),
                'text': @json(session('msgSuccess')),
            });
        </script>
    @endif
@endpush

@section('content')
    <div class="section_general">
        <div class="section-1 d-flex align-items-start">
            <div class="sec-1-div-1">
                <h2>¿Necesitas ayuda?</h2>
                <div class="linea"></div>
                <p>Si tienes alguna consulta o deseas realizar un pedido, puedes comunicarte con nosotros mediante el siguiente formulario o nuestros puntos de contacto directo.</p>
                <div class="formulario-div">
                    {!! Form::open(['route' => ['contacto.sendForm']]) !!}
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="mb-4">
                                    {!! Form::text('nombre', null, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre / Empresa']) !!}
                                    @error('nombre')
                                        <small class="text-xs text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="mb-4">
                                    {!! Form::text('dni', null, ['class' => 'form-control' . ($errors->has('dni') ? ' is-invalid' : ''), 'placeholder' => 'DNI / RUC']) !!}
                                    @error('dni')
                                        <small class="text-xs text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="mb-4">
                                    {!! Form::text('telefono', null, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Teléfono / Celular']) !!}
                                    @error('telefono')
                                        <small class="text-xs text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="mb-4">
                                    {!! Form::text('correo', null, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo Electrónico']) !!}
                                    @error('correo')
                                        <small class="text-xs text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-4">
                                    {!! Form::textarea('mensaje', null, ['class' => 'form-control' . ($errors->has('mensaje') ? ' is-invalid' : ''), 'placeholder' => 'Escribe brevemente tu mensaje o pedido aquí...', 'rows' => '6']) !!}
                                    @error('mensaje')
                                        <small class="text-xs text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="d-flex justify-content-center justify-content-sm-end">
                                {!! Form::submit('ENVIAR', ['class' => 'btn btn-enviar']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="sec-1-div-2">
                <h3>Datos de Contacto</h3>
                <div class="linea"></div>
                <p class="titulo">Dirección</p>
                <p class="valor">Jr. America N° 378 C3 - La Victoria</p>
                <p class="titulo">Teléfono</p>
                <p class="valor">01 473 1813</p>
                <p class="titulo">Celular</p>
                <p class="valor">+51 926 772 693</p>
            </div>
        </div>
        <div class="section-2 d-flex flex-column">
            <h2>Nuestra Sede</h2>
            <div class="linea"></div>
            
        </div>
        <div class="d-flex">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.502793574115!2d-77.09438058457509!3d-12.077692645766398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c9731720bd03%3A0xfb4a81cef00fce80!2sAv.%20la%20Marina%2C%20San%20Miguel!5e0!3m2!1ses-419!2spe!4v1644682640336!5m2!1ses-419!2spe" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

    </div>
@endsection
