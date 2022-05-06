@extends('includes.main')

@section('content')

<section class="bg-overlay bg-overlay-gradient pb-0"
    style="background-image: url(../assets/images/page-title/AnewOKaDSC_3356.jpg); background-size: cover; height: 635px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center texto-borde">
                    <div class="title-bg">
                        <h2>Productos Novedosos</h2>
                    </div>
                    <ol class="breadcrumb" style="display: unset !important;">
                        <li>
                            <a href="/">Inicio</a>
                        </li>
                        <li class="active">Novedades</li>
                    </ol>
                </div>
                <!-- .page-title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>


<section class="shop pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 shop-content">
                <div class="row">
                    <div class="heading">
                        <div class="heading-bg heading-right">
                            <p class="mb-0">Maestros en Pernos</p>
                            <h2>Productos En Novedad</h2>
                        </div>
                    </div>
                </div>

                <div class="row">

                    @foreach ($b as $bproducto)
                    <!-- product #1 -->
                    <div class="col-xs-12 col-sm-4 col-md-3 product-item  clearfix">
                        <div class="product-img">
                            <img src='http://192.168.31.242:5000/{{ $bproducto["imagen"] }}' alt="product"
                                style="height:200px;">
                            <div class="product-hover">
                                <div class="product-cart">
                                    <a class="btn btn-secondary btn-block"
                                        href="{{ route('oneProduc', ['id'=>base64_encode($bproducto['id'])]) }}">Más
                                        información</a>
                                </div>
                            </div>
                        </div><br>
                        <div class="product-hover">
                            <div class="product-cart">
                                <a class="btn btn-secondary btn-block"
                                    href="{{ route('oneProduc', ['id'=>base64_encode($bproducto['id'])]) }}">Más
                                    información</a>
                            </div>
                        </div><br>
                        <div class="product-bio">
                            <h4>
                                <a
                                    href="{{ route('oneProduc', ['id'=>base64_encode($bproducto['id'])]) }}">{{ $bproducto["nombre_producto"] }}</a>
                            </h4>
                            <p class="product-price">{{ $bproducto["denominacion"] }}</p>
                        </div>
                    </div>
                    <!-- .product-item clearfix end -->
                    @endforeach


                </div>
                <!-- .row end -->

            </div>
            <!-- .shop-content end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>



@endsection
