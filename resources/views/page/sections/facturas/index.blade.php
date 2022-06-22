@extends('page.layouts.main')

@section('content')
<section class="bg-overlay bg-overlay-gradient pb-0 bgPageCover"
    style="background-color:#FBD800;">
    <div class="bgImgCoverPages"></div>
    <div class="container" style="margin-top: -540px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center texto-borde">
                    <div><h2> Mis Facturas  <i class="fa fa-files-o" aria-hidden="true"></i></h2></div>
                    <ol class="breadcrumb" style="display: unset !important;">
                        <li><a href="/">Inicio</a></li>
                        <li class="active">Facturas</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="sectionAboutUs" class="shotcode-1 about-home-2 text-center-xs text-center-sm"
    style="background-color: white;">
    <div class="content section-content">
        <div class="row">
            @if (Session::has('warning'))
                <div class="alert alert-danger">{{ Session::get('warning') }}</div>
            @endif

            @if(empty($nit))
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="heading heading-4">
                        <div class="heading-right">
                            <p class="mb-0">Verificar Facturas</p>
                            <h2>Mis Facturas</h2>
                        </div>
                    </div>
                </div>

                <div class="row" style=" margin: auto;display: block">
                    <div class="col-xs-12 col-sm-12 col-md-12" style="padding: 15px 20px 0px 40px;">
                        <form >
                            <div class="row" style="border: outset;padding: 25px;">
                                <label style="font-size: 1.3rem;">Ingrese los datos requeridos para visualizar sus Facturas.</label><br>
                                &nbsp;&nbsp;&nbsp;&nbsp;<p style="font-size: 1.3rem;">Los campos (*) son obligatorios.</p>
                                <div class="col-md-12 col-sm-12 form-group">
                                    <input type="number" class="form-control" name="nit" placeholder="* NIT/C.I " required style="font-size: 1.3rem;"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    maxlength="13">
                                </div><br>
                                {{-- <div class="col-md-12 col-sm-12 form-group">
                                    <input type="text" class="form-control" name="id" placeholder="Numero ID Factura Ej. FC341" required style="font-size: 1.3rem;"
                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                    maxlength="6">
                                </div> --}}
                                <button style="font-size: 1.3rem;" type="submit" class="btn btn-primary btn-block"><i class="fa fas fa-book"></i>
                                    &nbsp; Ver Facturas</button>
                            </div>
                        </form>
                    </div>
                </div>
            @else
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="heading heading-4">
                        <div class="heading-right">
                            <p class="mb-0">Verificar Facturas</p>
                            <h2>Mis Facturas</h2>
                            <div style="float: right;">
                                <form
                                    style="display: contents !important;margin-top: 0em !important;margin-block-end: 0em !important">
                                    <div class="form-group pull-right top_search">
                                        <div class="input-group">
                                            <input type="hidden" class="form-control font-frank-book"
                                                placeholder="Ingrese su C.I o NIT" name="buscarpor" value=" "
                                                style="border: 1px #093070 solid; height: 40px; padding-left: 12px; font-size: 1.3rem; color: #5a5a5ab8;">
                                            <button class="btn btn-primary btn-lg" type="submit">
                                                <i class="fa fa-times-circle"></i> Limpiar
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div><br>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 shop-content">
                    <div class="product-content">
                        <div class="product-tabs mb-50">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#details" aria-controls="details" role="tab" data-toggle="tab">
                                        Factura
                                    </a>
                                </li>
                            </ul>

                            <div class="x_content table-responsive">
                                <table class="table">
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
                                </table>
                            </div>
                            <div style="text-align: center;">
                                {{ $vefactura->appends(['nit' => $nit])->links(); }}
                            </div>
                        </div>
                    </div>
                </div><br>
            @endif
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
