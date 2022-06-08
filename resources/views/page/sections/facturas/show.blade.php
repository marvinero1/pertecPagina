@extends('page.layouts.main')

@section('content')
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
                            <div class="row" style="text-align: center; height: 170px;">
                                <div class="col-md-2" style="margin-top: 10px;">
                                    <img src="../assets/images/icon.png" alt="Pertec S.R.L &copy;" width="150px" >
                                </div>
                                <div class="col-md-3 alineacion">
                                    <h6 class="font-frank-demi color-black" style="font-size: 1.4rem;">PERTEC S.R.L.</h6>
                                    <h6 class="font-frank-medium color-black">CASA MATRIZ</h6>
                                    <P class="infoFactura">Gral. Achá N°330</P>
                                    <P class="infoFactura">Tels.: 4259660 - 4250800 - Fax: 4111282</P>
                                    <P class="infoFactura">Cochabamba-Bolivia</P>

                                    <h6 class="font-frank-medium color-black">Sucursal N°4</h6>
                                    <P class="infoFactura">C. INNOMINADA S/N ZONA AROCAGUA</P>
                                    <P class="infoFactura">Teléfono: 4716000 Fax:</P>
                                    <P class="infoFactura">Sacaba-Cochabamba</P>
                                </div>
                                <div class="col-md-3" style="height: 170px; display: table;">
                                    <div style="display: table-cell; vertical-align: middle;">
                                        <h6 class="font-frank-demi color-black" style="font-size: 1.5rem; line-height: 0px; margin: 0;">FACTURA</h6><br>
                                        <h6 class="font-frank-demi color-black">CON DERECHO A CREDITO FISCAL</h6>
                                    </div>

                                </div>
                                <div class="col-md-2" style="text-align: right;">
                                    <h6 class="font-frank-demi color-black" style="margin-bottom: 5px;">NIT: </h6>
                                    <h6 class="font-frank-demi color-black" style="margin-bottom: 5px;">Factura Nro: </h6>
                                    <h6 class="font-frank-demi color-black" style="margin-bottom: 5px;">Cód Autorización: </h6>
                                </div>
                                <div class="col-md-2" style="text-align: left; padding-left: 0;">
                                    <h6 class="font-frank-demi color-black" style="margin-bottom: 5px;">1023109029</h6>
                                    <h6 class="font-frank-demi color-black" style="margin-bottom: 5px;">0000000002</h6>
                                    <h6 class="font-frank-demi color-black" style="margin-bottom: 5px;">
                                        4601038E819DE561
                                        E6BC49981F101C0B
                                        57C6DF8D431E0294
                                        254776D74
                                    </h6>
                                </div>
                            </div><br>


                            <div class="row">
                                <div class="col-md-2" style="padding-right: 0px;">
                                    <h6 class="font-frank-demi color-black" style="margin-bottom: 8px; line-height: 17px;">Lugar y Fecha :</h6>
                                    <h6 class="font-frank-demi color-black" style="margin-bottom: 8px; line-height: 17px;">Nom/Razon Social :</h6>
                                </div>
                                <div class="col-md-6" style="padding-left: 0px; margin: 0 30px 0 -30px;">
                                    <h6 class="font-frank-book color-black" style="margin-bottom: 8px; line-height: 17px;">SACABA, 31/5/2022 Hrs. 16:54</h6>
                                    <h6 class="font-frank-book color-black" style="margin-bottom: 8px; line-height: 17px;">ALVARO BENJAMIN MERINO VELARDE</h6>
                                </div>
                                <div class="col-md-2" style="text-align: right;">
                                    <h6 class="font-frank-demi color-black" style="margin-bottom: 8px; line-height: 17px;">Nit/Ci/Cex :</h6>
                                    <h6 class="font-frank-demi color-black" style="margin-bottom: 8px; line-height: 17px;">Código Cliente :</h6>
                                </div>
                                <div class="col-md-2" style="padding-left: 0px;">
                                    <h6 class="font-frank-book color-black" style="margin-bottom: 8px; line-height: 17px;">8021631019</h6>
                                    <h6 class="font-frank-book color-black" style="margin-bottom: 8px; line-height: 17px;">8021631019</h6>
                                </div>
                            </div>


                            <table class="greyGridTable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>CODIGO PRODUCTO</th>
                                        <th colspan="2">DESCRIPCION</th>
                                        <th>UNIDAD DE MEDIDA</th>
                                        <th>CANTIDAD</th>
                                        <th style="text-align: right;">PRECIO UNITARIO</th>
                                        <th style="text-align: right;">DESCUENTO</th>
                                        <th style="text-align: right;">SUBTOTAL(BS)</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>03EAGD10</td>
                                        <td class="alingLeft">TOR CHIPBOARD ZA</td>
                                        <td class="alingLeft">4 X 40</td>
                                        <td>PZ</td>
                                        <td class="alingRight">1,000.00</td>
                                        <td class="alingRight">0.07</td>
                                        <td class="alingRight">0.00</td>
                                        <td class="alingRight">70.00</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>03EAGD10</td>
                                        <td class="alingLeft">TOR CHIPBOARD ZA</td>
                                        <td class="alingLeft">4 X 50</td>
                                        <td>PZ</td>
                                        <td class="alingRight">1,000.00</td>
                                        <td class="alingRight">0.14</td>
                                        <td class="alingRight">0.00</td>
                                        <td class="alingRight">140.00</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>03EAGD10</td>
                                        <td class="alingLeft">PER HEX G2 UNC C/T</td>
                                        <td class="alingLeft">1/2-13 X 1</td>
                                        <td>PZ</td>
                                        <td class="alingRight">1,000.00</td>
                                        <td class="alingRight">1.67</td>
                                        <td class="alingRight">70.00</td>
                                        <td class="alingRight">1,600.00</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>03EAGD10</td>
                                        <td class="alingLeft">PER HEX G2 UNC C/T</td>
                                        <td class="alingLeft">1/2-13 X 1 1/4</td>
                                        <td>PZ</td>
                                        <td class="alingRight">1,000.00</td>
                                        <td class="alingRight">1.81</td>
                                        <td class="alingRight">70.00</td>
                                        <td class="alingRight">1,740.00</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>03EAGD10</td>
                                        <td class="alingLeft">PER HEX G2 UNC C/T</td>
                                        <td class="alingLeft">1/2-13 X 1 1/2</td>
                                        <td>PZ</td>
                                        <td class="alingRight">1,000.00</td>
                                        <td class="alingRight">1.95</td>
                                        <td class="alingRight">70.00</td>
                                        <td class="alingRight">1,880.00</td>
                                    </tr>
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <td colspan="5" rowspan="2" class="alingLeft" style="border-bottom: 2px solid #333333; padding: 0px 0px;">
                                            SON: CUATRO MIL SETECIENTOS CUARENTA 00/100 BOLIVIANOS Equivalentes a 681.03 DOLAR AMERICANO
                                        </td>
                                        <td colspan="3" style="padding: 0px 2%;">Sub Total(BS):</td>
                                        <td class="font-frank-book" style="padding: 0px 0px;">5,430.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" style="padding: 0px 2%;">Descuentos(BS):</td>
                                        <td class="font-frank-book" style="padding: 0px 0px;">690.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" rowspan="2"></td>
                                        <td colspan="3" style="padding: 0px 2%;">Total(BS):</td>
                                        <td class="font-frank-book" style="padding: 0px 0px;">4,740.00</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" style="padding: 0px 2%;">Importe Base Crédito Fiscal(BS):</td>
                                        <td class="font-frank-book" style="padding: 0px 0px;">4,740.00</td>
                                    </tr>
                                </tfoot>

                            </table>

                            <div class="row" style="text-align: -webkit-center;">
                                <div class="col-md-8" style="padding: 0px 40px 0px 40px;">
                                    <h6 class="font-frank-demi color-black" style="margin-bottom: 8px; line-height: 17px;">
                                        ESTA FACTURA CONTRIBUJE AL DESARROLLO DEL PAÍS, EL USO ILÍCITO DE ESTA SERÁ SANCIONADO PENALMENTE DE ACUERDO A LEY.
                                    </h6>
                                    <P class="infoFactura">
                                        Ley N° 453: Está prohibido importar, distribuir o comercializar productos prohibidos o retirados en el
                                        país de origen por atentar a la integridad física y a la salud.
                                    </P>
                                    <p class="infoFactura">
                                        Este documento es la Representación Gráfica de un Documento Fiscal Digital emitido en una
                                        modalidad de facturación en línea
                                    </p><br>
                                    <p class="infoFactura" style="float: right;">
                                        Página 1 de 1 - FC311-133850
                                    </p>
                                </div>
                                <div class="col-md-4">
                                    <br>
                                    <img src="https://qrcode.tec-it.com/API/QRCode?data=smsto%3A555-555-5555%3AGenerador+de+Códigos+QR+de+TEC-IT" alt="qrCode" width="120px">
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div><br>

            <div style="float: right;">
                <a class="btn btn-danger btn-lg" type="button" href="/consultasDigitales">
                    <i class="fa fa-arrow-left"></i> Atras
                </a>
                <a class="btn btn-warning btn-lg" type="button" href="/viewPDF">
                    Descargar PDF &nbsp;<i class="fa fa-download"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<style>

    .alineacion p {
        line-height: 7px !important;
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
        border-bottom: 2px solid #000000;
        border-top: 2px solid #000000;
    }

    table.greyGridTable thead th {
        font-size: 15px;
        font-weight: bold;
        color: #000000;
        text-align: center;
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

</style>
@endsection
