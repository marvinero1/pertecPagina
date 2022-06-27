

<?php $__env->startSection('content'); ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Select2 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<section class="bg-overlay bg-overlay-gradient pb-0 bgPageCover" 
    style="background: linear-gradient(177deg, rgba(252,218,1,1) 0%, rgba(130,131,59,1) 50%, rgba(9,45,116,1) 100%);">
    <div class="bgImgCoverPages"></div>
    <div class="container" style="margin-top: -540px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center texto-borde">
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
                    <div class="col-xs-12 col-sm-12 col-md-4 aling-left" style="float: right;">
                        <form style="display: contents !important;margin-top: 0em !important;margin-block-end: 0em !important">
                            <div class="form-group top_search">
                                <div class="input-group" style="width: 355px;">
                                    <select id="single" class="js-states form-control font-frank-book" name="buscarpor"
                                        style="border: 1px #093070 solid; height: 40px; padding-left: 12px; font-size: 1.3rem; color: #5a5a5ab8;">
                                        <option value="null">Todos los Productos</option>
                                        <?php $__currentLoopData = $producto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($productos->nombre_producto); ?>"><?php echo e(strtoupper($productos->nombre_producto)); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    
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
                                Piezas/Kg en Pernos</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 product-item">
                        <div class="product-cart">
                            <a class="btn btn-secondary btn-block btn-gereric" style="width: 255px !important;" href="#" data-toggle="modal" data-target="#ModalArand">
                                Piezas/Kg en Arandelas</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 product-item aling-left">
                        <div class="product-cart">
                            <a class="btn btn-secondary btn-block btn-gereric" style="width: 255px !important;" href="#" data-toggle="modal" data-target="#ModalAutos">
                                Normas y Abreviaturas </a>
                        </div>
                    </div>
                </div>
                <?php if($nombre_producto == "null"): ?>
                    <div class="row lightgallery1">
                        <?php $__currentLoopData = $producto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bproducto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                <?php else: ?>
                    <div class="row lightgallery1">
                        <?php $__currentLoopData = $producto_buscado; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bproducto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                <?php endif; ?>
                


            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 product-item">
                <div class="product-cart">
                    <a class="btn btn-secondary btn-block btn-gereric" style="width: 240px !important;" id="load">Ver más productos<i
                        class="fa fa-plus ml-xs"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
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
    .select2-container .select2-selection--single{
        height: 40px !important;
    }
    .select2-container--default .select2-selection--single .select2-selection__rendered{
        color: #093070;
        line-height: 34px;
    }
    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 26px;
        position: absolute;
        top: 5px;
        right: 1px;
        width: 20px;
    }
    .select2-container{
        width: 380px !important;
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
    $("#single").select2({
          placeholder: "Busque y Seleccione el producto",
          allowClear: true
      });
      $("#multiple").select2({
          placeholder: "Select a programming language",
          allowClear: true
      });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('page.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pertecPagina\resources\views/page/sections/productos/catalogo.blade.php ENDPATH**/ ?>