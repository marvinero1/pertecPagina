<?php $__env->startSection('content'); ?>



<section class="bg-overlay bg-overlay-gradient pb-0 bgPageCover" style="background-image: url(../assets/images/page-title/AnewOKaDSC_3356.jpg);">
    <div class="bgImgCoverPages"></div>
    <div class="container" style="margin-top: -540px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center">
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

                <div class="row lightgallery1">
                    <?php $__currentLoopData = $producto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bproducto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xs-12 col-sm-4 col-md-3 product-item  clearfix item">
                        <div class="infProd" style="background-color: #093070;">
                            NUEVO
                        </div>
                        <div class="product-img">
                            <img src='http://192.168.31.242:5000/<?php echo e($bproducto["imagen"]); ?>' alt="product"
                                style="height:300px;">
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
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('page.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\repoCompletoPertec\pertecPagina\resources\views/page/sections/productos/novedad.blade.php ENDPATH**/ ?>