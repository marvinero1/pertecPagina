@extends('page.layouts.main')

@section('content')

{{-- {{ Html::style(mix('assets/admin/css/admin.css')) }} --}}
{{ Html::script(mix('assets/admin/js/admin.js')) }}
<section class="bg-overlay bg-overlay-gradient pb-0 bgPageCover"
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
</section>

<section id="sectionAboutUs" class="shotcode-1 about-home-2 text-center-xs text-center-sm"
    style="background-color: white;">
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

            <div class="clearfix"></div>
            <div class="row" style="display: block;">
                <div class="col-md col-sm">
                    <div class="x_panel">
                        <div style="padding: 25px;">


                            <div class="row" style="text-align: center; height: 170px;">
                                <div class="col-md-2 col-sm-12" style="margin-top: 10px;">
                                    <img src="../assets/images/icon.png" alt="Pertec S.R.L &copy;" width="150px">
                                </div>
                                <div class="col-md-3 col-sm-12 alineacion">
                                    <h6 class="font-frank-demi color-black" style="font-size: 1.4rem;">PERTEC S.R.L.
                                    </h6>
                                    <h6 class="font-frank-medium color-black">CASA MATRIZ</h6>
                                    <P class="infoFactura">Gral. Achá N°330</P>
                                    <P class="infoFactura">Tels.: 4259660 - 4250800 - Fax: 4111282</P>
                                    <P class="infoFactura">Cochabamba-Bolivia</P>

                                    <h6 class="font-frank-medium color-black">Sucursal N°4</h6>
                                    <P class="infoFactura">C. INNOMINADA S/N ZONA AROCAGUA</P>
                                    <P class="infoFactura">Teléfono: 4716000</P>
                                    <P class="infoFactura">Sacaba-Cochabamba</P>
                                </div>
                                <div class="col-md-3 col-sm-12" style="height: 170px; display: table;">
                                    <div style="display: table-cell; vertical-align: middle;">
                                        <h6 class="font-frank-demi color-black"
                                            style="font-size: 1.5rem; line-height: 0px; margin: 0;">FACTURA</h6><br>
                                        <h6 class="font-frank-demi color-black">CON DERECHO A CREDITO FISCAL</h6>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <h6 class="font-frank-demi color-black" style="margin-bottom: 5px; text-align: right;">NIT: </h6>
                                            <h6 class="font-frank-demi color-black" style="margin-bottom: 5px; text-align: right;">Factura Nro:
                                            </h6>
                                            <h6 class="font-frank-demi color-black" style="margin-bottom: 5px; text-align: right;">Cód
                                                Autorización: </h6>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6" style="padding-left: 0;">
                                            <h6 class="font-frank-demi color-black" style="margin-bottom: 5px; text-align: left;">1023109029</h6>
                                            <h6 class="font-frank-demi color-black" style="margin-bottom: 5px; text-align: left;">
                                                00000{{ $verfactura->codigo }}</h6>
                                            <h6 class="font-frank-demi color-black" style="margin-bottom: 5px; text-align: left;">
                                                {{ $verfactura->nroautorizacion }}</h6>
                                        </div>
                                    </div>

                                </div>
                            </div><br>




                            <div class="row">
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-6">
                                            <h6 class="font-frank-demi color-black inf-per-fac-1"
                                                style="margin-bottom: 8px; line-height: 17px; padding-right: 0px;">Lugar y Fecha :</h6>
                                            <h6 class="font-frank-demi color-black inf-per-fac-1"
                                                style="margin-bottom: 8px; line-height: 17px; padding-right: 0px;">Nom/Razon Social :</h6>
                                        </div>
                                        <div class="col-md-9 col-sm-6 col-xs-6">
                                            <h6 class="font-frank-book color-black inf-per-fac-2"
                                                style="margin: 0 30px 8px -30px; line-height: 17px; padding-left: 0px;">SACABA,
                                                {{ date('d-m-y', strtotime($verfactura->fecha)) }} Hrs.
                                                {{ $verfactura->horareg }}</h6>
                                            <h6 class="font-frank-book color-black inf-per-fac-2"
                                                style="margin: 0 30px 8px -30px; line-height: 17px; padding-left: 0px;">{{ $verfactura->nomcliente }}
                                            </h6>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4" style="text-align: right;">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <h6 class="font-frank-demi color-black"
                                                style="margin-bottom: 8px; line-height: 17px; text-align: right;">Nit/Ci/Cex :</h6>
                                            <h6 class="font-frank-demi color-black"
                                                style="margin-bottom: 8px; line-height: 17px; text-align: right;">Código Cliente :</h6>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-6">
                                            <h6 class="font-frank-book color-black"
                                                style="margin-bottom: 8px; line-height: 17px; text-align: left;">{{ $verfactura->nit }} </h6>
                                            <h6 class="font-frank-book color-black"
                                                style="margin-bottom: 8px; line-height: 17px; text-align: left;">{{ $verfactura->nit }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="x_content table-responsive">
                                        <table class="table greyGridTable">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>CODIGO PRODUCTO</th>
                                                    <th colspan="2" style="text-align: center;">DESCRIPCION</th>
                                                    <th>UNIDAD DE MEDIDA</th>
                                                    <th>CANTIDAD</th>
                                                    <th style="text-align: right;">PRECIO UNITARIO</th>
                                                    <th style="text-align: right;">DESCUENTO</th>
                                                    <th style="text-align: right;">SUBTOTAL(BS)</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach ($vefacturaProducto as $vefacturaDetalles)
                                                <tr>
                                                    <td>{{ $vefacturaDetalles->codfactura }}</td>
                                                    <td>{{ $vefacturaDetalles->coditem }}</td>
                                                    <td class="alingLeft">{{ $vefacturaDetalles->descripcion }}</td>
                                                    <td class="alingLeft">{{ $vefacturaDetalles->medida }}</td>
                                                    <td class="alingCenter">{{ $vefacturaDetalles->udm }}</td>
                                                    <td class="alingRight">{{ $vefacturaDetalles->cantidad }}</td>
                                                    <td class="alingRight">{{ round($vefacturaDetalles->preciolista, 2) }}</td>
                                                    <td class="alingRight">
                                                        {{ $cantidad_precio_decimal - $cantidad_precioneto_decimal }}</td>
                                                    <td class="alingRight">
                                                        {{ round($vefacturaDetalles->cantidad,2) * round($vefacturaDetalles->preciolista,2) }}
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>

                                            <tfoot>
                                                <tr>
                                                    <td colspan="5" rowspan="2" class="alingLeft"
                                                        style="border-bottom: 2px solid #333333; padding: 0px 0px;">
                                                        SON: {{ $total_literal,2 }} Equivalentes a {{ round($total / 6.96, 2) }}
                                                        DOLAR AMERICANO
                                                    </td>
                                                    <td colspan="3" style="padding: 0px 2%;">Sub Total(BS):</td>
                                                    <td class="font-frank-book" style="padding: 0px 0px;">{{ $totalParse }}</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" style="padding: 0px 2%;">Descuentos(BS):</td>
                                                    <td class="font-frank-book" style="padding: 0px 0px;">
                                                        {{ round($descuento, 2) }}</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" rowspan="2"></td>
                                                    <td colspan="3" style="padding: 0px 2%;">Total(BS):</td>
                                                    <td class="font-frank-book" style="padding: 0px 0px;">
                                                        {{ round($total_menos_descuento, 2) }}</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" style="padding: 0px 2%;">Importe Base Crédito Fiscal(BS):
                                                    </td>
                                                    <td class="font-frank-book" style="padding: 0px 0px;">
                                                        {{ round($total_menos_descuento, 2) }}</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>


                            <div class="row" style="text-align: -webkit-center;">
                                <div class="col-md-8" style="padding: 0px 40px 0px 40px;">
                                    <h6 class="font-frank-demi color-black"
                                        style="margin-bottom: 8px; line-height: 17px;">
                                        ESTA FACTURA CONTRIBUYE AL DESARROLLO DEL PAÍS, EL USO ILÍCITO DE ESTA SERÁ
                                        SANCIONADO PENALMENTE DE ACUERDO A LEY.
                                    </h6>
                                    <p class="infoFactura">{{ $leyendaFactura->descripcionleyenda }}</p>
                                    @if($en_linea != 0 )
                                    <p class="infoFactura">
                                        Este documento es la Representación Gráfica de un Documento Fiscal Digital
                                        emitido en una
                                        modalidad de facturación local
                                    </p><br>
                                    @else
                                    <p class="infoFactura">
                                        Este documento es la Representación Gráfica de un Documento Fiscal Digital
                                        emitido en una
                                        modalidad de facturación en línea
                                    </p><br>
                                    @endif
                                    <p class="infoFactura" style="text-align: right;">
                                        {{ $verfactura->id }}-{{ $verfactura->numeroid }}</p>
                                </div>
                                <div class="col-md-4"><br>
                                    {!!
                                    QrCode::format('svg')->size(140)->generate('https://pilotosiat.impuestos.gob.bo/consulta/QR?nit='.$verfactura->nit.'&cuf='.$verfactura->nroautorizacion.'&numero='.$verfactura->nrofactura.'&t=2')
                                    !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="float: right;">
                <button class="btn btn-warning btn-lg" type="button" onClick="history.go(-1);"><i
                        class="fa fa-arrow-left"></i>
                    &nbsp;Atras </button>
                <a class="btn btn-danger btn-lg" type="button" href="/viewPDF/{{ $verfactura->codigo }}">
                    Descargar PDF &nbsp;<i class="fa fa-file-pdf-o"></i>
                </a>
                <a class="btn btn-success btn-lg" type="button" href="/pruebaRollo/{{ $verfactura->codigo }}">
                    Impresion Rollo <i class="fa fa-print"></i>&nbsp;
                </a>
            </div>
        </div>
    </div>
</section>
<style>
    body {
        font-family: Tahoma, Verdana, Segoe, sans-serif !important;
    }

    .font-frank-demi {
        font-family: Tahoma, Verdana, Segoe, sans-serif !important;
    }

    .alineacion p {
        line-height: 7px !important;
        text-align: center;
    }

    .alineacion h6 {
        margin-bottom: 8px;
        line-height: 17px;
    }

    .infoFactura {
        font-size: 14px !important;
        color: #000000 !important;
        line-height: 16px !important;
        margin-bottom: 7px;
    }

    table.greyGridTable {
        border: 2px solid #FFFFFF;
        width: 100%;
        text-align: center;
        border-collapse: collapse;
    }

    table.greyGridTable td,
    table.greyGridTable th {
        border: 1px solid #FFFFFF;
        padding: 3px 4px;
    }

    table.greyGridTable tbody td {
        font-size: 15px;
        color: #000000;
    }

    table.greyGridTable thead {
        font-family: 'Franklin Gothic Demi', sans-serif;
        font-weight: 100;
        background: #FFFFFF;
        border-bottom: 2px solid #000000 !important;
        border-top: 2px solid #000000;
    }

    table.greyGridTable thead th {
        font-size: 15px;
        font-weight: bold;
        color: #000000;
        text-align: center;
        border-bottom: 2px solid #000000 !important;
    }

    table.greyGridTable tfoot {
        font-family: 'Franklin Gothic Demi', sans-serif;
        font-weight: 100;
        font-size: 14px;
        font-weight: bold;
        text-align: right;
        color: #000000;
        border-top: 2px solid #000000;
    }

    table.greyGridTable tfoot td {
        font-size: 14px;
    }

    .alingLeft {
        text-align: left;
    }

    .alingRight {
        text-align: right;
    }

    @media (max-width: 991px) {
        .inf-per-fac-1 {
            text-align: right;
        }
        .inf-per-fac-2 {
            text-align: left;
            margin-left: 0px !important;
        }
    }
    .alingCenter {
        text-align: center;
    }

    @media (max-width: 767px) {
        .col-sm-12 {
    width: 100%;
}
    }


</style>
@endsection
