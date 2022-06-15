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
                                    Pedidos Realizados
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="details">
                                <table class="table table-striped table-respon">
                                    <tbody>
                                        <thead>
                                            <th>Código de Pedido</th>
                                            <th>Lugar del Pedido</th>
                                            <th>Fecha de Pedido</th>
                                            <th>Fecha de Entrega</th>
                                            <th>Estado</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($pedido as $pedidos)
                                                <tr>
                                                    <td class="row1" scope="row"></td>
                                                    <td scope="row"></td>
                                                    <td scope="row"></td>
                                                    <td scope="row"></td>
                                                    <td scope="row" style="text-align:center;">
                                                    
                                                        <div class="div-background-success"><i class="fa fa-check" aria-hidden="true"></i>
                                                            Confirmado</div>
                                                            
                                                        <div class="div-background-pendiente"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                                            En revision</div>
                    
                                                        <div class="div-background-danger"><i class="fa fa-close" aria-hidden="true"></i>
                                                            Rechazado</div>

                                                        <div class="div-background-orange"><i class="fa fa-close" aria-hidden="true"></i>
                                                                Despachado, No Recibido</div>
                                                    </td>
                                                </tr>  
                                            @endforeach
                                        </tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    th,td,h4,.modal-header {
        text-align: center;
    }
    .row1 {
        text-align: left;
    }
    .div-background-pendiente{
        background-color:green; 
        color: white;
    }
    .div-background-success{
        background-color:yellow; 
        color: black;
    }
    .div-background-danger{
        background-color:red; 
        color: white;
    }
    .div-background-orange{
        background-color:orange; 
        color: white;
    }
</style>

@endsection
