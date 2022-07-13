@extends('page.layouts.main')

@section('content')
<!-- Select2 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Select2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>


<section class="shop pb-100 section">
    <div class="content section-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 shop-content">
                <div class="row">
                    <div class="heading">
                        <div class="heading-right">
                            <p class="mb-0">Maestros en Pernos</p>
                            <h2>Nuestros Productos</h2>
                        </div>
                    </div>
                </div>
                <div class="row" style="height: 85px;">
                    <div class="col-xs-12 col-sm-12 col-md-4 aling-left" style="float: left;">
                        <form style="display: contents !important;margin-top: 0em !important;margin-block-end: 0em !important">
                            <div class="form-group top_search">
                                <div class="input-group" style="width: 355px;">
                                    <select id="single" class="js-states form-control font-frank-book" name="buscarpor"
                                        style="border: 1px #093070 solid; height: 40px; padding-left: 12px; font-size: 1.3rem; color: #5a5a5ab8;">
                                        <option value="null">Todos los Productos</option>
                                        @foreach ($producto as $productos)
                                            <option value="{{ $productos->nombre_producto }}">{{ strtoupper($productos->nombre_producto) }}</option>
                                        @endforeach
                                    </select>
                                    {{-- <input class="typeahead form-control font-frank-book " placeholder="Nombre de Producto" name="buscarpor"
                                        style="border: 1px #093070 solid; height: 40px; padding-left: 12px; font-size: 1.3rem; color: #5a5a5ab8;"> --}}
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit" style="border: 1px #093070 solid; font-size: 1.3rem;">
                                            <i class="fa fa-search"></i> Buscar</button>
                                    </span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 product-item aling-rigth">
                        <div class="product-cart">
                            <a class="btn btn-secondary btn-block btn-gereric" style="width: 255px !important;" href="#" data-toggle="modal" data-target="#ModalPernos">
                                Piezas/Kg en Pernos</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 product-item">
                        <div class="product-cart">
                            <a class="btn btn-secondary btn-block btn-gereric" style="width: 255px !important;" href="#" data-toggle="modal" data-target="#ModalArand">
                                Piezas/Kg en Arandelas</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 product-item aling-left">
                        <div class="product-cart">
                            <a class="btn btn-secondary btn-block btn-gereric" style="width: 255px !important;" href="#" data-toggle="modal" data-target="#ModalAutos">
                                Normas y Abreviaturas </a>
                        </div>
                    </div>
                </div>
                @if($nombre_producto == "null")
                    <div class="row lightgallery1">
                        @foreach ($producto as $bproducto)
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product-item item">
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
                                <div class="product-img" >
                                    <img src="/{{ $bproducto->imagen }}" alt="product" style="height:250px;">
                                    <div class="product-hover">
                                        <div class="product-cart">
                                            <a href="{{ route('producto.showFrontEnd', $hash->encodeHex($bproducto->id) ) }}" class="btn btn-secondary btn-block a-card">Detalles</a>
                                        </div>
                                    </div>
                                </div>
                                <div style="height: 50px;">
                                        <h4>
                                            <a href="{{ route('producto.showFrontEnd', $hash->encodeHex($bproducto->id) ) }}">
                                                {{ $bproducto["nombre_producto"] }}
                                            </a>
                                        </h4>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="row lightgallery1">
                        @foreach ($producto_buscado as $bproducto)
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product-item item">
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
                                <div class="product-img" >
                                    <img src="/{{ $bproducto->imagen }}" alt="product" style="height:250px;">
                                    <div class="product-hover">
                                        <div class="product-cart">
                                            <a href="{{ route('producto.showFrontEnd', $hash->encodeHex($bproducto->id) ) }}" class="btn btn-secondary btn-block a-card">Detalles</a>
                                        </div>
                                    </div>
                                </div>
                                <div style="height: 50px;">
                                        <h4>
                                            <a href="{{ route('producto.showFrontEnd', $hash->encodeHex($bproducto->id) ) }}">
                                                {{ $bproducto["nombre_producto"] }}
                                            </a>
                                        </h4>

                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif



            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 product-item">
                <div class="product-cart">
                    <a class="btn btn-secondary btn-block btn-gereric" style="width: 240px !important;" id="load">Ver más productos<i
                        class="fa fa-plus ml-xs"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@include('page.sections.productos.modalConvrPernos')
@include('page.sections.productos.modalConvrArandelas')
@include('page.sections.productos.modalDetalles')
<style>

.m-0px{
        text-shadow: 0 0.2px 0 rgb(9 45 116) !important;
    }
    .header-3.style-2 .navbar-fixed-top.affix{
        background-color: #093070c2;
    }
    .section {
        padding-top: 12%;
        position: relative;
    }

    .gray-bg, br {
        background-color: #f5f5f5;
    }


    .lightgallery1 .product-item {
        display: none;
    }
    .wrapper {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 10px;
    }
    .select2-container .select2-selection--single{
        height: 40px !important;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered{
        color: #093070;
        line-height: 34px;
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 26px;
        position: absolute;
        top: 5px;
        right: 1px;
        width: 20px;
    }
    @media (min-width:505px) {
        .select2-container {
            width: 380px !important;
        }
    }
    @media (min-width:420px) and (max-width:504px) {
        .select2-container {
            width: 300px !important;
        }
    }
    @media (min-width:350px) and (max-width:419px) {
        .select2-container {
            width: 220px !important;
        }
        .input-group-btn {
            padding-right: 35px;
        }
    }
    @media (max-width:349px) {
        .select2-container {
            width: 180px !important;
        }
        .input-group-btn {
            padding-right: 75px;
        }
    }

</style>
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
    $("#single").select2({
          placeholder: "Busque y Seleccione el producto",
          allowClear: true
      });
      $("#multiple").select2({
          placeholder: "Select a programming language",
          allowClear: true
      });
</script>
@endsection
