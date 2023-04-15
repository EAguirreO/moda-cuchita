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
    <div class="section_home">
        {{-- <div class="">
            <div class="col-12 col-md-10 col-lg-8 mx-auto px-4 contacto-txt text-center">
                <h1>Contáctenos</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde quisquam accusamus maiores mollitia,
                    perferendis cum. Dolorem cumque, architecto quos omnis velit illo tempore beatae laboriosam
                    ad,repellendus dolorum voluptates tenetur!</p>
            </div>
        </div>
        <div class="col-12 col-md-10 mx-auto cont_content">
            <div class="map_contet row mx-0">
                <div id="gmap" class="col-12 col-md-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.502793574115!2d-77.09438058457509!3d-12.077692645766398!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c9731720bd03%3A0xfb4a81cef00fce80!2sAv.%20la%20Marina%2C%20San%20Miguel!5e0!3m2!1ses-419!2spe!4v1644682640336!5m2!1ses-419!2spe"
                        width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <div class="col-12 col-md-7 cont_content_input">
                    {!! Form::open(['route' => ['contacto.sendForm']]) !!}
                        <div class="form-content">
                            <div class="mb-3">
                                {!! Form::text('nombres', null, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => app()->getLocale() == 'es' ? 'NOMBRE' : 'NAME']) !!}
                                @error('nombres')
                                    <small class="text-xs text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                {!! Form::text('telefono', null, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => app()->getLocale() == 'es' ? 'TELÉFONO' : 'PHONE']) !!}
                                @error('telefono')
                                    <small class="text-xs text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                {!! Form::text('email', null, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => app()->getLocale() == 'es' ? 'CORREO' : 'EMAIL']) !!}
                                @error('email')
                                    <small class="text-xs text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                {!! Form::textarea('comentario', null, ['class' => 'form-control' . ($errors->has('comentario') ? ' is-invalid' : ''), 'placeholder' => app()->getLocale() == 'es' ? 'MENSAJE' : 'MESSAGE']) !!}
                                @error('comentario')
                                    <small class="text-xs text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="contenedor-boton">
                                {!! Form::submit(app()->getLocale() == 'es' ? 'ENVIAR' : 'SEND', ['class' => 'btn hvr-grow btn-outline-dark btn-enviar']) !!}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div> --}}
    </div>
@endsection
