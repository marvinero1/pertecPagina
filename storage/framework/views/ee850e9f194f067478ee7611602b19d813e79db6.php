

<?php $__env->startSection('content'); ?>
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
                                    <P class="infoFactura">Teléfono: 4716000</P>
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
                                    <h6 class="font-frank-demi color-black" style="margin-bottom: 5px;">00000<?php echo e($verfactura->codigo); ?></h6>
                                    <h6 class="font-frank-demi color-black" style="margin-bottom: 5px;"><?php echo e($verfactura->nroautorizacion); ?></h6>
                                </div>
                            </div><br>


                            <div class="row">
                                <div class="col-md-2" style="padding-right: 0px;">
                                    <h6 class="font-frank-demi color-black" style="margin-bottom: 8px; line-height: 17px;">Lugar y Fecha :</h6>
                                    <h6 class="font-frank-demi color-black" style="margin-bottom: 8px; line-height: 17px;">Nom/Razon Social :</h6>
                                </div>
                                <div class="col-md-6" style="padding-left: 0px; margin: 0 30px 0 -30px;">
                                    <h6 class="font-frank-book color-black" style="margin-bottom: 8px; line-height: 17px;">SACABA, <?php echo e(date('d-m-y', strtotime($verfactura->fecha))); ?> Hrs. <?php echo e($verfactura->horareg); ?></h6>
                                    <h6 class="font-frank-book color-black" style="margin-bottom: 8px; line-height: 17px;"><?php echo e($verfactura->nomcliente); ?></h6>
                                </div>
                                <div class="col-md-2" style="text-align: right;">
                                    <h6 class="font-frank-demi color-black" style="margin-bottom: 8px; line-height: 17px;">Nit/Ci/Cex :</h6>
                                    <h6 class="font-frank-demi color-black" style="margin-bottom: 8px; line-height: 17px;">Código Cliente :</h6>
                                </div>
                                <div class="col-md-2" style="padding-left: 0px;">
                                    <h6 class="font-frank-book color-black" style="margin-bottom: 8px; line-height: 17px;"><?php echo e($verfactura->nit); ?> </h6>
                                    <h6 class="font-frank-book color-black" style="margin-bottom: 8px; line-height: 17px;"><?php echo e($verfactura->nit); ?></h6>
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
                                    <?php $__currentLoopData = $vefacturaProducto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vefacturaDetalles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($vefacturaDetalles->codfactura); ?></td>
                                            <td><?php echo e($vefacturaDetalles->coditem); ?></td>
                                            <td class="alingLeft"><?php echo e($vefacturaDetalles->descripcion); ?></td>
                                            <td class="alingLeft"><?php echo e($vefacturaDetalles->medida); ?></td>
                                            <td><?php echo e($vefacturaDetalles->udm); ?></td>
                                            <td class="alingRight"><?php echo e($vefacturaDetalles->cantidad); ?></td>
                                            <td class="alingRight"><?php echo e(round($vefacturaDetalles->preciolista, 2)); ?></td>
                                            <td class="alingRight"><?php echo e($cantidad_precio_decimal - $cantidad_precioneto_decimal); ?></td>
                                            <td class="alingRight"><?php echo e(round($vefacturaDetalles->cantidad,2) * round($vefacturaDetalles->preciolista,2)); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>

                                <tfoot>
                                    <tr>
                                        <td colspan="5" rowspan="2" class="alingLeft" style="border-bottom: 2px solid #333333; padding: 0px 0px;">
                                            SON: <?php echo e($total_literal,2); ?> Equivalentes a <?php echo e(round($total / 6.96, 2)); ?> DOLAR AMERICANO
                                        </td>
                                        <td colspan="3" style="padding: 0px 2%;">Sub Total(BS):</td>
                                        <td class="font-frank-book" style="padding: 0px 0px;">asass<?php echo e($totalParse); ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" style="padding: 0px 2%;">Descuentos(BS):</td>
                                        <td class="font-frank-book" style="padding: 0px 0px;"><?php echo e(round($descuento, 2)); ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" rowspan="2"></td>
                                        <td colspan="3" style="padding: 0px 2%;">Total(BS):</td>
                                        <td class="font-frank-book" style="padding: 0px 0px;"><?php echo e(round($total_menos_descuento, 2)); ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="3" style="padding: 0px 2%;">Importe Base Crédito Fiscal(BS):</td>
                                        <td class="font-frank-book" style="padding: 0px 0px;"><?php echo e(round($total_menos_descuento, 2)); ?></td>
                                    </tr>
                                </tfoot>

                            </table>

                            <div class="row" style="text-align: -webkit-center;">
                                <div class="col-md-8" style="padding: 0px 40px 0px 40px;">
                                    <h6 class="font-frank-demi color-black" style="margin-bottom: 8px; line-height: 17px;">
                                        ESTA FACTURA CONTRIBUYE AL DESARROLLO DEL PAÍS, EL USO ILÍCITO DE ESTA SERÁ SANCIONADO PENALMENTE DE ACUERDO A LEY.
                                    </h6>
                                    <p class="infoFactura"><?php echo e($leyendaFactura->descripcionleyenda); ?></p>
                                    <?php if($en_linea != 0 ): ?>
                                        <p class="infoFactura">
                                            Este documento es la Representación Gráfica de un Documento Fiscal Digital emitido en una
                                            modalidad de facturación local
                                        </p><br>
                                    <?php else: ?>
                                        <p class="infoFactura">
                                            Este documento es la Representación Gráfica de un Documento Fiscal Digital emitido en una
                                            modalidad de facturación en línea
                                        </p><br>
                                    <?php endif; ?>
                                    <p class="infoFactura" style="float: right;"><?php echo e($verfactura->id); ?>-<?php echo e($verfactura->numeroid); ?></p>
                                </div>
                                <div class="col-md-4"><br>
                                    <?php echo QrCode::format('png')->size(140)->generate('https://pilotosiat.impuestos.gob.bo/consulta/QR?nit='.$verfactura->nit.'&cuf='.$verfactura->nroautorizacion.'&numero='.$verfactura->nrofactura.'&t=2'); ?>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>

            <div style="float: right;">
                <button class="btn btn-warning btn-lg" type="button" onClick="history.go(-1);"><i class="fa fa-arrow-left"></i>
                    &nbsp;Atras </button>
                <a class="btn btn-danger btn-lg" type="button" href="/viewPDF/<?php echo e($verfactura->numeroid); ?>">
                    Descargar PDF &nbsp;<i class="fa fa-file-pdf-o"></i>
                </a>
                <a class="btn btn-success btn-lg" type="button" href="/pruebaRollo/<?php echo e($verfactura->numeroid); ?>">
                    Impresion Rollo <i class="fa fa-print"></i>&nbsp;
                </a>
            </div>
        </div>
    </div>
</section>
<style>
    body{
        font-family: Tahoma,Verdana,Segoe,sans-serif !important;
    }
    .font-frank-demi{
        font-family: Tahoma,Verdana,Segoe,sans-serif !important;
    }
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('page.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pertecPagina\resources\views/page/sections/facturas/show.blade.php ENDPATH**/ ?>