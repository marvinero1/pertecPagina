@extends('page.layouts.main')

@section('content')
{{-- tu variable para es $producto_Id --}}

<section class="bg-overlay bg-overlay-gradient pb-0 bgPageCover" style="background-image: url(../assets/images/page-title/producBackground.jpg);">
    <div class="bgImgCoverPages"></div>
    <div class="container" style="margin-top: -540px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center">
                    <div>
                        <h2 style="line-height: 70px; margin-top: -35px;">{{ $producto_Id->nombre_producto }}</h2>
                    </div>
                    <ol class="breadcrumb" style="display: unset !important;">
                        <li>
                            <a href="/">Inicio</a>
                        </li>
                        <li>
                            <a href="/fullProducts">Productos</a>
                        </li>
                        <li class="active">Producto</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

</section>




<section class="shop" style="padding-bottom: 0px;">
    <div class="content section-content">
        <h1 style="text-align: center; text-transform: uppercase;"><b>{{ $producto_Id['nombre_producto'] }}</b></h1><br>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5 shop-content">
                <div class="product-img product-feature-img mb-50">
                    <img src=" http://192.168.31.240:5000/{{ $producto_Id['imagen'] }}" alt="product" />
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-7 sidebar sidebar-full">
                <div class="row">
                    <div class="product-img product-feature-img mb-50">
                        @if(is_null($producto_Id['imagen_matriz']))
                            <img src="../assets/images/matrizVacia.jpg" alt="matriz Vacia" />
                        @else
                            <img src=" http://192.168.31.240:5000/{{ $producto_Id['imagen_matriz'] }}" alt="matriz" />
                        @endif
                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-7 product-content">
                <div class="product-tabs mb-50">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#details" aria-controls="details" class="title-details" role="tab" data-toggle="tab" style="text-transform: uppercase;">Detalles Técnicos</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="details">
                            <table class="table table-striped">
                                <tbody>
                                    <tr style="text-transform: uppercase;" class="table-prod-inf">
                                        <td class="title-details"><h4>Denominación</h4></td>
                                        <td class="body-details"><h5 class="font-frank-medium">{{ $producto_Id->denominacion }}</h5></td>
                                    </tr>
                                    <tr style="text-transform: uppercase;" class="table-prod-inf">
                                        <td class="title-details"><h4>Categoría</h4></td>
                                        <td class="body-details"><h5 class="font-frank-medium">{{ $producto_Id->categoria }}</h5></td>
                                    </tr>
                                    <tr style="text-transform: uppercase;" class="table-prod-inf">
                                        <td class="title-details"><h4>Material</h4></td>
                                        <td class="body-details"><h5 class="font-frank-medium">{{ $producto_Id->material }}</h5></td>
                                    </tr>
                                    <tr style="text-transform: uppercase;" class="table-prod-inf">
                                        <td class="title-details"><h4>Acabado</h4></td>
                                        <td class="body-details"><h5 class="font-frank-medium">{{ $producto_Id->acabado }}</h5></td>
                                    </tr>
                                    <tr style="text-transform: uppercase;" class="table-prod-inf">
                                        <td class="title-details"><h4>Rosca</h4></td>
                                        <td class="body-details"><h5 class="font-frank-medium">{{ $producto_Id->rosca }}</h5></td>
                                    </tr>
                                    <tr style="text-transform: uppercase;" class="table-prod-inf">
                                        <td class="title-details"><h4>Resistencia</h4></td>
                                        <td class="body-details"><h5 class="font-frank-medium">{{ $producto_Id->resistencia }}</h5></td>
                                    </tr>
                                    <tr style="text-transform: uppercase;" class="table-prod-inf">
                                        <td class="title-details"><h4>Tratamiento</h4></td>
                                        <td class="body-details"><h5 class="font-frank-medium">{{ $producto_Id->tratamiento }}</h5></td>
                                    </tr>
                                    <tr style="text-transform: uppercase;" class="table-prod-inf">
                                        <td class="title-details"><h4>SAE</h4></td>
                                        <td class="body-details"><h5 class="font-frank-medium">{{ $producto_Id->sae }}</h5></td>
                                    </tr>
                                    <tr style="text-transform: uppercase;" class="table-prod-inf">
                                        <td class="title-details"><h4>ZB</h4></td>
                                        <td class="body-details"><h5 class="font-frank-medium">{{ $producto_Id->zb }}</h5></td>
                                    </tr>
                                    <tr style="text-transform: uppercase;" class="table-prod-inf">
                                        <td class="title-details"><h4>ZAM</h4></td>
                                        <td class="body-details"><h5 class="font-frank-medium">{{ $producto_Id->zam }}</h5></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-50 mb-30">
    </div>
</section>

<section class="shop" style="padding-top: 0px;">
    <div class="content section-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h1 style="text-align: center; text-transform: uppercase;"><b>Productos Sugeridos</b></h1><br>
                <div class="row">
                    <div class="widget-related-product">
                        <div class="widget-content">
                            <div class="row">
                                @foreach ( $producto_sugeridos as $producto_sugeridoss )
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 product-item clearfix">
                                    <div class="product-img">
                                        <img src="http://192.168.31.240:5000/{{ $producto_sugeridoss->imagen }}" style="height: 220px;" alt="product">
                                        <div class="product-hover">
                                            <div class="product-cart">
                                                <a class="btn btn-secondary btn-block" href="{{ route('producto.showFrontEnd', $hash->encodeHex($producto_sugeridoss->id) ) }}">Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-bio">
                                        <h4>
                                            <a href="{{ route('producto.showFrontEnd', $hash->encodeHex($producto_sugeridoss->id) ) }}">{{ $producto_sugeridoss["nombre_producto"] }}</a>
                                        </h4>
                                    </div>
                                </div>
                                @endforeach



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection
