@extends('page.layouts.main')

@section('content')
<section class="bg-overlay bg-overlay-gradient pb-0 bgPageCover" style="background-image: url(../assets/images/page-title/backgroundProd.jpg);">
    <div class="bgImgCoverPages"></div>
    <div class="container" style="margin-top: -540px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center texto-borde">
                    <div><h2>Facturas de {{ Auth::user()->name }}</h2></div>
                    <ol class="breadcrumb" style="display: unset !important;">
                        <li><a href="/">Inicio</a></li>
                        <li class="active">Facturas</li>
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
						<p class="mb-0">Verificar Facturas</p>
						<h2>Mis Facturas</h2>
					</div>
				</div>
			</div>

            <div class="col-xs-12 col-sm-12 col-md-12 shop-content">
                <div class="product-content">
                    <div class="product-tabs mb-50">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#details" aria-controls="details" role="tab" data-toggle="tab">
                                    Facturas de: {{ Auth::user()->name }} con NIT: {{ Auth::user()->nit }}
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="details">
                                <table class="table table-striped table-respon">
                                    <tbody>
                                        <thead>
                                            <tr>
                                                {{-- <th>Codigo</th> --}}
                                                <th>ID</th>
                                                <th>#ID</th>
                                                <th>CUF</th>
                                                <th>Codigo Control</th>
                                                <th>Fecha Reg</th>
                                                <th>Peso Kg.</th>
                                                <th>Total Bs.</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($vefactura as $vefacturas)
                                            <tr>
                                                {{-- <td class="row1" scope="row">{{ $vefacturas->codigo }}</td> --}}
                                                <td scope="row">{{ $vefacturas->id }}</td>
                                                <td scope="row">{{ $vefacturas->numeroid }}</td>
                                                <td scope="row">{{ $vefacturas->cuf }}</td>
                                                <td scope="row">{{ $vefacturas->codigocontrol }}</td>
                                                <td scope="row">{{ date('d-m-y', strtotime($vefacturas->fechareg)) }}</td>
                                                <td scope="row">{{ number_format($vefacturas->peso,2) }}</td>
                                                <td scope="row">{{ $vefacturas->total }}</td>

                                                <td scope="row" style="text-align:center;">
                                                    <a href="{{ route('viewFactura', $hash->encodeHex($vefacturas->codigo)) }}" style="color: black">
                                                        <button class="btn btn-primary"><i class="fa fa-book" aria-hidden="true"></i>
                                                            Ver</button></a>
                                                </td>
                                            </tr> 
                                            @endforeach
                                        </tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div style="text-align: center;">
                            {{ $vefactura->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    th,td,tr,table{
        text-align: center !important;
    }
    .btn-primary{
        width: 170px !important;
    }
</style>
@endsection
