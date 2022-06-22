

<?php $__env->startSection('content'); ?>
<section class="bg-overlay bg-overlay-gradient pb-0 bgPageCover" style="background: linear-gradient(177deg, rgba(252,218,1,1) 0%, rgba(130,131,59,1) 50%, rgba(9,45,116,1) 100%);">
    <div class="bgImgCoverPages"></div>
    <div class="container" style="margin-top: -540px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center texto-borde">
                    <div>
                        <h2>Productos Novedosos</h2>
                    </div>
                    <ol class="breadcrumb" style="display: unset !important;">
                        <li>
                            <a href="/">Inicio</a>
                        </li>
                        <li class="active">Novedades</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="shop pb-100">
    <div class="content section-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 shop-content">
                <div class="row">
                    <div class="heading">
                        <div class="heading-right">
                            <p class="mb-0">Maestros en Pernos</p>
                            <h2>Productos En Novedad</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 aling-rigth" style="display: flex;">
                        <form
                        style="display: contents !important;margin-top: 0em !important;margin-block-end: 0em !important">
                        <div class="form-group pull-right top_search">
                            <div class="input-group" style="width: 332px;">
                                <input type="text" class="form-control font-frank-book" placeholder="Nombre de Producto" name="buscarpor"
                                    style="border: 1px #093070 solid; height: 40px; padding-left: 12px; font-size: 1.3rem; color: #5a5a5ab8;">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit" style="border: 1px #093070 solid; font-size: 1.3rem;">
                                        <i class="fa fa-search"></i> Buscar</button>
                                </span>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>

                <div class="row lightgallery1">
                    <?php $__currentLoopData = $producto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bproducto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xs-12 col-sm-4 col-md-3 product-item  clearfix item">
                        <div class="infProd" style="background-color: #093070;">
                            NUEVO
                        </div>
                        <div class="product-img">
                            <img src='/<?php echo e($bproducto["imagen"]); ?>' alt="product"
                                style="height:250px;">
                            <div class="product-hover">
                                <div class="product-cart">
                                    <a class="btn btn-secondary btn-block a-card"
                                        href="<?php echo e(route('producto.showFrontEnd', $hash->encodeHex($bproducto->id) )); ?>">
                                        Detalles
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div style="height: 50px;">
                            <h4>
                                <a href="<?php echo e(route('producto.showFrontEnd', $hash->encodeHex($bproducto->id) )); ?>"><?php echo e($bproducto["nombre_producto"]); ?></a>
                            </h4>
                            <h5 class="body-details" style="font-weight: 100;"><?php echo e($bproducto["descripcion_novedad"]); ?></h5>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('page.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pertecPagina\resources\views/page/sections/productos/novedad.blade.php ENDPATH**/ ?>