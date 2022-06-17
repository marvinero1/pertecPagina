@extends('page.layouts.main')

@section('content')
<section class="bg-overlay bg-overlay-gradient pb-0 bgPageCover" style="background-image: url(../assets/images/page-title/backgroundProd.jpg);">
    <div class="bgImgCoverPages"></div>
    <div class="container" style="margin-top: -540px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center texto-borde">
                    <div><h2> Pedidos de {{ Auth::user()->name }} </h2></div>
                    <ol class="breadcrumb" style="display: unset !important;">
                        <li><a href="/">Inicio</a></li>
                        <li class="active">Pedidos</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="sectionAboutUs" class="shotcode-1 about-home-2 text-center-xs text-center-sm" style="background-color: white;">
    <div class="content section-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
				<div class="heading heading-4">
					<div class="heading-right">
						<p class="mb-0">Verificar Estado</p>
						<h2>Mis Pedidos</h2>
					</div>
				</div>
			</div>

            <div class="col-xs-12 col-sm-12 col-md-12 shop-content">
                <div class="product-content">
                    <div class="product-tabs mb-50">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#details" aria-controls="details" role="tab" data-toggle="tab">
                                    Pedidos Realizados de: {{ $proforma->nomcliente }}
                                    Codigo Cliente: {{ $proforma->codcliente }}
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="details">
                                <table class="table table-striped table-respon">
                                    <tbody>
                                        <thead>
                                            <th class="text-center">Código de Pedido</th>
                                            <th class="text-center">Codigo Proforma</th>
                                            <th class="text-center">Transporte</th>
                                            <th class="text-center">Fecha de Pedido</th>
                                            <th class="text-center">Fecha de Entrega</th>
                                            <th class="text-center"># Items</th>
                                            <th class="text-center">Estado</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($pedido as $pedidos)
                                                <tr>
                                                    <td class="text-center" scope="row">{{$pedidos->codigo}}</td>
                                                    <td scope="row" class="text-center">{{$pedidos->codproforma}}</td>
                                                    <td scope="row" class="text-center">{{$pedidos->tipotrans}}</td>
                                                    <td scope="row" class="text-center">{{ date('d-M-y', strtotime($pedidos->frecibido)) }}</td>
                                                    <td scope="row" class="text-center">{{ date('d-M-y', strtotime($pedidos->fdespachado)) }}</td>
                                                    <td scope="row" class="text-center">{{$pedidos->nroitems}}</td>
                                                    <td scope="row" style="text-align:center;">
                                                        @if($pedidos->estado == "DESPACHADO")
                                                            <div class="div-background-success"><i class="fa fa-check" aria-hidden="true"></i>
                                                            Despachado</div>
                                                        @elseif($pedidos->estado == "SINESTADO")
                                                        <div class="div-background-sin-estado"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                                            Sin Estado</div>
                                                        @elseif($pedidos->estado == "PREPARACION")
                                                            <div class="div-background-pendiente"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                                                En Preparacion</div>
                                                        @elseif($pedidos->estado == "PENDIENTE")
                                                            <div class="div-background-pendiente"><i class="fa fa-close" aria-hidden="true"></i>
                                                            Pendiente</div>
                                                        @elseif($pedidos->estado == "DESPACHADO SIN EXITO")
                                                            <div class="div-background-orange"><i class="fa fa-close" aria-hidden="true"></i>
                                                                    Despachado, No Recibido</div>
                                                        @elseif($pedidos->estado == "RECHAZADO")
                                                            <div class="div-background-danger"><i class="fa fa-close" aria-hidden="true"></i>
                                                                Rechazado</div>
                                                        @endif
                                                    </td>
                                                </tr>  
                                            @endforeach
                                        </tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div style="text-align: center;">
                            {{ $pedido->appends(['cod_cliente' => $cod_cliente])->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .row1 {
        text-align: left;
    }
    .div-background-pendiente{
        background-color:yellow; 
        color: black;
    }
    .div-background-success{
        background-color:green; 
        color: white;
    }
    .div-background-danger{
        background-color:red; 
        color: white;
    }
    .div-background-orange{
        background-color:orange; 
        color: black;
    }
    .div-background-sin-estado{
        background-color:gray; 
        color: black;
    }
</style>

@endsection
