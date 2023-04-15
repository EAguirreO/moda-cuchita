<div class="col-12 col-md-6">
    <div class="mb-4">
        {!! Form::label('categoria', 'Categoría') !!}
        {!! Form::select('categoria', $categories, null, ['class' => 'form-control']) !!}
        @error('categoria')
            <strong class="text-xs text-danger">{{ $message }}</strong>
        @enderror
    </div>
    <div class="mb-4">
        {!! Form::label('nombre', 'Nombre del producto') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : '')]) !!}
        @error('nombre')
            <strong class="text-xs text-danger">{{ $message }}</strong>
        @enderror
    </div>
    <div class="mb-4">
        {!! Form::label('nombre_en', 'Nombre del producto en inglés') !!}
        {!! Form::text('nombre_en', null, ['class' => 'form-control' . ($errors->has('nombre_en') ? ' is-invalid' : '')]) !!}
        @error('nombre_en')
            <strong class="text-xs text-danger">{{ $message }}</strong>
        @enderror
    </div>
    <div class="mb-4">
        {!! Form::label('descripcion', 'Descripción del producto') !!}
        {!! Form::textarea('descripcion', null, ['class' => 'form-control']) !!}
        @error('descripcion')
            <strong class="text-xs text-danger">{{ $message }}</strong>
        @enderror
    </div>
    <div class="mb-4">
        {!! Form::label('descripcion_en', 'Descripción del producto en inglés') !!}
        {!! Form::textarea('descripcion_en', null, ['class' => 'form-control']) !!}
        @error('descripcion_en')
            <strong class="text-xs text-danger">{{ $message }}</strong>
        @enderror
    </div>
    <div class="row">
        <div class="col-12 col-md-6 mb-4">
            {!! Form::label('stock', 'Stock del producto') !!}
            {!! Form::number('stock', null, ['class' => 'form-control']) !!}
            @error('stock')
                <strong class="text-xs text-danger">{{ $message }}</strong>
            @enderror
        </div>
        <div class="col-12 col-md-6 mb-4">
            {!! Form::label('precio', 'Precio del producto') !!}
            {!! Form::number('precio', null, ['class' => 'form-control']) !!}
            @error('precio')
                <strong class="text-xs text-danger">{{ $message }}</strong>
            @enderror
        </div>
        @if ($type == 'edit')
            <div class="col-12 col-md-6 mb-4">
                {!! Form::label('estado', 'Estado del producto') !!}
                {!! Form::select('estado', ['1'=>'Activo','0'=>'Desactivado'], null, ['class' => 'form-control']) !!}
                @error('estado')
                    <strong class="text-xs text-danger">{{ $message }}</strong>
                @enderror
            </div>
        @endif
    </div>
</div>
<div class="col-12 col-md-6">
    <div class="row mx-0">
        <div class="col-12 col-md-6">
            {!! Form::label('imagen', 'Imagen Principal') !!}
            <div class="custom-file">
                {!! Form::label('imagen', '', ['class' => 'custom-file-label']) !!}
                {!! Form::file('imagen', ['class' => 'custom-file-input img-product', 'accept' => 'image/*']) !!}
                @error('imagen')
                    <strong class="text-xs text-danger">{{ $message }}</strong>
                @enderror
            </div>

            <figure class="mt-2 w-50">
                @isset($product)
                    <img class="img-fluid" src="{{ asset($product->imagen) }}">
                @else
                    <img class="img-fluid" src="{{ asset('img/image.png') }}">
                @endisset
            </figure>
        </div>
        <div class="col-12 col-md-6">
            {!! Form::label('imagen1', 'Imagen 2') !!}
            <div class="custom-file">
                {!! Form::label('imagen1', 'Imagen 2', ['class' => 'custom-file-label']) !!}
                {!! Form::file('imagen1', ['class' => 'custom-file-input img-product', 'accept' => 'image/*']) !!}
            </div>

            <figure class="mt-2 w-50">
                @isset($product)
                    <img class="img-fluid @if ($product->imagen1 == null) {{ 'd-none' }} @endisset"
                        src="{{ asset($product->imagen1) }}">
                @else
                    <img class="img-fluid" src="{{ asset('img/image.png') }}">
                @endisset
            </figure>
        </div>
        <div class="col-12 col-md-6">
            {!! Form::label('imagen2', 'Imagen 3') !!}
            <div class="custom-file">
                {!! Form::label('imagen2', 'Imagen 3', ['class' => 'custom-file-label']) !!}
                {!! Form::file('imagen2', ['class' => 'custom-file-input img-product', 'accept' => 'image/*']) !!}
            </div>

            <figure class="mt-2 w-50">
                @isset($product)
                    <img class="img-fluid @if ($product->imagen2 == null) {{ 'd-none' }} @endisset"
                        src="{{ asset($product->imagen2) }}">
                @else
                    <img class="img-fluid" src="{{ asset('img/image.png') }}">
                @endisset
            </figure>
        </div>
        <div class="col-12 col-md-6">
            {!! Form::label('imagen3', 'Imagen 4') !!}
            <div class="custom-file">
                {!! Form::label('imagen3', 'Imagen 4', ['class' => 'custom-file-label']) !!}
                {!! Form::file('imagen3', ['class' => 'custom-file-input img-product', 'accept' => 'image/*']) !!}
            </div>

            <figure class="mt-2 w-50">
                @isset($product)
                    <img class="img-fluid @if ($product->imagen3 == null) {{ 'd-none' }} @endisset"
                        src="{{ asset($product->imagen3) }}">
                @else
                    <img class="img-fluid" src="{{ asset('img/image.png') }}">
                @endisset
            </figure>
        </div>
        <div class="col-12 col-md-6">
            {!! Form::label('imagen4', 'Imagen 5') !!}
            <div class="custom-file">
                {!! Form::label('imagen4', 'Imagen 5', ['class' => 'custom-file-label']) !!}
                {!! Form::file('imagen4', ['class' => 'custom-file-input img-product', 'accept' => 'image/*']) !!}
            </div>

            <figure class="mt-2 w-50">
                @isset($product)
                    <img class="img-fluid @if ($product->imagen4 == null) {{ 'd-none' }} @endisset"
                        src="{{ asset($product->imagen4) }}">
                @else
                    <img class="img-fluid" src="{{ asset('img/image.png') }}">
                @endisset
            </figure>
        </div>
    </div>
</div>
