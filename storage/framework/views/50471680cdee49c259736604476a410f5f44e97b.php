<?php $__env->startSection('content'); ?>

<section class="bg-overlay bg-overlay-gradient pb-0 bgPageCover" style="background-image: url(../assets/images/page-title/okNOVNew6865.jpg);">
    <div class="bgImgCoverPages"></div>
    <div class="container" style="margin-top: -540px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center">
                    <div>
                        <h2>Catálogo de Productos</h2>
                    </div>
                    <ol class="breadcrumb" style="display: unset !important;">
                        <li>
                            <a href="/">Inicio</a>
                        </li>
                        <li class="active">Catálogo</li>
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
                            <h2>Nuestros Productos</h2>
                        </div>
                    </div>
                </div>
                <div class="row" style="height: 85px;">
                    <div class="col-xs-12 col-sm-12 col-md-4 aling-rigth" style="display: flex;">
                        <form
                        style="display: contents !important;margin-top: 0em !important;margin-block-end: 0em !important">
                        <div class="form-group pull-right top_search">
                            <div class="input-group" style="width: 380px;">
                                <input type="text" class="form-control font-frank-book" placeholder="Buscar por Nombre de Producto" name="buscarpor"
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


                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 product-item aling-rigth">
                        <div class="product-cart">
                            <a class="btn btn-secondary btn-block btn-gereric" style="width: 255px !important;" href="#" data-toggle="modal" data-target="#ModalPernos">
                                Piezas/Kg en Pernos
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 product-item">
                        <div class="product-cart">
                            <a class="btn btn-secondary btn-block btn-gereric" style="width: 255px !important;" href="#" data-toggle="modal" data-target="#ModalArand">
                                Piezas/Kg en Arandelas
                            </a>
                            
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 product-item aling-left">
                        <div class="product-cart">
                            <a class="btn btn-secondary btn-block btn-gereric" style="width: 255px !important;" href="#" data-toggle="modal" data-target="#ModalAutos">
                                Normas y Abreviaturas
                            </a>
                            
                        </div>
                    </div>
                </div>

                <div class="row lightgallery1">
                    <?php $__currentLoopData = $producto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bproducto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- product #1 -->
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product-item item">
                                <?php if($bproducto["promocion"]=="si"): ?>
                                <div class="infProd" style="background-color: #FBD800;">
                                    EN OFERTA
                                </div>
                                <?php endif; ?>
                                <?php if($bproducto["novedad"]=="si"): ?>
                                <div class="infProd" style="background-color: #093070;">
                                    NUEVO
                                </div>
                                <?php endif; ?>
                                <div class="product-img" >
                                    <img src="/<?php echo e($bproducto->imagen); ?>" alt="product" style="height:250px;">
                                    <div class="product-hover">
                                        <div class="product-cart">
                                            <a href="<?php echo e(route('producto.showFrontEnd', $hash->encodeHex($bproducto->id) )); ?>" class="btn btn-secondary btn-block a-card">Detalles</a>
                                        </div>
                                    </div>
                                </div>
                                <div style="height: 50px;">
                                        <h4>
                                            <a href="<?php echo e(route('producto.showFrontEnd', $hash->encodeHex($bproducto->id) )); ?>">
                                                <?php echo e($bproducto["nombre_producto"]); ?>

                                            </a>
                                        </h4>

                                </div>
                            </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <!-- .shop-content end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 product-item">
                <div class="product-cart">
                    <a class="btn btn-secondary btn-block btn-gereric" style="width: 240px !important;" id="load">Ver más productos<i
                        class="fa fa-plus ml-xs"></i>
                    </a>
                </div>
            </div>
            <!-- .col-md-12 end -->
        </div>
    </div>
    <!-- .container end -->


</section>
<?php echo $__env->make('page.sections.productos.modalConvrPernos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('page.sections.productos.modalConvrArandelas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('page.sections.productos.modalDetalles', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<style>
    .lightgallery1 .product-item {
    display: none;
    }
    .wrapper {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 10px;
}
</style>
<script>
    $(function() {
    $(".item").slice(0, 8).show(); // select the first ten
    $("#load").click(function(e) { // click event for load more
        e.preventDefault();
        $(".item:hidden").slice(0, 8).show(); // select next 10 hidden divs and show them
        if ($(".item:hidden").length == 0) { // check if any hidden divs still exist
        console.log("No more divs"); // alert if there are none left
        }
    });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('page.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\repoCompletoPertec\pertecPagina\resources\views/page/sections/productos/catalogo.blade.php ENDPATH**/ ?>