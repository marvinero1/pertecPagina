@extends('includes.main')

@section('content')

<style>
    .lightgallery1 .product-item {
    display: none;
    }
</style>
<section class="bg-overlay bg-overlay-gradient pb-0 bgPageCover" style="background-image: url(../assets/images/page-title/okNOVNew6865.jpg);">
    <div class="bgImgCoverPages"></div>
    <div class="container" style="margin-top: -540px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center">
                    <div class="title-bg">
                        <h2>Catálogo de Productos</h2>
                    </div>
                    <ol class="breadcrumb" style="display: unset !important;">
                        <li>
                            <a href="/">Inicio</a>
                        </li>
                        <li class="active">Catálogo</li>
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
                        <div class="heading-bg heading-right">
                            <p class="mb-0">Maestros en Pernos</p>
                            <h2>Nuestros Productos</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <form class="search-form">
                        <div class="input-group" style="width: 275px;">
                            <input type="text" class="form-control" placeholder="Buscar">
                            <span class="input-group-btn">
                            <button class="btn" type="button" style="width: 50px; height: 49px;">
                                <i class="fa fa-search" style="font-size: 25px;"></i>
                            </button>
                            </span>
                        </div>
                    </form>
                </div>


                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 product-item aling-rigth">
                        <div class="product-cart">
                            <a class="btn btn-secondary btn-block btn-gereric" style="width: 255px !important;" href="#" data-toggle="modal" data-target="#ModalPernos">
                                Piezas/Kg en Pernos
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 product-item">
                        <div class="product-cart">
                            <a class="btn btn-secondary btn-block btn-gereric" style="width: 255px !important;" href="#" data-toggle="modal" data-target="#ModalArand">
                                Piezas/Kg en Arandelas
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 product-item aling-left">
                        <div class="product-cart">
                            <a class="btn btn-secondary btn-block btn-gereric" style="width: 255px !important;" href="#" data-toggle="modal" data-target="#ModalAutos">
                                Normas y Abreviaturas
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row lightgallery1">

                    @foreach ($b as $bproducto)
                    <!-- product #1 -->
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product-item  clearfix item">
                        @if($bproducto["promocion"]=="si")
                        <div class="infProd" style="background-color: #FBD800;">
                            EN OFERTA
                        </div>
                        @endif
                        @if($bproducto["novedad"]=="si")
                        <div class="infProd" style="background-color: #093070;">
                            NUEVO
                        </div>
                        @endif
                        <div class="product-img">
                            <img src='http://192.168.31.242:5000/{{ $bproducto["imagen"] }}' alt="product"
                                style="height:300px;">
                            <div class="product-hover">
                                <div class="product-cart">
                                    <a class="btn btn-secondary btn-block a-card"
                                        href="{{ route('oneProduc', ['id'=>base64_encode($bproducto['id'])]) }}">
                                        Detalles
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="product-bio">
                            <h4>
                                <a
                                    href="{{ route('oneProduc', ['id'=>base64_encode($bproducto['id'])]) }}">{{ $bproducto["nombre_producto"] }}</a>
                            </h4>
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
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 product-item">
                <div class="product-cart">
                    <a class="btn btn-secondary btn-block btn-gereric" style="width: 240px !important;" href="#" id="load">Ver más productos<i
                        class="fa fa-plus ml-xs"></i>
                    </a>
                </div>
            </div>
            <!-- .col-md-12 end -->
        </div>
    </div>
    <!-- .container end -->
</section>

@include('pages.modalConvrPernos')
@include('pages.modalConvrArandelas')
@include('pages.modalDetalleAutomotriz')






<script>
    $(function() {
    $(".item").slice(0, 8).show(); // select the first ten
    $("#load").click(function(e) { // click event for load more
        e.preventDefault();
        $(".item:hidden").slice(0, 8).show(); // select next 10 hidden divs and show them
        if ($(".item:hidden").length == 0) { // check if any hidden divs still exist
        console.log("No more divs"); // alert if there are none left
        }
    });
    });
</script>

@endsection
