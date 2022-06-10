

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


                        <div class="x_content table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Codigo</th>
                                        <th>ID</th>
                                        <th>Nombre Cliente</th>
                                        <th>NIT / C.I</th>
                                        <th>Codigo Control</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
        
                                <tbody>
                                    <?php $__currentLoopData = $vefactura; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vefacturas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="row1" scope="row"><?php echo e($vefacturas->codigo); ?></td>
                                        <td scope="row"><?php echo e($vefacturas->id); ?></td>
                                        <td scope="row"><?php echo e($vefacturas->nomcliente); ?></td>
                                        <td scope="row"><?php echo e($vefacturas->nit); ?></td>
                                        <td scope="row"><?php echo e($vefacturas->codigocontrol); ?></td>

                                        <td scope="row" style="text-align:center;">
                                            <a href="<?php echo e(route('viewFactura', $vefacturas->codigo)); ?>" style="color: black">
                                                <button class="btn btn-primary"><i class="fa fa-book" aria-hidden="true"></i>
                                                    Ver</button></a>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>



                    </div>
                </div>
            </div><br>

            <div style="float: right;">
                <a class="btn btn-danger btn-lg" type="button" href="/consultasDigitales">
                    <i class="fa fa-arrow-left"></i> Atras
                </a>
            </div>
        </div>
    </div>
</section>
<style>
    td, th{
        text-align: center;
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

<?php echo $__env->make('page.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\repoCompletoPertec\pertecPagina\resources\views/page/sections/facturas/listfacturas.blade.php ENDPATH**/ ?>