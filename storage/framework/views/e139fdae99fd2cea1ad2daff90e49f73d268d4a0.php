<?php $__env->startSection('content'); ?>
<section class="bg-overlay bg-overlay-gradient pb-0 bgPageCover" style="background-image: url(../assets/images/page-title/tiendas.jpg);">
    <div class="bgImgCoverPages"></div>
    <div class="container" style="margin-top: -540px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center">
                    <div >
                        <h2>Tienda <?php echo e($tienda->nombre_tienda); ?></h2>
                    </div>
                    <ol class="breadcrumb" style="display: unset !important;">
                        <li>
                            <a href="/">Inicio</a>
                        </li>
                        <li class="active">Tiendas y Oficinas</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="shop">
    <div class="content section-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="heading heading-4">
                            <div class="heading-right">
                                <p class="mb-0">¿Dónde nos encontramos?</p>
                                <h2>Tienda: <?php echo e($tienda->nombre_tienda); ?> (<?php echo e($tienda->ciudad); ?>)</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 shop-content">
                <div class="product-img product-feature-img mb-50">
                    <img src="/<?php echo e($tienda->imagen); ?>" alt="<?php echo e($tienda->nombre_tienda); ?>"/>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-7 sidebar sidebar-full">
                <div class="row">
                    <div class="product-img product-feature-img mb-50">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-50 mb-30">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-7 shop-content">
                <div class="product-content">
                    <div class="product-tabs mb-50">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#details" aria-controls="details" role="tab" data-toggle="tab">Información de la Tienda</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="details">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr style="text-transform: uppercase;">
                                            <td><i class="fa fa-user"></i> Encargado</td><td> <?php echo e($tienda->encargado); ?></td>
                                        </tr>
                                        <tr style="text-transform: uppercase;">
                                            <td><i class="fa fa-phone"></i> Celular</td><td> <?php echo e($tienda->celular); ?></td>
                                        </tr>
                                        <tr style="text-transform: uppercase;">
                                            <td><i class="fa fa-whatsapp"></i> Whatsapp</td><td> <?php echo e($tienda->whatsapp); ?></td>
                                        </tr>
                                        <tr style="text-transform: uppercase;">
                                            <td><i class="fa fa-phone-square"></i> Teléfono</td><td> <?php echo e($tienda->telefono); ?></td>
                                        </tr>
                                        <tr style="text-transform: uppercase;">
                                            <td><i class="fa fa-envelope-o"></i> Correo Electrónico</td><td> <?php echo e($tienda->correo_electronico); ?></td>
                                        </tr>
                                        <tr style="text-transform: uppercase;">
                                            <td><i class="fa fa-map-marker"></i> Dirección</td><td> <?php echo e($tienda->direccion); ?></td>
                                        </tr>
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
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXolVNo_nkRhEqs9BV_oJDY6Dz1OUQCUU&callback=initMap&v=weekly" defer></script>
<script>
    function initMap() {
        var lat1 = <?php echo e($tienda->latitud); ?>;
        var long1 = <?php echo e($tienda->longitud); ?>;
        lat11 = parseFloat(lat1);
        long11 = parseFloat(long1);

        // The location of Uluru
        const uluru = {
            lat: lat11,
            lng: long11
        };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 14,
            center: uluru,
        });
        // The marker, positioned at Uluru
        const marker = new google.maps.Marker({
            position: uluru,
            map: map,
        });
    }
    window.initMap = initMap;
</script>
<style>
    #map {
            height: 400px;
            / The height is 400 pixels /
            width: 100%;
            / The width is the width of the web page /
            }
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('page.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\repoCompletoPertec\pertecPagina\resources\views/page/sections/tiendas/tienda_oficinas.blade.php ENDPATH**/ ?>