

<?php $__env->startSection('content'); ?>
<div class="row container" onload="initMap()"><br><br>
    <div class="col">
        <div class="col-md-4">
            <div class="card card-price">
                <div class="card-img"><br>
                    <div class="cat">
                        <img src="/<?php echo e($tienda->imagen); ?>" class="img-responsive imgprod card-img-top" alt="<?php echo e($tienda->nombre_tienda); ?>">
                    </div><br>
                    
                    <div class="card-caption"><br>
                        <span class="h2"><?php echo e($tienda->nombre_tienda); ?></span>
                        
                    </div>
                   
                </div>
                <div class="card-body">
    
                    <ul class="details">
                        
                    </ul> 
                    <table class="table">
                        <tr><th>Denominacion Tienda</th><th style="text-align: center;"><?php echo e($tienda->nombre_tienda); ?></th></tr>
                        <tr><td>Telefono</td><td class="price"><?php echo e($tienda->telefono); ?></td></tr>
                        <tr><td>Celular</td><td class="price"><?php echo e($tienda->celular); ?></td></tr>
                        <tr><td>Whatsapp</td><td class="price"><?php echo e($tienda->whatsapp); ?></td></tr>
                        <tr><td>Direccion</td><td class="price"><?php echo e($tienda->direccion); ?></td></tr>
                        <tr><td>Ciudad</td><td class="price"><?php echo e($tienda->ciudad); ?></td></tr>
                        <tr><td>E-mail</td><td class="price"><?php echo e($tienda->correo_electronico); ?></td></tr>
                        <tr><td>Encargado</td><td class="price"><?php echo e($tienda->encargado); ?></td></tr>
                    </table>
                </div>
                <div class="col-md-12">
                    <a href="<?php echo e(route('admin.tienda.index')); ?>" style="color: black">
                        <button class="btn btn-warning"> <i class="fa fa-close" aria-hidden="true"></i> Atras</button></a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card card-price">
                <div class="card-img"><br>
                    <div class="card-caption">
                        <span class="h2"><?php echo e($tienda->nombre_tienda); ?></span>
                    </div>
                    <div class="cat" style="text-align: center;"><br>
                        <div class="col">
                            <div class="row">
                                <div id="lat"><?php echo e($tienda->latitud); ?></div> , <div id="long"><?php echo e($tienda->longitud); ?></div>
                            </div>
                        </div>
                    </div>
                    <div id="map"></div>
                    
                   
                </div>
                <div class="card-body">
                    
                </div><br>
            </div>
        </div>
    </div>
</div>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXolVNo_nkRhEqs9BV_oJDY6Dz1OUQCUU&callback=initMap&v=weekly" defer></script>
    <script>
        function initMap() {
            var lat1 = document.getElementById("lat").innerHTML;
            var long1 = document.getElementById("long").innerHTML;

            lat11 = parseFloat(lat1);
            long11 = parseFloat(long1);
            console.log(lat11, long11);

            // The location of Uluru
            const uluru = { lat: lat11, lng: long11};
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
    td{
        line-height: inherit !important;
    }
    .card-price{ border-color: #999; background-color: #ededed; margin-bottom: 24px; width: 100%; max-width: 100%;}
    .card-price > .card-heading,
    .card-price > .card-footer{ color: #73879C; background-color: #fdfdfd; }
    .card-price > .card-heading{ border-bottom: 1px solid #ddd; padding: 8px; }
    .card-price > .card-footer{ border-top: 1px solid #ddd; padding: 8px; }
    .card-price > .card-img:first-child img{ border-radius: 6px 6px 0 0; }
    .card-price > .card-left{ padding-right: 4px; }
    .card-price > .card-right{ padding-left: 4px; }
    .card-price .card-caption { color: #73879C; text-align: center; text-transform: uppercase; }
    .card-price p:last-child{ margin-bottom: 0; }
    .card-price .price{ 
    text-align: center; 
    color: #337ab7; 
    font-size: 3em; 
    text-transform: uppercase;
    line-height: 0.7em; 
    margin: 24px 0 16px;
    }
    .card-price .price small{ font-size: 0.4em; color: #66a5da; }
    .card-price .details{ list-style: none; margin-bottom: 24px; padding: 0 18px; }
    .card-price .details li{ text-align: center; margin-bottom: 8px; }
    .card-price .buy-now{ text-transform: uppercase; }
    .card-price table .price{ font-size: 1.2em; font-weight: 700; text-align: left; }
    .card-price table .note{ color: #666; font-size: 0.8em; }
    .imgprod{
        max-width: 100%;
        max-height: 100%;
        display: block;
        margin: auto;
    }
    .cat{
        width: 95%;
        display: block;
        margin: auto;
    }
    input[type="file"]{
        display: none;
    }
    input {
        text-transform: uppercase !important;
    }
    .custom-file-upload {
        width: 100%;
        border: 1px solid #ccc;
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
    }
    #map {
        height: 400px;
        /* The height is 400 pixels */
        width: inherit !important;
        /* The width is the width of the web page */
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pertecPagina\resources\views/admin/tiends/show.blade.php ENDPATH**/ ?>