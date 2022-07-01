<div>
    <table class="minimalistBlack alineacion">
        <tbody>
            <tr>
                <td rowspan="3">
                    <img src="http://labsystem.pertec.com.bo/assets/images/icon.png" alt="Pertec S.R.L &copy;" width="100px">
                </td>
                <td rowspan="3" style="text-align: center;">
                    <h6 class="font-frank-demi" style="font-size: 0.7rem; line-height: 0px; margin-bottom: 0px;">PERTEC
                        S.R.L.</h6>
                    <h6 class="font-frank-medium">CASA MATRIZ</h6>
                    <P class="infoFactura">Gral. Achá N°330</P>
                    <P class="infoFactura">Tels.: 4259660 - 4250800 - Fax: 4111282</P>
                    <P class="infoFactura">Cochabamba-Bolivia</P>

                    <h6 class="font-frank-medium color-black">Sucursal N°4</h6>
                    <P class="infoFactura">C. INNOMINADA S/N ZONA AROCAGUA</P>
                    <P class="infoFactura">Teléfono: 4716000 Fax:</P>
                    <P class="infoFactura">Sacaba-Cochabamba</P>
                </td>
                <td rowspan="3" style="text-align: center;">
                    <h6 class="font-frank-demi color-black" style="font-size: 1rem; line-height: 0px; margin: 0;">
                        FACTURA
                    </h6><br>
                    <h6 class="font-frank-demi color-black" style="margin-top: 2px; font-size: 9px;">CON DERECHO A CREDITO FISCAL</h6>
                </td>
                <td style="text-align: right;"><b>NIT: </b></td>
                <td><b>1023109029</b></td>
            </tr>
            <tr>
                <td style="text-align: right;">
                    <b style="top: -18px; position: relative;">Factura Nro: </b>
                </td>
                <td>
                    <b style="top: -18px; position: relative;">000<?php echo e($verfactura->codigo); ?></b>
                </td>
            </tr>
            <tr>
                <td style="text-align: right;">
                    <b style="top: -34px; position: relative;">Cód Autorización: </b>
                </td>
                <td style="word-wrap: break-word;height: 35px;max-width: 0px;">
                    <b><?php echo e($verfactura->cuf); ?></b>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td><b>Lugar y Fecha : </b></td>
                <td colspan="2">SACABA, <?php echo e(date('d-m-y', strtotime($verfactura->fecha))); ?> Hrs. <?php echo e($verfactura->horareg); ?></td>
                <td style="text-align: right;"><b>Nit/Ci/Cex : </b></td>
                <td><?php echo e($verfactura->nit); ?></td>
            </tr>

            <tr>
                <td><b>Nom/Razon Social : </b></td>
                <td colspan="2"><?php echo e($verfactura->nomcliente); ?></td>
                <td style="text-align: right;"><b>Código Cliente : </b></td>
                <td><?php echo e($verfactura->nit); ?></td>
            </tr>
        </tbody>
    </table> 

    <table class="greyGridTable">
        <thead style="border-top: none;">
            <tr style="border-top: 2px solid #000000;">
                
                <th>CODIGO PRODUCTO</th>
                <th colspan="3" style="width: 350px;">DESCRIPCION</th>
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
                    
                    <td><?php echo e($vefacturaDetalles->coditem); ?></td>
                    <td class="text-center" colspan="3"><?php echo e($vefacturaDetalles->descripcion); ?> &nbsp; <?php echo e($vefacturaDetalles->medida); ?></td>
                    <td><?php echo e($vefacturaDetalles->udm); ?></td>
                    <td class="alingRight"><?php echo e($vefacturaDetalles->cantidad); ?></td>
                    <td class="alingRight"><?php echo e(number_format(round($vefacturaDetalles->preciolista, 2) ,2,'.',',')); ?></td>
                    <td class="alingRight"><?php echo e(number_format($cantidad_precio_decimal - $cantidad_precioneto_decimal,2,'.',',')); ?></td>
                    <td class="alingRight"><?php echo e(number_format(round($vefacturaDetalles->cantidad,2) * round($vefacturaDetalles->preciolista,2),2,'.',',')); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>

        <tfoot>
            <tr>
                <td colspan="5" rowspan="2" class="alingLeft"
                    style="border-bottom: 2px solid #333333; padding: 0px 0px;">
                    SON: <?php echo e($total_literal,2); ?> Equivalentes a <?php echo e(round($total / 6.96, 2)); ?>

                    DOLAR AMERICANO
                </td>
                <td colspan="3" style="padding: 0px 2%;">Sub Total(BS):</td>
                <td class="font-frank-book" style="padding: 0px 0px;"><?php echo e(number_format($totalParse,2,'.',',')); ?></td>
            </tr>
            <tr>
                <td colspan="3" style="padding: 0px 2%;">Descuentos(BS):</td>
                <td class="font-frank-book" style="padding: 0px 0px;">
                    <?php echo e(number_format($descuento_round,2,'.',',')); ?></td>
            </tr>
            <tr>
                <td colspan="5" rowspan="2"></td>
                <td colspan="3" style="padding: 0px 2%;">Total(BS):</td>
                <td class="font-frank-book" style="padding: 0px 0px;">
                    <?php echo e(number_format($total_menos_descuento_round,2,'.',',')); ?></td>
            </tr>
            <tr>
                <td colspan="3" style="padding: 0px 2%;">Importe Base Crédito Fiscal(BS):
                </td>
                <td class="font-frank-book" style="padding: 0px 0px;">
                    <?php echo e(number_format($total_menos_descuento_round,2,'.',',')); ?></td>
            </tr>
        </tfoot>
    </table>

    <table class="minimalistBlack">
        <tbody>
            <tr>
                <td style="width: 400px; padding: 0px 20px 0px 20px;">
                    <h6 class="font-frank-demi color-black" style="margin-bottom: -5px; line-height: 11px; text-align: center; font-size: 8px;">
                        ESTA FACTURA CONTRIBUJE AL DESARROLLO DEL PAÍS, EL USO ILÍCITO DE ESTA SERÁ
                        SANCIONADO PENALMENTE DE ACUERDO A LEY.
                    </h6>
                </td>
                <td rowspan="2" style="text-align: center; padding-left: 120px;"><br>
                    <img src="data:image/png;base64, <?php echo e(base64_encode(QrCode::size(100)->generate('https://pilotosiat.impuestos.gob.bo/consulta/QR?nit='.$verfactura->nit.'&cuf='.$verfactura->nroautorizacion.'&numero='.$verfactura->nrofactura.'&t=2'))); ?> ">
                </td>
            </tr>
            <tr>
                <td style="padding: 0px 20px 0px 20px;">
                    <p class="infoFactura"><?php echo e($verfactura->leyenda); ?></p>
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
                    <p class="infoFactura">
                        La factura tambien se encuentra disponible en el siguiente link:
                        <a href="www.pertec.com.bo">www.pertec.com.bo</a>
                    </p><br>
                    <p class="infoFactura" style="float: right;">
                        Página 1 de 1 - <?php echo e($verfactura->id); ?>-<?php echo e($verfactura->numeroid); ?>

                    </p>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<style>
     body{
        font-family: Tahoma,Verdana,Segoe,sans-serif !important;
    }
    .font-frank-demi{
        font-family: Tahoma,Verdana,Segoe,sans-serif !important;
    }
    .alineacion p {
        line-height: 2px !important;
    }
    .alineacion h6 {
        margin-bottom: 11px;
        line-height: 0px;
        margin-top: 12px;
    }
    .infoFactura {
        font-size: 8px !important;
        color: #000000 !important;
        line-height: 10px !important;
        margin-bottom: 0px;
        text-align: center;
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
        font-size: 10px;
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
        font-size: 11px;
        font-weight: bold;
        color: #000000;
        text-align: center;
    }
    table.greyGridTable tfoot {
        font-family: 'Franklin Gothic Demi', sans-serif;
        font-weight: 100;
        font-size: 7px;
        font-weight: bold;
        text-align: right;
        color: #000000;
        border-top: 2px solid #000000;
    }
    table.greyGridTable tfoot td {
        font-size: 10px;
    }
    .alingLeft {
        text-align: left;
    }
    .alingRight {
        text-align: right;
    }
    table.minimalistBlack {
        width: 100%;
        text-align: left;
        border-collapse: collapse;
    }
    table.minimalistBlack tbody td {
        font-size: 11px;
    }
    table.minimalistBlack tfoot td {
        font-size: 14px;
    }
</style>
<?php /**PATH C:\laragon\www\pertecPagina\resources\views/page/sections/facturas/pdf.blade.php ENDPATH**/ ?>