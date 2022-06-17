

<?php $__env->startSection('content'); ?>
<section class="bg-overlay bg-overlay-gradient pb-0 bgPageCover" style="background-image: url(../assets/images/page-title/backgroundProd.jpg);">
    <div class="bgImgCoverPages"></div>
    <div class="container" style="margin-top: -540px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center texto-borde">
                    <div><h2>Facturas de <?php echo e(Auth::user()->name); ?></h2></div>
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
                                    Facturas
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="details">
                                <table class="table table-striped table-respon">
                                    <tbody>
                                        <thead>
                                            <tr>
                                                <th>Codigo</th>
                                                <th>ID</th>
                                                <th>Nombre Cliente</th>
                                                <th>NIT / C.I</th>
                                                <th>Codigo Control</th>
                                                <th>Codigo</th>
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
                                                <td scope="row"><?php echo e($vefacturas->codigo); ?></td>
    
                                                <td scope="row" style="text-align:center;">
                                                    <a href="<?php echo e(route('viewFactura', $hash->encodeHex($vefacturas->codigo))); ?>" style="color: black">
                                                        <button class="btn btn-primary"><i class="fa fa-book" aria-hidden="true"></i>
                                                            Ver</button></a>
                                                </td>
                                            </tr> 
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
    th,td,tr,table{
        text-align: center !important;
    }
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('page.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pertecPagina\resources\views/page/sections/facturas.blade.php ENDPATH**/ ?>