<div class="col-12 col-md-10 row mx-auto cat_options">
    <div class="col-12 col-md-3 mx-auto option_cat">
        <div class="">
            @foreach ($categorias as $categoria)
            <a href="{{ url('catalogo?categoria='.$categoria->slug) }}" class="{{$categoria->id == $producto->categoria ? 'active':''}}">
                <h4>
                    <div class="div_cuadrado"></div>{{ app()->getLocale() == 'es' ? $categoria->nombre : $categoria->nombre_en }}
                </h4>
            </a>
            @endforeach
        </div>
    </div>
    <div class="col-12 col-md-9 row mx-0 det_item">
        <div class="col-12 col-md-6 det_item_text">
            <h3>{{  app()->getLocale() == 'es' ? $producto->nombre : $producto->nombre_en }}</h3>
            <div class="">
                {!!  app()->getLocale() == 'es' ? $producto->descripcion : $producto->descripcion_en !!}
            </div>
        </div>
        <div class="col-12 col-md-6 col-xxl-5 det_item_img">
            <div id="carouselDetail" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause=false>
                <div class="carousel-inner">
                    <div class="carousel-item active carosuel-detail" style="background-image: url({{asset($producto->imagen)}})"></div>
                    @isset($producto->imagen1)
                        <div class="carousel-item carosuel-detail" style="background-image: url({{asset($producto->imagen1)}})"></div>
                    @endisset
                    @isset($producto->imagen2)
                        <div class="carousel-item carosuel-detail" style="background-image: url({{asset($producto->imagen2)}})"></div>
                    @endisset
                    @isset($producto->imagen3)
                        <div class="carousel-item carosuel-detail" style="background-image: url({{asset($producto->imagen3)}})"></div>
                    @endisset
                    @isset($producto->imagen4)
                        <div class="carousel-item carosuel-detail" style="background-image: url({{asset($producto->imagen4)}})"></div>
                    @endisset
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselDetail"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselDetail"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-12 col-md-6 hvr-grow pt-3 pt-md-0">
            <div class="det_btn">
                <a href="{{ url('catalogo') }}" class="d-block">{{ app()->getLocale() == 'es' ? 'RETROCEDER' : 'BACK' }}</a>
            </div>
        </div>
    </div>
</div>