

<?php $__env->startSection('content'); ?>
<section class="bg-overlay bg-overlay-gradient pb-0 bgPageCover"
    style="background-image: url(../assets/images/page-title/producBackground.jpg);">
    <div class="bgImgCoverPages"></div>
    <div class="container" style="margin-top: -540px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center texto-borde">
                    <div>
                        <h2 style="line-height: 70px; margin-top: -35px;"><?php echo e($producto_Id->nombre_producto); ?></h2>
                    </div>
                    <ol class="breadcrumb" style="display: unset !important;">
                        <li>
                            <a href="/">Inicio</a>
                        </li>
                        <li>
                            <a href="/productos">Productos</a>
                        </li>
                        <li class="active">Producto</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="shop" style="padding-bottom: 0px;">
    <div class="content section-content">
        <h1 style="text-align: center; text-transform: uppercase;"><b><?php echo e($producto_Id->nombre_producto); ?></b></h1><br>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5 shop-content">
                <?php if($producto_Id->promocion=="si"): ?>
                    <div class="infProd" style="background-color: #FBD800;">
                        EN OFERTA
                    </div>
                <?php endif; ?>
                <?php if($producto_Id->novedad=="si"): ?>
                    <div class="infProd" style="background-color: #093070;">
                        NUEVO
                    </div>
                <?php endif; ?>
                <div class="product-img product-feature-img mb-50">
                    <img src="/<?php echo e($producto_Id->imagen); ?>" alt="<?php echo e($producto_Id->nombre_producto); ?>" />
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-7 sidebar sidebar-full">
                <div style="float: right;">
                    <button class="boton-info" title="Ayuda" data-toggle="modal" data-target="#ModalInfoProd">?</button>
                </div>
                <div class="product-img product-feature-img mb-50" style="text-align: center;">
                    <?php if(is_null($producto_Id['imagen_matriz'])): ?>
                    <img src="../assets/images/matrizVacia.jpg" alt="matriz Vacia" />
                    <?php else: ?>
                    <img id="myImg" style="width: auto; max-width: 85%;" src=" /<?php echo e($producto_Id->imagen_matriz); ?>" alt="Matriz" />
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7 product-content">
                <div class="product-tabs mb-50">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#details" aria-controls="details" class="title-details" role="tab"
                                data-toggle="tab" style="text-transform: uppercase;">Detalles Técnicos</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="details">
                            <table class="table table-striped">
                                <tbody>
                                    <?php if(!is_null($producto_Id->denominacion)): ?>
                                    <tr style="text-transform: uppercase;" class="table-prod-inf">
                                        <td class="title-details">
                                            <h4>Denominación</h4>
                                        </td>
                                        <td class="body-details">
                                            <h5 class="font-frank-medium"><?php echo e($producto_Id->denominacion); ?></h5>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php if(!is_null($producto_Id->categoria)): ?>
                                    <tr style="text-transform: uppercase;" class="table-prod-inf">
                                        <td class="title-details">
                                            <h4>Categoría</h4>
                                        </td>
                                        <td class="body-details">
                                            <h5 class="font-frank-medium"><?php echo e($producto_Id->categoria); ?></h5>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php if(!is_null($producto_Id->material)): ?>
                                    <tr style="text-transform: uppercase;" class="table-prod-inf">
                                        <td class="title-details">
                                            <h4>Material</h4>
                                        </td>
                                        <td class="body-details">
                                            <h5 class="font-frank-medium"><?php echo e($producto_Id->material); ?></h5>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php if(!is_null($producto_Id->acabado)): ?>
                                    <tr style="text-transform: uppercase;" class="table-prod-inf">
                                        <td class="title-details">
                                            <h4>Acabado</h4>
                                        </td>
                                        <td class="body-details">
                                            <h5 class="font-frank-medium"><?php echo e($producto_Id->acabado); ?></h5>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php if(!is_null($producto_Id->rosca)): ?>
                                    <tr style="text-transform: uppercase;" class="table-prod-inf">
                                        <td class="title-details">
                                            <h4>Rosca</h4>
                                        </td>
                                        <td class="body-details">
                                            <h5 class="font-frank-medium"><?php echo e($producto_Id->rosca); ?></h5>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php if(!is_null($producto_Id->resistencia)): ?>
                                    <tr style="text-transform: uppercase;" class="table-prod-inf">
                                        <td class="title-details">
                                            <h4>Resistencia</h4>
                                        </td>
                                        <td class="body-details">
                                            <h5 class="font-frank-medium"><?php echo e($producto_Id->resistencia); ?></h5>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php if(!is_null($producto_Id->tratamiento)): ?>
                                    <tr style="text-transform: uppercase;" class="table-prod-inf">
                                        <td class="title-details">
                                            <h4>Tratamiento</h4>
                                        </td>
                                        <td class="body-details">
                                            <h5 class="font-frank-medium"><?php echo e($producto_Id->tratamiento); ?></h5>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php if(!is_null($producto_Id->sae)): ?>
                                    <tr style="text-transform: uppercase;" class="table-prod-inf">
                                        <td class="title-details">
                                            <h4>SAE</h4>
                                        </td>
                                        <td class="body-details">
                                            <h5 class="font-frank-medium"><?php echo e($producto_Id->sae); ?></h5>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php if(!is_null($producto_Id->zb)): ?>
                                    <tr style="text-transform: uppercase;" class="table-prod-inf">
                                        <td class="title-details">
                                            <h4>ZB</h4>
                                        </td>
                                        <td class="body-details">
                                            <h5 class="font-frank-medium"><?php echo e($producto_Id->zb); ?></h5>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                    <?php if(!is_null($producto_Id->zam)): ?>
                                    <tr style="text-transform: uppercase;" class="table-prod-inf">
                                        <td class="title-details">
                                            <h4>ZAM</h4>
                                        </td>
                                        <td class="body-details">
                                            <h5 class="font-frank-medium"><?php echo e($producto_Id->zam); ?></h5>
                                        </td>
                                    </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-50 mb-30">
    </div>
</section>

<section class="shop" style="padding-top: 0px;">
    <div class="content section-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h1 style="text-align: center; text-transform: uppercase;"><b>Productos Sugeridos</b></h1><br>
                <div class="row">
                    <div class="widget-related-product">
                        <div class="widget-content">
                            <div class="row">
                                <?php $__currentLoopData = $producto_sugeridos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto_sugeridoss): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 product-item clearfix">
                                    <div class="product-img">
                                        <img src="/<?php echo e($producto_sugeridoss->imagen); ?>" style="height: 220px;"
                                            alt="product">
                                        <div class="product-hover">
                                            <div class="product-cart">
                                                <a style="font-size: 1rem;" class="btn btn-secondary btn-block"
                                                    href="<?php echo e(route('producto.showFrontEnd', $hash->encodeHex($producto_sugeridoss->id) )); ?>">Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="height: 50px;">
                                        <h4>
                                            <a
                                                href="<?php echo e(route('producto.showFrontEnd', $hash->encodeHex($producto_sugeridoss->id) )); ?>"><?php echo e($producto_sugeridoss["nombre_producto"]); ?></a>
                                        </h4>
                                    </div>
                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php echo $__env->make('page.sections.productos.modalInfoProd', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- The Modal -->
<div id="myModalImg" class="modal">
    <button onclick="closeMod();" class="close">×</button>
    <img class="modal-content zoom" id="img01">
    <div id="caption"></div>
</div>


<style>
    #myImg {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }

    #myImg:hover {
        opacity: 0.7;
    }

    /* The Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1030;
        /* Sit on top */
        padding-top: 200px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.9);
        /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }

    /* Caption of Modal Image */
    #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
    }

    /* Add Animation */
    .modal-content,
    #caption {
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
        from {
            -webkit-transform: scale(0)
        }

        to {
            -webkit-transform: scale(1)
        }
    }

    @keyframes  zoom {
        from {
            transform: scale(0)
        }

        to {
            transform: scale(1)
        }
    }

    /* The Close Button */
    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }

    /* 100% Image Width on Smaller Screens */
    @media  only screen and (max-width: 700px) {
        .modal-content {
            width: 100%;
        }

        .zoom:hover {
            left: 25%;
        }
    }

    .zoom:hover {
        ;
        -ms-transform: scale(1.5);
        /* IE 9 */
        -webkit-transform: scale(1.5);
        /* Safari 3-8 */
        transform: scale(1.5);
    }


    .boton-info {
        border-radius: 50%;
        background-color: #FBD800;
        color: #093070;
        border-color: #FBD800;
        font-weight: bold;
        font-size: large;
        width: 30px;
        position: absolute;
        top: -20px;
        right: 20px;
    }

    .boton-info:hover {
        background-color: #093070;
        color: #FBD800;
        border-color: #093070;
    }

</style>



<script>
    // Get the modal
    var modal = document.getElementById('myModalImg');

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var img = document.getElementById('myImg');
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    img.onclick = function () {
        modal.style.display = "block";
        modalImg.src = this.src;
        modalImg.alt = this.alt;
        captionText.innerHTML = this.alt;
    }


    function closeMod() {
        modal.style.display = "none";
    }

</script>


<script type="text/javascript">
    $(document).ready(function () {
        $("#img01").mlens({
            imgSrc: $("#img01").attr("data-big"), // path of the hi-res version of the image
            lensShape: "circle", // shape of the lens (circle/square)
            lensSize: 180, // size of the lens (in px)
            borderSize: 4, // size of the lens border (in px)
            borderColor: "#fff", // color of the lens border (#hex)
            borderRadius: 0, // border radius (optional, only if the shape is square)
            imgOverlay: $("#img01").attr("data-overlay"), // path of the overlay image (optional)
            overlayAdapt: true // true if the overlay image has to adapt to the lens size (true/false)
        });
    });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('page.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pertecPagina\resources\views/page/sections/productos/show.blade.php ENDPATH**/ ?>