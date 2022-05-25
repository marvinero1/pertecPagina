

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
                        <div class="heading-bg heading-right">
                            <p class="mb-0">Maestros en Pernos</p>
                            <h2>Nuestros Productos</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <form class="search-form">
                        <div class="input-group" style="width: 275px;">
                            <input type="text" class="form-control" placeholder="Buscar">
                            <span class="input-group-btn">
                            <button class="btn" type="button" style="width: 50px; height: 49px;">
                                <i class="fa fa-search" style="font-size: 25px;"></i>
                            </button>
                            </span>
                        </div>
                    </form>
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
                <div class="wrapper">
                    <?php $__currentLoopData = $producto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bproducto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- product #1 --> 
                        <!-- .product-item clearfix end -->
                        
                            <div class="row">
                                <div class="card" style="width: 18rem;">
                                    <img class="card-img-top" src="http://192.168.31.242:5000/<?php echo e($bproducto->imagen); ?>" alt="Card image cap" style="height:300px;">
                                    <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                    </div>
                                </div>
                            </div>
                            
                        
                    
                            
                    
                    
                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
                <!-- .row end -->
                <div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 pager mb-30-xs mb-30-sm">
						<div class="page-prev">
							<a href="#"><i class="fa fa-angle-left"></i></a>
						</div>
						<div class="page-next">
							<a href="#"><i class="fa fa-angle-right"></i></a>
						</div>
					</div>
				</div>
            </div>
            <!-- .shop-content end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 product-item">
                <div class="product-cart">
                    <a class="btn btn-secondary btn-block btn-gereric" style="width: 240px !important;" href="#" id="load">Ver más productos<i
                        class="fa fa-plus ml-xs"></i>
                    </a>
                </div>
            </div>
            <!-- .col-md-12 end -->
        </div>
    </div>
    <!-- .container end -->
</section>

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

<?php echo $__env->make('page.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pertecPagina\resources\views/page/sections/productos/catalogo.blade.php ENDPATH**/ ?>