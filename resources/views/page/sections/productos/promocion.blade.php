@extends('page.layouts.main')

@section('content')
{{-- tu variable para el for es $producto --}}


<section class="bg-overlay bg-overlay-gradient pb-0 bgPageCover" style="background-image: url(../assets/images/page-title/fuego.jpg);">
    <div class="bgImgCoverPages"></div>
    <div class="container" style="margin-top: -540px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center">
                    <div>
                        <h2>Productos En Promoción</h2>
                    </div>
                    <ol class="breadcrumb" style="display: unset !important;">
                        <li>
                            <a href="/">Inicio</a>
                        </li>
                        <li class="active">Promociones</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="shop pb-100">
    <div class="content section-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 shop-content">
                <div class="row">
                    <div class="heading">
                        <div class="heading-right">
                            <p class="mb-0">Maestros en Pernos</p>
                            <h2>Productos en promoción</h2>
                        </div>
                    </div>
                </div>
                <div class="row lightgallery1">
                    @foreach ($producto as $bproducto)
                    <div class="col-xs-12 col-sm-4 col-md-3 product-item  clearfix item">
                        <div class="infProd" style="background-color: #FBD800;">
                            EN OFERTA
                        </div>

                        <div class="product-img" style="z-index: 10;">
                            <img src='http://192.168.31.242:5000/{{ $bproducto["imagen"] }}' alt="product"
                                style="height:300px;">
                            <div class="product-hover">
                                <div class="product-cart">
                                    <a class="btn btn-secondary btn-block a-card"
                                    href="{{ route('producto.showFrontEnd', $hash->encodeHex($bproducto->id) ) }}">
                                        Detalles
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div style="height: 50px;">
                            <h4>
                                <a href="{{ route('producto.showFrontEnd', $hash->encodeHex($bproducto->id) ) }}">{{ $bproducto["nombre_producto"] }}</a>
                            </h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
