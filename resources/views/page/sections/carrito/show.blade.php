{{-- aca el producto, con su imagen y su matriz.
inputs de cantidad.
inputs de medida para su pedido. --}}



@extends('page.layouts.main')

@section('content')
<section class="bg-overlay bg-overlay-gradient pb-0 bgPageCover"
    style="background: linear-gradient(177deg, rgba(252,218,1,1) 0%, rgba(130,131,59,1) 50%, rgba(9,45,116,1) 100%);">
    <div class="bgImgCoverPages"></div>
    <div class="container" style="margin-top: -540px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center texto-borde">
                    <div>
                        {{-- <h2 style="line-height: 70px; margin-top: -35px;">{{ $producto_Id->nombre_producto }}</h2> --}}
                        <h2 style="line-height: 70px; margin-top: -35px;">PERNO CON TUERCA HEXAGONAL GRADO 2 ROSCA ORDINARIA (PIEZAS)</h2>
                    </div>
                    <ol class="breadcrumb" style="display: unset !important;">
                        <li><a href="/">Inicio</a></li>
                        <li><a href="/productos">Productos</a></li>
                        <li class="active">Producto</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="shop" style="padding-bottom: 0px;">
    <div class="content section-content">
        {{-- <h1 style="text-align: center; text-transform: uppercase;"><b>{{ $producto_Id->nombre_producto }}</b></h1><br> --}}
        <h1 style="text-align: center; text-transform: uppercase;"><b>PERNO CON TUERCA HEXAGONAL GRADO 2 ROSCA ORDINARIA (PIEZAS)</b></h1><br>
        <div class="row">

          {{-- carddddddddddddddddddddddddddddddddddd --}}



            <div class="col-xs-12 col-sm-12 col-md-4 sidebar sidebar-full">
                <div class="thumbnail">
                    <div class="container-hover">
                        <div class="shop-content">
                            {{-- @if($producto_Id->promocion=="si")
                                <div class="infProd" style="background-color: #FBD800;">
                                    EN OFERTA
                                </div>
                            @endif
                            @if($producto_Id->novedad=="si")
                                <div class="infProd" style="background-color: #093070;">
                                    NUEVO
                                </div>
                            @endif --}}
                            <div class="product-img product-feature-img mb-50">
                                {{-- <img src="/{{ $producto_Id->imagen }}" alt="{{ $producto_Id->nombre_producto }}" /> --}}
                                <img src="/images/productos/10-084433-3.jpg" alt="perno con tuerca hexagonal grado 2 rosca ordinaria (piezas)">
                            </div>
                        </div>
                    </div>


                    <div class="caption">
                        <h3>CATEGORIA: </h3>
                        <h5>PERNOS Y TUERCAS DE ACERO ALTA RESISTENCIA SAE</h5>




                        <ul style="text-transform: uppercase;" class="table-prod-inf list-unstyled">
                            <li class="title-details">
                                <span>Denominación</span>: <span class="font-frank-medium color-black">PER HEX G2 C/TUE</span>
                            </li>
                            <li class="title-details">
                                <span>Material</span>: <span class="font-frank-medium color-black">ACERO 1008/1020</span>
                            </li>
                            <li class="title-details">
                                <span>Acabado</span>: <span class="font-frank-medium color-black">PULIDO</span>
                            </li>
                            <li class="title-details">
                                <span>Rosca</span>: <span class="font-frank-medium color-black">UNC</span>
                            </li>
                            <li class="title-details">
                                <span>Resistencia</span>: <span class="font-frank-medium color-black">52/42 KG/MM2</span>
                            </li>
                            <li class="title-details">
                                <span>Tratamiento</span>: <span class="font-frank-medium color-black">S/N</span>
                            </li>
                            <li class="title-details">
                                <span>SAE</span>: <span class="font-frank-medium color-black">SI</span>
                            </li>
                            <li class="title-details">
                                <span>ZB</span>: <span class="font-frank-medium color-black">NO</span>
                            </li>
                            <li class="title-details">
                                <span>ZAM</span>: <span class="font-frank-medium color-black">NO</span>
                            </li>
                        </ul>





                        {{-- <ul style="text-transform: uppercase;" class="table-prod-inf list-unstyled">
                            @if (!is_null($producto_Id->denominacion))
                            <li class="title-details">
                                <span>Denominación</span>: <span class="font-frank-medium color-black">PER HEX G2 C/TUE</span>
                            </li>
                            @endif
                            @if(!is_null($producto_Id->material))
                            <li class="title-details">
                                <span>Material</span>: <span class="font-frank-medium color-black">ACERO 1008/1020</span>
                            </li>
                            @endif
                            @if(!is_null($producto_Id->acabado))
                            <li class="title-details">
                                <span>Acabado</span>: <span class="font-frank-medium color-black">PULIDO</span>
                            </li>
                            @endif
                            @if(!is_null($producto_Id->rosca))
                            <li class="title-details">
                                <span>Rosca</span>: <span class="font-frank-medium color-black">UNC</span>
                            </li>
                            @endif
                            @if(!is_null($producto_Id->resistencia))
                            <li class="title-details">
                                <span>Resistencia</span>: <span class="font-frank-medium color-black">52/42 KG/MM2</span>
                            </li>
                            @endif
                            @if(!is_null($producto_Id->tratamiento))
                            <li class="title-details">
                                <span>Tratamiento</span>: <span class="font-frank-medium color-black">S/N</span>
                            </li>
                            @endif
                            @if(!is_null($producto_Id->sae))
                            <li class="title-details">
                                <span>SAE</span>: <span class="font-frank-medium color-black">SI</span>
                            </li>
                            @endif
                            @if(!is_null($producto_Id->zb))
                            <li class="title-details">
                                <span>ZB</span>: <span class="font-frank-medium color-black">NO</span>
                            </li>
                            @endif
                            @if(!is_null($producto_Id->zam))
                            <li class="title-details">
                                <span>ZAM</span>: <span class="font-frank-medium color-black">NO</span>
                            </li>
                            @endif
                        </ul> --}}





                    </div>
                </div>
            </div>









            <div class="col-xs-12 col-sm-12 col-md-8 sidebar sidebar-full">
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-img product-feature-img mb-50" style="text-align: center;">
                            {{-- @if(!is_null($producto_Id->imagen_matriz))
                                <img id="myImg" style="width: auto; max-width: 85%;" src=" /{{ $producto_Id->imagen_matriz }}" alt="Matriz" />
                            @else
                                <div>Matriz</div>
                            @endif --}}
                            <img id="myImg" style="width: auto; max-width: 85%;" src=" /images/productos/matrices/7-084442-2.jpg" alt="Matriz">
                        </div>
                    </div>
                    <div class="col-md-12" style="text-align: center;">
                        <div class="row" style="height: 25px;">
                            <div style="float: right;">
                                <button class="boton-info" title="Ayuda" data-toggle="modal" data-target="#ModalInfoProd">?</button>
                            </div>
                        </div>

                        <div class="row">
                            <h5 style="text-transform: uppercase;">Ingrese las medidas del producto que desee</h5>
                            <div style="display: flex; justify-content: center;">
                                <div class="col-xs-2 col-sm-2 col-md-2" style="width: 120px;">
                                    <div class="form-group">
                                        <input class="form-control" style="font-size: 1.3rem;" type="text" name="L" required>
                                    </div>
                                </div>
                                <div class="col-xs-1 col-sm-1 col-md-1" style="width: 26px; padding: 0;">
                                    <div class="form-group">
                                        <input class="form-control" type="text" value="X" style="background-color: white; text-align: center; font-size: 1.5rem; border-bottom: none; padding: 0;" readonly>
                                    </div>
                                </div>
                                <div class="col-xs-2 col-sm-2 col-md-2" style="width: 120px;">
                                    <div class="form-group">
                                        <input class="form-control" style="font-size: 1.3rem;" type="text" name="D" required>
                                    </div>
                                </div>
                            </div><br>
                            <button class="btn btn-primary" style="max-width: 200px; font-size: 1.3rem; height: 35px;">ACEPTAR</button>

                        </div>
                    </div>

                </div>


            </div>


        </div>
        <hr class="mt-50 mb-30">
    </div>
</section>



<style>

    .boton-info {
        border-radius: 50%;
        background-color: #FBD800;
        color: #093070;
        border-color: #FBD800;
        font-weight: bold;
        font-size: large;
        width: 30px;
        position: absolute;
        top: -20px;
        right: 20px;
    }
    .boton-info:hover {
        background-color: #093070;
        color: #FBD800;
        border-color: #093070;
    }
</style>


@endsection
