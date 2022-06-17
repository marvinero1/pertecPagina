<div style="padding: 25px;">
    <div style="width: 8cm; height: auto; padding: 19px">
        <table class="minimalistBlack">
            <thead>
                <tr>
                    <th>
                        <p style="margin-bottom: 0px;text-align: center;line-height:0px !important;">FACTURA</p>
                        <p style="margin-top: 0px;text-align: center;">CON DERECHO A CREDITO FISCAL</p>
                        <p class="text-center" style="line-height:10px !important;">PERTEC S.R.L.</p>
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
                    <td colspan="2"><?php echo e($verfactura->nit); ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2">FACTURA No. &nbsp;:</td>
                    <td colspan="2"><?php echo e($verfactura->codigo); ?></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="3">COD. AUTORIZACION: </td>
                    <td colspan="3"><?php echo e($verfactura->nroautorizacion); ?></td>
                </tr>
            </tbody>
        </table>
        <hr>
        <table class="section1">
            <tbody>
                <tr>
                    <td colspan="3">LUGAR Y FECHA EMISION :</td>
                    <td colspan="3">Sacaba <?php echo e(date('d-m-y', strtotime($verfactura->fecha))); ?> HRS: <?php echo e($verfactura->horareg); ?></td>
                </tr>
                <tr>
                    <td colspan="3">NOMBRE / RAZON SOCIAL:</td>
                    <td colspan="3"><?php echo e($verfactura->nomcliente); ?></td>
                </tr>
                <tr>
                    <td colspan="3">NIT/CI/CEX
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
                    </td>
                    <td colspan="3"><?php echo e($verfactura->nit); ?></td>
                </tr>
                <tr>
                    <td colspan="3">CODIGO CLIENTE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                    <td colspan="3"><?php echo e($verfactura->nit); ?></td>
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
                <?php $__currentLoopData = $vefacturaProducto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vefacturaDetalles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr style="height: 3px;"></tr>
                    <tr style="font-size: 13px;">
                        <td colspan="2"><?php echo e($vefacturaDetalles->codfactura); ?> <?php echo e($vefacturaDetalles->coditem); ?></td>
                        <td><?php echo e($vefacturaDetalles->descripcion); ?></td>
                        <td ></td>
                        <td><?php echo e($vefacturaDetalles->medida); ?></td>
                    </tr>
                    <tr style="font-size: 13px;">
                        <td style="width: 25%"><?php echo e($vefacturaDetalles->udm); ?></td>
                        <td style="width: 25%"><?php echo e($vefacturaDetalles->cantidad); ?></td>
                        <td style="width: 25%"><?php echo e(round($vefacturaDetalles->preciolista, 2)); ?></td>
                        <td style="width: 25%"><?php echo e($cantidad_precio_decimal - $cantidad_precioneto_decimal); ?></td>
                        <td style="width: 25%"><?php echo e(round($vefacturaDetalles->cantidad,2) * round($vefacturaDetalles->preciolista,2)); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <hr>
        <table class="section3">
            <thead>
                <tr style="height: 3px;"></tr>
                <tr>
                    <th>SubTotal(BS) :</th>
                    <th style="text-align: right;padding-right: 18px;"><?php echo e($totalParse); ?></th>
                </tr>
                <tr>
                    <th>Descuentos(BS) :</th>
                    <th style="text-align: right;padding-right: 18px;"><?php echo e(round($descuento, 2)); ?></th>
                </tr>
                <tr>
                    <th>Total(BS) :</th>
                    <th style="text-align: right;padding-right: 18px;"><?php echo e(round($total_menos_descuento, 2)); ?></th>
                </tr>
                <tr>
                    <th colspan="2">Importe Base Credito Fiscal (BS) : <?php echo e(round($total_menos_descuento, 2)); ?></th>
                </tr>
                <tr>
                    <th style="border-bottom: solid 1px;"></th>
                    <th style="text-align: right;padding-right: 18px;"><?php echo e(round($total_menos_descuento, 2)); ?></th>
                </tr>
                <tr style="height: 25px;">
                    <th colspan="2">Son: <?php echo e($total_literal,2); ?></th>
                </tr>
            </thead>
        </table>
        <hr >
        <table class="section4">
            <thead>
                <tr>
                    <th>
                        <p>ESTA FACTURA CONTRIBUYE AL DESARROLLO DEL PAÍS,</p>
                        <P>EL USO ILÍCITO DE ESTA SERÁ SANCIONADO</P>
                        <P>PENALMENTE DE ACUERDO A LEY.</P>
                    </th>
                </tr>
            </thead>
    
            <tbody>
                <tr style="height: 5px;"></tr>
                <tr>
                    <td>
                        <p style="text-align: center !important;"><?php echo e($leyendaFactura->descripcionleyenda); ?></p>
                    </td>
                </tr>
                <tr style="height: 5px;"></tr>
                <tr>
                    <td>
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
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="data:image/png;base64, <?php echo e(base64_encode(QrCode::size(140)->generate('https://pilotosiat.impuestos.gob.bo/consulta/QR?nit='.$verfactura->nit.'&cuf='.$verfactura->nroautorizacion.'&numero='.$verfactura->nrofactura.'&t=2'))); ?> ">
                    </td>
                </tr>
            </tbody>
    
            <tfoot>
                <tr style="padding-top: 5px;font-size: 13px;">
                    <td><?php echo e($verfactura->id); ?>-<?php echo e($verfactura->numeroid); ?> Vendedor: 34103 YUCRA ALEXANDER</td>
                </tr>
                <tr style="font-size: 13px;">
                    <td>***PERNOS-TUERCAS-TORNILLOS***</td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
<style>
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
    }

    table.minimalistBlack thead {}
    table.minimalistBlack thead th {
        font-size: 15px;
        font-weight: bold;
        color: #000000;
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
    }
    table.section4 {
        width: 8cm;
        text-align: center;
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
    }
    table.section4 p {
        margin: 0 0 0 0;
    }
    hr{
        color: #000;
        height: 0px;
        border:1px dashed;
        margin-bottom: 0px !important;
    }
</style><?php /**PATH C:\laragon\www\pertecPagina\resources\views/page/sections/facturas/pdf_rollo.blade.php ENDPATH**/ ?>