@extends('page.layouts.main')

@section('content')
{{-- <section class="bg-overlay bg-overlay-gradient pb-0 bgPageCover"
    style="background-image: url(../assets/images/page-title/backgroundProd.jpg);">
    <div class="bgImgCoverPages"></div>
    <div class="container" style="margin-top: -540px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center texto-borde">
                    <div>
                        <h2>Mi Factura</h2>
                    </div>
                    <ol class="breadcrumb" style="display: unset !important;">
                        <li>
                            <a href="/">Inicio</a>
                        </li>
                        <li class="active">Facturas</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<br><br><br><br>
<section class="shotcode-1 about-home-2 text-center-xs text-center-sm">
    <div class="content section-content">
        <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-4">
                    <div class="heading-right">
                        <p class="mb-0">Verificar Facturas</p>
                        <h2>Mi Factura</h2>
                    </div>
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

                        <div style="padding: 25px;">
                            <div style="width: 8cm; height: auto; padding: 19px">
                                <table class="minimalistBlack">
                                    <thead>
                                        <tr>
                                            <th>
                                                <p style="margin-bottom: 0px;text-align: center;line-height:0px !important; font-size: 1.3rem !important;">FACTURA</p>
                                                <p style="margin-top: 0px;text-align: center;">CON DERECHO A CREDITO FISCAL</p>
                                                <p class="text-center" style="line-height:10px !important; font-size: 1.3rem !important;">PERTEC S.R.L.</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr style="height: 10px"></tr>
                                        <tr>
                                            <td>Casa Matriz</td>
                                        </tr>
                                        <tr>
                                            <td>Gral. Acha N 330</td>
                                        </tr>
                                        <tr>
                                            <td>Cochabamba-Bolivia</td>
                                        </tr>
                                        <tr>
                                            <td>Telfs.: 4259660 Fax: 4111282</td>
                                        </tr>
                                        <tr>
                                            <td>&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td>Sucursal Nro.: 12</td>
                                        </tr>
                                        <tr>
                                            <td>Punto de Vta.: 8</td>
                                        </tr>
                                        <tr>
                                            <td>AV. VILLAZON KM 5.5</td>
                                        </tr>
                                        <tr>
                                            <td>Tel&eacute;fono: 4250800</td>
                                        </tr>
                                        <tr style="height: 15px"></tr>
                                    </tbody>
                                </table>
                                <hr>
                                <table class="section1">
                                    <tbody>
                                        <tr>
                                            <td colspan="2">NIT
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                                            <td colspan="2">{{ $verfactura->nit }}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">FACTURA No. &nbsp;:</td>
                                            <td colspan="2">{{ $verfactura->codigo }}</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">COD. AUTORIZACION: </td>
                                            <td colspan="3" style="width: 155px;">{{ $verfactura->cuf }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <table class="section1">
                                    <tbody>
                                        <tr>
                                            <td colspan="3">LUGAR Y FECHA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                                            <td colspan="3">Sacaba {{ date('d-m-y', strtotime($verfactura->fecha)) }} HRS: {{ $verfactura->horareg }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">NOMBRE / RAZON SOCIAL:</td>
                                            <td colspan="3">{{ $verfactura->nomcliente }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">NIT/CI/CEX
                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                                            </td>
                                            <td colspan="3">{{ $verfactura->nit }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">CODIGO CLIENTE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                                            <td colspan="3">{{ $verfactura->nit }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <hr>
                                <table class="section2" style="margin-bottom: 0px;">
                                    <thead>
                                        <tr style="height: 3px;"></tr>
                                        <tr>
                                            <th colspan="2">CODIGO</th>
                                            <th>PRODUCTO</th>
                                            <th>DESCRIPCION</th>
                                            <th>MEDIDA</th>
                                        </tr>
                                    </thead>
                                </table>
                                <table class="section2">
                                    <thead>
                                        <tr>
                                            <th>UD&nbsp;</th>
                                            <th>CANTIDAD&nbsp;</th>
                                            <th>PRECIO&nbsp;</th>
                                            <th>DESCUENTO&nbsp;&nbsp;</th>
                                            <th>SUBTOTAL</th>
                                        </tr>
                                    </thead>
                                </table>
                                <hr>
                                <table class="section2">
                                    <tbody>
                                        @foreach ($vefacturaProducto as $vefacturaDetalles)
                                            <tr style="height: 3px;"></tr>
                                            <tr style="font-size: 12px;">
                                                <td colspan="2">{{ $vefacturaDetalles->codfactura }} {{ $vefacturaDetalles->coditem }}</td>
                                                <td>{{ $vefacturaDetalles->descripcion }}</td>
                                                <td ></td>
                                                <td>{{ $vefacturaDetalles->medida }}</td>
                                            </tr>
                                            <tr style="font-size: 12px;">
                                                <td style="width: 25%">{{ $vefacturaDetalles->udm }}</td>
                                                <td style="width: 25%">{{ $vefacturaDetalles->cantidad }}</td>
                                                <td style="width: 25%">{{ number_format(round($vefacturaDetalles->preciolista, 2) ,2,'.',',')  }}</td>
                                                <td style="width: 25%">{{ number_format($cantidad_precio_decimal - $cantidad_precioneto_decimal,2,'.',',') }}</td>
                                                <td style="width: 25%">{{ number_format(round($vefacturaDetalles->cantidad,2) * round($vefacturaDetalles->preciolista,2),2,'.',',') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <hr>
                                <table class="section3">
                                    <thead>
                                        <tr style="height: 3px;"></tr>
                                        <tr>
                                            <th>SubTotal(BS) :</th>
                                            <th style="text-align: right;padding-right: 18px;">{{ number_format($totalParse,2,'.',',') }}</th>
                                        </tr>
                                        <tr>
                                            <th>Descuentos(BS) :</th>
                                            <th style="text-align: right;padding-right: 18px;">{{ number_format($descuento_round,2,'.',',') }}</th>
                                        </tr>
                                        <tr>
                                            <th>Total(BS) :</th>
                                            <th style="text-align: right;padding-right: 18px;">{{ number_format($total_menos_descuento_round,2,'.',',') }}</th>
                                        </tr>
                                        <tr>
                                            <th >Importe Base Credito Fiscal (BS) : </th>
                                            {{-- <th style="text-align: right;padding-right: 18px;">{{ round($total_menos_descuento, 2) }}</th> --}}
                                        </tr>
                                        <tr>
                                            <th style="border-bottom: solid 1px;"></th>
                                            <th style="text-align: right;padding-right: 18px;">{{ number_format($total_menos_descuento_round,2,'.',',') }}</th>
                                        </tr>
                                        <tr style="height: 25px;">
                                            <th colspan="2">Son: {{ $total_literal,2 }}</th>
                                        </tr>
                                    </thead>
                                </table>
                                <hr >
                                <table class="section4">
                                    <thead>
                                        <tr>
                                            <th>
                                                <p><b>ESTA FACTURA CONTRIBUYE AL DESARROLLO DEL PAÍS,</b></p>
                                                <P><b>EL USO ILÍCITO DE ESTA SERÁ SANCIONADO</b></P>
                                                <P><b>PENALMENTE DE ACUERDO A LEY.</b></P>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr style="height: 5px;"></tr>
                                        <tr>
                                            <td>
                                                <p style="text-align: center !important;">{{ $leyendaFactura->descripcionleyenda }}</p>
                                            </td>
                                        </tr>
                                        <tr style="height: 5px;"></tr>
                                        <tr>
                                            <td>
                                                @if($en_linea != 0 )
                                                    <p class="infoFactura">
                                                        Este documento es la Representación Gráfica de un Documento Fiscal Digital emitido en una
                                                        modalidad de facturación local
                                                    </p><br>
                                                @else
                                                    <p class="infoFactura">
                                                        Este documento es la Representación Gráfica de un Documento Fiscal Digital emitido en una
                                                        modalidad de facturación en línea
                                                    </p><br>
                                                @endif
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {!! QrCode::format('svg')->size(140)->generate('https://pilotosiat.impuestos.gob.bo/consulta/QR?nit='.$verfactura->nit.'&cuf='.$verfactura->nroautorizacion.'&numero='.$verfactura->nrofactura.'&t=2') !!}
                                            </td>
                                        </tr>
                                    </tbody>

                                    <tfoot>
                                        <tr style="padding-top: 5px;font-size: 13px;">
                                            <td>{{ $verfactura->id }}-{{ $verfactura->numeroid }} Vendedor: 34103 YUCRA ALEXANDER</td>
                                        </tr>
                                        <tr style="font-size: 13px;">
                                            <td>***PERNOS-TUERCAS-TORNILLOS***</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div><br>
                        <div style="float: right;">
                            <div class="row"><br>
                                <div class="col-md-6">
                                    <button class="btn btn-secondary btn-lg" type="button" onClick="history.go(-1);"><i class="fa fa-arrow-left"
                                       ></i>
                                        &nbsp;Atras 
                                    </button>
                                </div>
                                <div class="col-md-6">
                                    <a class="btn btn-secondary btn-lg" type="button" href="/viewPDFRollo/{{ $verfactura->codigo }}">
                                        Descargar PDF &nbsp;<i class="fa fa-file-pdf-o"></i>
                                    </a>
                                </div>
                              </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

<style>
    .header-3.style-2 .navbar-fixed-top.affix{
        background-color: #093070c2;
    }
    .btn-primary{
        width: 170px !important;
    }
    p{
        font-size: 0.80rem !important;
    }
    table.minimalistBlack {
        font-family: Tahoma, Geneva, sans-serif;
        width: 8cm;
        text-align: center;
        border-collapse: collapse;
    }
    table.minimalistBlack td,
    table.minimalistBlack th {
        padding: 0px 4px;
    }
    table.minimalistBlack tbody td {
        font-size: 13px;
        color: #000000;
    }
    table.minimalistBlack p {
        color: #000000;
    }
    table.minimalistBlack thead {}
    table.minimalistBlack thead th {
        font-size: 15px;
        font-weight: bold;
        color: #000000 !important;
        text-align: center;
    }
    table.minimalistBlack tfoot td {
        font-size: 14px;
    }
    table.section1 {
        font-family: Tahoma, Geneva, sans-serif;
        width: 8cm;
        text-align: left;
        border-collapse: collapse;
    }
    table.section1 td,
    table.section1 th {
        padding: 0px 4px;
    }
    table.section1 tbody td {
        font-size: 11px;
        color: #000000;
    }
    table.section1 tfoot td {
        font-size: 14px;
    }
    table.section2 {
        font-family: Tahoma, Geneva, sans-serif;
        width: 8cm;
        text-align: left;
        border-collapse: collapse;
    }
    table.section2 td,
    table.section2 th {
        padding: 0px 2px;
    }
    table.section2 thead th {
        font-size: 12px;
        font-weight: bold;
        letter-spacing: -0.08em;
        color: #000000;
    }
    table.section2 tbody td {
        color: #000000;
    }
    table.section3 {
        font-family: Tahoma, Geneva, sans-serif;
        width: 8cm;
        text-align: left;
        border-collapse: collapse;
    }
    table.section3 td,
    table.section3 th {
        padding: 0px 2px;
    }
    table.section3 thead th {
        font-size: 12px;
        font-weight: bold;
        letter-spacing: -0.08em;
        color: #000000;
    }
    table.section4 {
        width: 8cm;
        text-align: center;
    }
    table.section4 p {
        text-align: center;
        line-height: 15px;
        color: #000000;
    }
    table.section4 td,
    table.section4 th {
        padding: 0px 2px;
    }
    table.section4 thead th {
        font-size: 0.65rem;
        font-weight: bold;
        text-align: center;
    }
    table.section4 tbody td {
        font-size: 0.73rem;
    }
    table.section4 tfoot {
        font-weight: bold;
        color: #000000;
    }
    table.section4 p {
        margin: 0 0 0 0;
    }
    hr{
        color: #000;
        height: 0px !important;
        border:1px dashed !important;
        margin-bottom: 0px !important;
        width: inherit;
    }
    b {
        font-size: 0.9rem;
    }
    /* module module-search pull-left{
        padding-top: 39px !important;
    } */
</style>
