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
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="details">
                                <table class="table table-striped">
                                    {{-- <tbody>
                                        @if (!is_null($producto_Id->denominacion))
                                        <tr style="text-transform: uppercase;" class="table-prod-inf">
                                            <td class="title-details">
                                                <h4>Denominación</h4>
                                            </td>
                                            <td class="body-details">
                                                <h5 class="font-frank-medium">{{ $producto_Id->denominacion }}</h5>
                                            </td>
                                        </tr>
                                        @endif
                                        @if (!is_null($producto_Id->categoria))
                                        <tr style="text-transform: uppercase;" class="table-prod-inf">
                                            <td class="title-details">
                                                <h4>Categoría</h4>
                                            </td>
                                            <td class="body-details">
                                                <h5 class="font-frank-medium">{{ $producto_Id->categoria }}</h5>
                                            </td>
                                        </tr>
                                        @endif
                                        @if(!is_null($producto_Id->material))
                                        <tr style="text-transform: uppercase;" class="table-prod-inf">
                                            <td class="title-details">
                                                <h4>Material</h4>
                                            </td>
                                            <td class="body-details">
                                                <h5 class="font-frank-medium">{{ $producto_Id->material }}</h5>
                                            </td>
                                        </tr>
                                        @endif
                                        @if(!is_null($producto_Id->acabado))
                                        <tr style="text-transform: uppercase;" class="table-prod-inf">
                                            <td class="title-details">
                                                <h4>Acabado</h4>
                                            </td>
                                            <td class="body-details">
                                                <h5 class="font-frank-medium">{{ $producto_Id->acabado }}</h5>
                                            </td>
                                        </tr>
                                        @endif
                                        @if(!is_null($producto_Id->rosca))
                                        <tr style="text-transform: uppercase;" class="table-prod-inf">
                                            <td class="title-details">
                                                <h4>Rosca</h4>
                                            </td>
                                            <td class="body-details">
                                                <h5 class="font-frank-medium">{{ $producto_Id->rosca }}</h5>
                                            </td>
                                        </tr>
                                        @endif
                                        @if(!is_null($producto_Id->resistencia))
                                        <tr style="text-transform: uppercase;" class="table-prod-inf">
                                            <td class="title-details">
                                                <h4>Resistencia</h4>
                                            </td>
                                            <td class="body-details">
                                                <h5 class="font-frank-medium">{{ $producto_Id->resistencia }}</h5>
                                            </td>
                                        </tr>
                                        @endif
                                        @if(!is_null($producto_Id->tratamiento))
                                        <tr style="text-transform: uppercase;" class="table-prod-inf">
                                            <td class="title-details">
                                                <h4>Tratamiento</h4>
                                            </td>
                                            <td class="body-details">
                                                <h5 class="font-frank-medium">{{ $producto_Id->tratamiento }}</h5>
                                            </td>
                                        </tr>
                                        @endif
                                        @if(!is_null($producto_Id->sae))
                                        <tr style="text-transform: uppercase;" class="table-prod-inf">
                                            <td class="title-details">
                                                <h4>SAE</h4>
                                            </td>
                                            <td class="body-details">
                                                <h5 class="font-frank-medium">{{ $producto_Id->sae }}</h5>
                                            </td>
                                        </tr>
                                        @endif
                                        @if(!is_null($producto_Id->zb))
                                        <tr style="text-transform: uppercase;" class="table-prod-inf">
                                            <td class="title-details">
                                                <h4>ZB</h4>
                                            </td>
                                            <td class="body-details">
                                                <h5 class="font-frank-medium">{{ $producto_Id->zb }}</h5>
                                            </td>
                                        </tr>
                                        @endif
                                        @if(!is_null($producto_Id->zam))
                                        <tr style="text-transform: uppercase;" class="table-prod-inf">
                                            <td class="title-details">
                                                <h4>ZAM</h4>
                                            </td>
                                            <td class="body-details">
                                                <h5 class="font-frank-medium">{{ $producto_Id->zam }}</h5>
                                            </td>
                                        </tr>
                                        @endif
                                    </tbody> --}}

                                    <tbody>
                                        <tr style="text-transform: uppercase;" class="table-prod-inf">
                                            <td class="title-details">
                                                <h4>Denominación</h4>
                                            </td>
                                            <td class="body-details">
                                                <h5 class="font-frank-medium">PER HEX G2 C/TUE</h5>
                                            </td>
                                        </tr>
                                        <tr style="text-transform: uppercase;" class="table-prod-inf">
                                            <td class="title-details">
                                                <h4>Categoría</h4>
                                            </td>
                                            <td class="body-details">
                                                <h5 class="font-frank-medium">PERNOS Y TUERCAS DE ACERO ALTA RESISTENCIA SAE</h5>
                                            </td>
                                        </tr>
                                        <tr style="text-transform: uppercase;" class="table-prod-inf">
                                            <td class="title-details">
                                                <h4>Material</h4>
                                            </td>
                                            <td class="body-details">
                                                <h5 class="font-frank-medium">ACERO 1008/1020</h5>
                                            </td>
                                        </tr>
                                        <tr style="text-transform: uppercase;" class="table-prod-inf">
                                            <td class="title-details">
                                                <h4>Acabado</h4>
                                            </td>
                                            <td class="body-details">
                                                <h5 class="font-frank-medium">PULIDO</h5>
                                            </td>
                                        </tr>
                                        <tr style="text-transform: uppercase;" class="table-prod-inf">
                                            <td class="title-details">
                                                <h4>Rosca</h4>
                                            </td>
                                            <td class="body-details">
                                                <h5 class="font-frank-medium">UNC</h5>
                                            </td>
                                        </tr>
                                        <tr style="text-transform: uppercase;" class="table-prod-inf">
                                            <td class="title-details">
                                                <h4>Resistencia</h4>
                                            </td>
                                            <td class="body-details">
                                                <h5 class="font-frank-medium">52/42 KG/MM2</h5>
                                            </td>
                                        </tr>
                                        <tr style="text-transform: uppercase;" class="table-prod-inf">
                                            <td class="title-details">
                                                <h4>Tratamiento</h4>
                                            </td>
                                            <td class="body-details">
                                                <h5 class="font-frank-medium">S/N</h5>
                                            </td>
                                        </tr>
                                        <tr style="text-transform: uppercase;" class="table-prod-inf">
                                            <td class="title-details">
                                                <h4>SAE</h4>
                                            </td>
                                            <td class="body-details">
                                                <h5 class="font-frank-medium">SI</h5>
                                            </td>
                                        </tr>
                                        <tr style="text-transform: uppercase;" class="table-prod-inf">
                                            <td class="title-details">
                                                <h4>ZB</h4>
                                            </td>
                                            <td class="body-details">
                                                <h5 class="font-frank-medium">NO</h5>
                                            </td>
                                        </tr>
                                        <tr style="text-transform: uppercase;" class="table-prod-inf">
                                            <td class="title-details">
                                                <h4>ZAM</h4>
                                            </td>
                                            <td class="body-details">
                                                <h5 class="font-frank-medium">NO</h5>
                                            </td>
                                        </tr>
                                    </tbody>


                                </table>
                            </div>
                        </div>

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
                            <div class="col-md-6">
                                <div class="row padd-left">
                                    <h6 style="text-transform: uppercase;">Ingrese las medidas del producto que desee</h6>
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
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row padd-right">
                                    <h6 style="text-transform: uppercase;">Ingrese Cantidad</h6>
                                    <div style="display: flex; justify-content: center;">
                                        <div class="col-xs-2 col-sm-2 col-md-2" style="width: 120px;">
                                            <div class="form-group">
                                                <input class="form-control" style="font-size: 1.3rem;" type="number" name="cantidad" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary" style="max-width: 200px; font-size: 1.3rem; height: 35px;">ACEPTAR</button>
                            </div>

                        </div>
                    </div>

                </div>


            </div>


        </div>
        <hr class="mt-50 mb-30">
    </div>

    @include('page.sections.carrito.modalInfoProd')
</section>




<div id="sideNavigation" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>


    <div class="row">
        <div class="col-md-3"></div>
    </div>

    <div class="cart-table table-responsive" style="background-color: aliceblue;">
        <table class="table table-bordered">
            <thead>
                <tr class="cart-product">
                    <th class="cart-product-item">Código Producto</th>
                    <th class="cart-product-item">Descripción</th>
                    <th class="cart-product-item" style="line-height: 1 !important;">Unidad de Medida</th>
                    <th class="cart-product-quantity">Cantidad</th>
                    <th class="cart-product-total">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="cart-product">
                    <td class="cart-product-quantity">
                        <div>
                            <h6>30NHMM15</h6>
                        </div>
                    </td>
                    <td class="cart-product-item">
                        <h6>BROCAS MM HSS 13</h6>
                    </td>
                    <td class="cart-product-quantity">
                        <h6>PZ</h6>
                    </td>
                    <td class="cart-product-quantity">
                        <h6>1</h6>
                    </td>
                    <td style="text-align: center">
                        <input type="button" class="btn btn-danger" value="Eliminar">
                    </td>
                </tr>
                <tr class="cart-product">
                    <td class="cart-product-quantity">
                        <h6>30NHMM15</h6>
                    </td>
                    <td class="cart-product-item">
                        <h6>BROCAS MM HSS 13</h6>
                    </td>
                    <td class="cart-product-quantity">
                        <h6>PZ</h6>
                    </td>
                    <td class="cart-product-quantity">
                        <h6>2</h6>
                    </td>
                    <td style="text-align: center">
                        <input type="button" class="btn btn-danger" value="Eliminar">
                    </td>                                                    </tr>
            </tbody>
        </table>
    </div>
</div>


  <section>
    <a href="#" onclick="openNav()" class="btn btn-primary">Ejemplo pprueba</a>
  </section>



  <script>
    function openNav() {
        document.getElementById("sideNavigation").style.width = "375px";
    }

    function closeNav() {
        document.getElementById("sideNavigation").style.width = "0";
    }
    </script>



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

    @media (min-width: 992px) {
        .padd-left {
            padding-left: 30%;
        }
        .padd-right {
            padding-right: 30%;
        }
    }





    .sidenav {
    height: 100%; /* 100% Full-height */
    width: 0; /* 0 width - change this with JavaScript */
    position: fixed; /* Stay in place */
    z-index: 1; /* Stay on top */
    top: 0;
    right: 0;
    background-color: #093070; /* Black*/
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 60px; /* Place content 60px from the top */
    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
    z-index: 1030;
}


.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}


body {
  overflow-x: hidden;
}


@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}



</style>


@endsection
