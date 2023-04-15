<div class="col-12 col-md-10 row mx-auto cat_options">
    <div class="col-12 col-md-3 option_cat">
        <div class="">
            @foreach ($categorias as $categoria)
                <a wire:click="setValueCategory({{ $categoria->id }})" class="{{$selectedCategory == $categoria->id ? 'active' : ''}}">
                    <h4><div class="div_cuadrado"></div>{{ app()->getLocale() == 'es' ? $categoria->nombre : $categoria->nombre_en }}</h4>
                </a>
            @endforeach
        </div>
    </div>
    <div class="col-12 col-md-9 items_cat">
        <div class="row mx-0 content-products">
            @foreach ($productos as $item)
                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                    <div class="item_cat hvr-grow">
                        <a href="{{url('catalogo/detalle/'.$item->id)}}" class="d-block">
                            <div class="img-product" style="background-image: url({{asset($item->imagen)}})"></div>
                            <div class="item_text_cat">{{ app()->getLocale() == 'es' ? $item->nombre : $item->nombre_en }}</div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
        <div>
            @if ($productos->hasPages())
                <div class="d-flex justify-content-center">
                    {{ $productos->links() }}
                </div>
            @endif
        </div>
        <div class="franja_cont">
            <div class="franja"></div>
        </div>
    </div>
</div>