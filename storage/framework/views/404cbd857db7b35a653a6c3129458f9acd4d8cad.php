<?php $__env->startSection('content'); ?>
<!-- carrusel -->
<section id="hero" class="hero hero-4">
    <!-- START REVOLUTION SLIDER 5.0 -->
    <div class="rev_slider_wrapper ">
        <div id="slider1" class="rev_slider" data-version="5.0">
            <ul>
                <?php $__currentLoopData = $carusel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carusels): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li data-transition="fadetobottomfadefromtop" data-slotamount="default" data-easein="Power4.easeInOut"
                    data-easeout="Power4.easeInOut" data-masterspeed="4000">
                    <!-- MAIN IMAGE -->
                    <img src="http://192.168.31.242:5000/<?php echo e($carusels->imagen); ?>" alt="">


                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption font-frank-demi" data-x="center" data-hoffset="0" data-y="center"
                        data-voffset="-120" data-whitespace="nowrap" data-width="['150','70','70','100']"
                        data-height="['150','70','70','100']" data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="3000" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" style="z-index: 999 !important;">
                        <img src="http://192.168.31.242:5000/<?php echo e($carusels->imagen_icono); ?>" alt="hook" />

                    </div>

                    <!-- LAYER NR. 2 -->
                    <h1 class="tp-caption text-uppercase font-frank-demi" data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="0" data-whitespace="nowrap" data-width="none" data-height="none"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="3500" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-fontsize="['75','17','15','15']"
                        data-lineheight="['100','45','25','25']" data-color="#ffc527" style="z-index: 999 !important;">
                        <?php echo e($carusels->titulo); ?>

                    </h1>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption text-uppercase font-frank-demi" data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="80" data-width="none" data-height="none"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="4000" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-fontsize="['50','17','17','17']"
                        data-lineheight="['50','26','25','25']" data-color="#fff" style="z-index: 999 !important;">
                        <?php echo e($carusels->sub_titulo); ?>

                    </div>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
    <!-- END OF SLIDER WRAPPER -->
</section>


<!-- acerca de nosotros -->
<section id="sectionAboutUs" class="shotcode-1 about-home-2 text-center-xs text-center-sm"
    style="background-color: white;">
    <div class="content section-content">
        <div class="row slide">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="heading heading-4">
                            <div class="heading-right">
                                <p class="mb-0">¿Quiénes somos?</p>
                                <h1 class="h1s">Nuestra Historia</h1>
                            </div>
                        </div>
                        <!-- .heading end -->
                    </div>

                </div>
            </div>
            <!-- .col-md-12 end -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <p style="text-align: justify;">Desarrollamos oportunidades mutuas de servicio y beneficio con
                    nuestros proveedores, mediante el cumplimiento de estrictas normas de calidad.</p>
                <p style="text-align: justify;">Somos una empresa dedicada a satisfacer todas las necesidades de
                    Elementos de Sujeción de los sectores
                    de construcción, industria, agroindustria, minería, metalmecánica y del parque automotriz en
                    general, a través de la importación y
                    comercialización directa.</p>
                <ul style="text-align: justify;" class="list-unstyled">
                    <li>
                        <p><i class="fa fa-check ml-xs" style="color: #ffcb00;"></i> Nuestra vocación de servicio es el
                            motor que impulsa y
                            dirige nuestras acciones.</p>
                    </li>
                    <li>
                        <p><i class="fa fa-check ml-xs" style="color: #ffcb00;"></i> Brindamos un excelente servicio a
                            los clientes externos e
                            internos, en procura de
                            maximizar la satisfacción de sus necesidades y deseos.</p>
                    </li>
                    <li>
                        <p><i class="fa fa-check ml-xs" style="color: #ffcb00;"></i> Somos personas comprometidas con
                            nuestra Empresa y
                            trabajamos en equipo.</p>
                    </li>
                </ul>
                <p style="text-align: justify;">Importamos desde Europa, el Asia, Norte y Sudamérica el 97 % de los
                    productos que comercializamos.
                    Nuestros proveedores, son todas empresas líderes del rubro con certificaciones ISO 9000, QS 9000,
                    etc., que manufacturan sus productos
                    cumpliendo las más estrictas normas de calidad y exportan más de la mitad de su producción a
                    Norteamérica, Europa y Japón. </p>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 ">
                <div class="panel-group accordion" id="accordion02" role="tablist" aria-multiselectable="true">

                    <!-- Panel 01 -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" role="button" data-toggle="collapse"
                                    data-parent="#accordion02" href="#collapse02-1" aria-expanded="true"
                                    aria-controls="collapse02-1"> Nuestra Misión </a>
                                <span class="icon"></span>
                            </h4>
                        </div>
                        <div id="collapse02-1" class="panel-collapse collapse in" role="tabpanel"
                            aria-labelledby="headingOne">
                            <div class="panel-body" style="text-align: justify;">
                                Solucionamos en el mercado nacional las necesidades de Elementos de Sujeción, mediante
                                la provisión de los productos y servicios asociados, manteniendo el liderazgo,
                                promoviendo la excelencia,
                                utilizando tecnología de vanguardia y aumentando nuestra participación de mercado,
                                mediante la importación y desarrollo de los canales de comercialización de los mismos.
                            </div>
                        </div>
                    </div>

                    <!-- Panel 02 -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" role="button" data-toggle="collapse"
                                    data-parent="#accordion02" href="#collapse02-2" aria-expanded="false"
                                    aria-controls="collapse02-2"> Nuestra Visión </a>
                            </h4>
                        </div>
                        <div id="collapse02-2" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingTwo">
                            <div class="panel-body" style="text-align: justify;">
                                Alcanzaremos una importante participación de mercado en Bolivia, mediante ventas
                                directas y a través de nuestra red de distribuidores. Consiguiendo la optimización y
                                estandarización de nuestros
                                los procesos internos, contando con un equipo de colaboradores altamente capacitados y
                                motivados.
                            </div>
                        </div>
                    </div>

                    <!-- Panel 03 -->
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="accordion-toggle collapsed" role="button" data-toggle="collapse"
                                    data-parent="#accordion02" href="#collapse02-3" aria-expanded="false"
                                    aria-controls="collapse02-3"> Nuestros Valores </a>
                            </h4>
                        </div>
                        <div id="collapse02-3" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingThree">
                            <div class="panel-body yellow-color" style="text-align: justify;">
                                <p><b>1.</b> Nuestra vocación de servicio es el motor que impulsa y dirige nuestras
                                    acciones, para mantener nuestro liderazgo, destacarnos y crecer en el mercado.</p>
                                <p><b>2.</b> Hacemos que la calidad sea nuestra forma de vida.</p>
                                <p><b>3.</b> Reconocemos que el respeto a las personas y a la fuente de trabajo
                                    constituye un fundamento esencial para nuestra organización.</p>
                                <p><b>4.</b> Brindamos un excelente servicio a los clientes externos e internos, en
                                    procura de maximizar la satisfacción de sus necesidades y deseos.</p>
                                <p><b>5.</b> La amplia comunicación, colaboración y transparencia ejercida a todo nivel
                                    es la base esencial para lograr nuestros objetivos comunes.</p>
                                <p><b>6.</b> Somos personas comprometidas con nuestra Empresa y trabajamos en equipo.
                                </p>
                                <p><b>7.</b> El permanente crecimiento y rentabilidad de nuestra empresa se refleja en
                                    beneficios para quienes la servimos.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .Accordion-->
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>



<!-- productos -->
<section id="sectionProducts" style="background-color: #F6F6F6;">
    <div class="content section-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 shop-content">
                <div class="row">
                    <div class="heading">
                        <div class="heading-right">
                            <p class="mb-0">Catálogo</p>
                            <h1 class="h1s">Nuestros Productos</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content section-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 shop-content">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner content" role="listbox">

                        <div class="item active">

                            <div class="row">
                                <!-- product #1 -->

                                <?php $__currentLoopData = $producto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-xs-12 col-sm-6 col-md-3 product-item  clearfix">

                                    <div class="product-img">
                                        <img src='http://192.168.31.240:5000/<?php echo e($productos->imagen); ?>' alt="product"
                                            style="height:250px;">
                                        <div class="product-hover">
                                            <div class="product-cart">
                                                <a class="btn btn-secondary btn-block a-card"
                                                    href="<?php echo e(route('producto.showFrontEnd', $hash->encodeHex($productos->id))); ?>">Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="height: 50px;">
                                        <h4>
                                            <a href="<?php echo e(route('producto.showFrontEnd', $hash->encodeHex($productos->id))); ?>"><?php echo e($productos->nombre_producto); ?></a>
                                        </h4>
                                    </div>

                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>

                        </div>


                        <div class="item">

                            <div class="row">
                                <!-- product #1 -->

                                <?php $__currentLoopData = $producto2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-xs-12 col-sm-6 col-md-3 product-item  clearfix">

                                    <div class="product-img">
                                        <img src='http://192.168.31.240:5000/<?php echo e($productos->imagen); ?>' alt="product"
                                            style="height:250px;">
                                        <div class="product-hover">
                                            <div class="product-cart">
                                                <a class="btn btn-secondary btn-block a-card"
                                                    href="<?php echo e(route('producto.showFrontEnd', $hash->encodeHex($productos->id))); ?>">Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="height: 50px;">
                                        <h4>
                                            <a href="<?php echo e(route('producto.showFrontEnd', $hash->encodeHex($productos->id))); ?>"><?php echo e($productos->nombre_producto); ?></a>
                                        </h4>
                                    </div>

                                </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>

                        </div>



                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button"
                            data-slide="prev">
                            <div
                                style="width: 50px; height: 49px; position: absolute; top: 25%; left: 0%; background-color: rgb(206 206 206 / 80%);">
                                <i class="fa fa-angle-left" style="margin-top: 2px; font-size: 3rem; font-weight: bold;"
                                    aria-hidden="true"></i>
                            </div>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button"
                            data-slide="next">
                            <div
                                style="width: 50px; height: 49px; position: absolute; top: 25%; right: 0%; background-color: rgb(206 206 206 / 80%);">
                                <i class="fa fa-angle-right"
                                    style="margin-top: 2px; font-size: 3rem; font-weight: bold;" aria-hidden="true"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 product-item">
                <div class="product-cart">
                    <a class="btn btn-secondary btn-block btn-gereric" style="width: 240px !important;"
                        href="/productos">Ver más productos<i class="fa fa-plus ml-xs"></i>
                    </a>
                </div>
            </div>
            <!-- .col-md-12 end -->
        </div>
    </div>
    <!-- .container end -->
</section>


<section id="sectionStores">
    <div class="content tdn section-content">
        <!-- oficinas nivel nacional-->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="heading heading-4">
                            <div class="heading-right">
                                <p class="mb-0">¿Dónde nos encontramos?</p>
                                <h1 class="h1s">Nuestras oficinas y tiendas</h1>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 product-item ofice-store-item" style="text-align: left;">
                        <div class="product-cart">
                            <button class="btn btn-secondary btn-block btn-gereric" style="width: 300px !important;"
                                onclick="showOfs('of-centrals')">Oficinas a nivel nacional<i
                                    class="fa fa-plus ml-xs"></i>
                            </button>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                </div>
            </div>
        </div>
        <div class="row" id="of-centrals" style="display: none; margin-top: -55px;">
            <?php $__currentLoopData = $oficinas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xs-12 col-sm-6 col-md-4 entry">
                    <div class="entry-img">
                        <a class="img-popup" href="<?php echo e(route('tiendasPertec', $hash->encodeHex($item->id))); ?>">
                            <img src="http://192.168.31.240:5000/<?php echo e($item->imagen); ?>" alt="title" />
                        </a>
                    </div><br>
                    <div class="entry-title">
                        <h3><a href="<?php echo e(route('tiendasPertec', $hash->encodeHex($item->id))); ?>" >Oficina <?php echo e($item->ciudad); ?></a></h3>
                    </div>
                    <div class="entry-content conten-stores">
                        <h5 style="text-transform: capitalize;"><i class="fa fa-map-marker"></i> Dirección: <?php echo e($item->direccion); ?></h5>
                        <h5><i class="fa fa-phone-square"></i> Telf: <?php echo e($item->telefono); ?></h5>
                        <h5><i class="fa fa-whatsapp"></i> Whatsapp: <?php echo e($item->whatsapp); ?></h5>
                        <h5><i class="fa fa-phone"></i> Celular: <?php echo e($item->celular); ?></h5>
                        <a class="entry-more" href="<?php echo e(route('tiendasPertec', $hash->encodeHex($item->id))); ?>"><i class="fa fa-plus"></i>
                            <span>Más Información</span>
                        </a>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- tiendas cbba -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 product-item ofice-store-item" style="text-align: left;">
                        <div class="product-cart heading-right">
                            <button class="btn btn-secondary btn-block btn-gereric" style="width: 300px !important;"
                                onclick="showOfs('storeCbba')">Tiendas Cochabamba<i class="fa fa-plus ml-xs"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="storeCbba" style="display: none; margin-top: -55px;">
            <?php $__currentLoopData = $tiendaCBBA; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tcb): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xs-12 col-sm-6 col-md-4 entry">
                <div class="entry-img">
                    <a class="img-popup" href="<?php echo e(route('tiendasPertec', $hash->encodeHex($tcb->id))); ?>">
                        <img src="http://192.168.31.240:5000/<?php echo e($tcb->imagen); ?>" alt="title" />
                    </a>
                </div><br>
                <div class="entry-title">
                    <h3>
                        <a href="<?php echo e(route('tiendasPertec', $hash->encodeHex($tcb->id))); ?>">Tienda <?php echo e($tcb->nombre_tienda); ?></a>
                    </h3>
                </div>
                <div class="entry-content conten-stores">
                    <h5 style="text-transform: capitalize;"><i class="fa fa-map-marker"></i> Dirección: <?php echo e($tcb->direccion); ?></h5>
                    <h5><i class="fa fa-phone-square"></i> Telf: <?php echo e($tcb->telefono); ?></h5>
                    <h5><i class="fa fa-whatsapp"></i> Whatsapp: <?php echo e($tcb->whatsapp); ?></h5>
                    <h5><i class="fa fa-phone"></i> Celular: <?php echo e($tcb->celular); ?></h5>
                    <a class="entry-more" href="<?php echo e(route('tiendasPertec', $hash->encodeHex($tcb->id))); ?>"><i class="fa fa-plus"></i>
                        <span>Más Información</span>
                    </a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- tiendas la paz-->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 product-item ofice-store-item" style="text-align: left;">
                        <div class="product-cart heading-right">
                            <button class="btn btn-secondary btn-block btn-gereric" style="width: 300px !important;"
                                onclick="showOfs('storeLaPaz')">Tiendas La Paz<i class="fa fa-plus ml-xs"></i>
                            </button>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                </div>
            </div>
        </div>
        <div class="row" id="storeLaPaz" style="display: none; margin-top: -55px;">
            <?php $__currentLoopData = $tiendaLPZ; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tlz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xs-12 col-sm-6 col-md-4 entry" style="float: right;">
                <div class="entry-img">
                    <a class="img-popup" href="<?php echo e(route('tiendasPertec', $hash->encodeHex($tlz->id))); ?>">
                        <img src="http://192.168.31.240:5000/<?php echo e($tlz->imagen); ?>" alt="title" />
                    </a>
                </div><br>
                <div class="entry-title">
                    <h3>
                        <a href="<?php echo e(route('tiendasPertec', $hash->encodeHex($tlz->id))); ?>">Tienda <?php echo e($tlz->nombre_tienda); ?></a>
                    </h3>
                </div>
                <div class="entry-content conten-stores">
                    <h5 style="text-transform: capitalize;"><i class="fa fa-map-marker"></i> Dirección: <?php echo e($tlz->direccion); ?></h5>
                    <h5><i class="fa fa-phone-square"></i> Telf: <?php echo e($tlz->telefono); ?></h5>
                    <h5><i class="fa fa-whatsapp"></i> Whatsapp: <?php echo e($tlz->whatsapp); ?></h5>
                    <h5><i class="fa fa-phone"></i> Celular: <?php echo e($tlz->celular); ?></h5>
                    <a class="entry-more" href="<?php echo e(route('tiendasPertec', $hash->encodeHex($tlz->id))); ?>"><i class="fa fa-plus"></i>
                        <span>Más Información</span>
                    </a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <!-- tiendas santa cruz -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 product-item ofice-store-item" style="text-align: left;">
                        <div class="product-cart heading-right">
                            <button class="btn btn-secondary btn-block btn-gereric" style="width: 300px !important;"
                                onclick="showOfs('storeSantaCruz')">Tiendas Santa Cruz<i class="fa fa-plus ml-xs"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="storeSantaCruz" style="display: none; margin-top: -55px;">
            <?php $__currentLoopData = $tiendaSTCZ; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tsz): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-xs-12 col-sm-6 col-md-4 entry">
                <div class="entry-img">
                    <a class="img-popup" href="<?php echo e(route('tiendasPertec', $hash->encodeHex($tsz->id))); ?>">
                        <img src="http://192.168.31.240:5000/<?php echo e($tsz->imagen); ?>" alt="title" />
                    </a>
                </div><br>
                <div class="entry-title">
                    <h3>
                        <a href="<?php echo e(route('tiendasPertec', $hash->encodeHex($tsz->id))); ?>">Tienda <?php echo e($tsz->nombre_tienda); ?></a>
                    </h3>
                </div>
                <div class="entry-content conten-stores">
                    <h5 style="text-transform: capitalize;"><i class="fa fa-map-marker"></i> Dirección: <?php echo e($tsz->direccion); ?></h5>
                    <h5><i class="fa fa-phone-square"></i> Telf: <?php echo e($tsz->telefono); ?></h5>
                    <h5><i class="fa fa-whatsapp"></i> Whatsapp: <?php echo e($tsz->whatsapp); ?></h5>
                    <h5><i class="fa fa-phone"></i> Celular: <?php echo e($tsz->celular); ?></h5>
                    <a class="entry-more" href="<?php echo e(route('tiendasPertec', $hash->encodeHex($tsz->id))); ?>"><i class="fa fa-plus"></i>
                        <span>Más Información</span>
                    </a>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<!-- call center -->
<section id="sectionCallCenter" class="service service-2 bg-gray pb-0">
    <div class="container-fluid">
        <div class="row alto-row-callCenter" style="background-color: #FBD800;">
            <div class="col-xs-12 col-sm-6 col-md-6 col-img col-bg"
                style="background-image: url('/assets/images/system/4.jpg');"></div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-content"
                style="height: 100%; display: flex; align-items: center; word-break: break-all;">
                <div class="spaceText" style="text-align: center; padding: 95px 40px 95px 40px;">
                    <p class="p-title">CALL CENTER</p><br>
                    <img src="/assets/images/system/AGENTE 1-04.png" style="width: 48px !important;">
                    <P class="p-subtitle">Atención al cliente</P>
                    <p class="p-texto" style="word-break: normal;">
                        Contamos con personal altamente calificado para brindarle asesoramiento,
                        información y soluciones integrales a nivel nacional.
                    </p>
                    <br>
                    <img src="/assets/images/system/AGENTE 2-05.png" style="width: 48px !important;">
                    <P class="p-subtitle">Toma de pedidos</P>
                    <p class="p-texto" style="word-break: normal;">
                        Contamos con la tecnología adecuada que nos permite la toma de
                        pedidos en tiempo real.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="widgets-contact">
            <div class="row" style="margin-right: 0px;">
                <div class="col-xs-12 col-sm-12 col-md-4 widget">
                    <div class="widget-contact-icon pull-left">
                        <img src="/assets/images/system/CELULAR.png" style="margin-top: -15px;" width="30px;">
                    </div>
                    <div class="widget-contact-info">
                        <a class="text-capitalize font-heading awithmodelh1" href="tel:+591 72221031">72221031 - </a>
                        <a class="text-capitalize font-heading awithmodelh1" href="tel:+591 72221033"">72221033</a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 widget widget-contact-center">
                    <div class="widget-contact-icon pull-left">
                        <i class="fa fa-whatsapp" aria-hidden="true" style="margin-top: -15px;color:black;"></i>
                    </div>
                    <div class="widget-contact-info">
                        <a class="font-heading awithmodelh1">(Whatsapp)</a>
                        <a href="https://wa.me/+59172221032/?text=Hola%20Pertec%20Quisiera%20Cotizar%20Sus%20Productos"
                        class=" awithmodelh1" target="_blank">72221032</a>
                        <strong>-</strong>
                        <a href="https://wa.me/+59172230024/?text=Hola%20Pertec%20Quisiera%20Cotizar%20Sus%20Productos"
                        class="awithmodelh1" target="_blank">72230024</a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 widget widget-contact-right">
                    <div class="widget-contact-icon pull-left">
                        <i class="fa fa-envelope-o" aria-hidden="true" style="margin-top: -15px;color:black;"></i>
                    </div>
                    <div class="widget-contact-info">
                        <a class="font-heading awithmodelh1" href="mailto:servicio.cliente@pertec.com.bo">servicio.cliente@pertec.com.bo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="cookie-disclaimer">
    <div class="cookie-close accept-cookie"><i class="fa fa-times"></i></div>
    <div class="container">
        <p>PERTEC S.R.L. &copy; utiliza ("cookies") para aumentar la calidad del sitio.
                Lea más sobre nuestro uso de cookies.
            <br>Al continuar utilizando el sitio web, acepta nuetro uso de cookies.</p>
        <button type="button" class="btn btn-success accept-cookie">¡Está bien!</button>
    </div>
</div>



<style type="text/css">
.awithmodelh1{
        color: #000000;
        font-family: 'Franklin Gothic Demi', sans-serif;
        font-size: 1.6rem;
        line-height: 23px;
        cursor: pointer;
    }
    .h1s {
        font-size: 2.4rem;
        text-transform: uppercase;
        font-family: 'Franklin Gothic Demi', sans-serif;
        font-weight: 100;
        letter-spacing: 1px;
        line-height: 1;
        margin-bottom: 0;
        padding-bottom: 19px;
        color: #093070;
    }

    .slide {
        animation-duration: 2s;
        animation-name: slidein;
    }

    .tp-bgimg defaultimg {
        filter: contrast(0.8) !important;
    }

    .tdn {
        animation-duration: 3s;
        animation-name: tdn;
    }

    .fondo_con {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(181deg, rgba(9, 48, 112, 0.5) 0%, rgba(255, 255, 255, 0.2) 100%);
        z-index: 99;
    }

    @keyframes  slidein {
        from {
            margin-left: 0%;
            margin-top: 100%;
        }

        to {
            margin-down: 100%;
            width: 100%;
        }
    }

    @keyframes  tdn {
        from {
            margin-top: 100%;
        }

        to {
            margin-top: 0%;
        }
    }

    .modalPopUp {
        z-index: 999;
        width: 100%;
        height: 100%;
        background: rgba(9, 48, 112, 0.5);
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        animation: modal 1s 2s forwards;
        visibility: hidden;
        opacity: 0;
        text-align: center;
    }

    .contenido {
        margin: auto;
        width: 40%;
        height: 40%;
        background: white;
        border-radius: 10px;
    }

    #cerrar {
        display: none;
    }

    #cerrar+label {
        position: fixed;
        color: #fff;
        font-size: 25px;
        z-index: 50;
        background: darkred;
        height: 40px;
        width: 40px;
        line-height: 40px;
        border-radius: 50%;
        right: 150px;
        top: 150px;
        cursor: pointer;

        animation: modal 2s 2s forwards;
        visibility: hidden;
        opacity: 0;
    }

    #cerrar:checked+label,
    #cerrar:checked~.modalPopUp {
        display: none;
    }

    @keyframes  modal {
        100% {
            visibility: visible;
            opacity: 1;
        }
    }

    .fondo {
        background-color: rgba(0, 0, 0, 0);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        width: 100%;
        height: 100%;
        opacity: 1 !important;
        visibility: inherit !important;
        z-index: 1 !important;
    }

    /* .fondo::after, .fondo::before{
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(181deg, rgba(9, 48, 112, 0.3) 0%, rgba(255, 255, 255, 0.14) 100%);
        z-index: 99;
    } */


    .cookie-disclaimer {
        background: #000000;
        color: #FFF;
        opacity: 0.8;
        width: 100%;
        bottom: 0;
        left: 0;
        z-index: 200;
        height: 150px;
        position: fixed;
    }

    .cookie-disclaimer .container {
        text-align: center;
        padding-top: 20px;
        padding-bottom: 20px;
    }

    .cookie-disclaimer .cookie-close {
        float: right;
        padding: 10px;
        cursor: pointer;
    }

</style>

<script>
    function showOfs(Element) {
        var x = document.getElementById(Element);
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

</script>
<script>
    $(document).ready(function () {
        var cookie = false;
        var cookieContent = $('.cookie-disclaimer');

        checkCookie();

        if (cookie === true) {
            cookieContent.hide();
        }

        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toGMTString();
            document.cookie = cname + "=" + cvalue + "; " + expires;
        }

        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i].trim();
                if (c.indexOf(name) === 0) return c.substring(name.length, c.length);
            }
            return "";
        }

        function checkCookie() {
            var check = getCookie("acookie");
            if (check !== "") {
                return cookie = true;
            } else {
                return cookie = false; //setCookie("acookie", "accepted", 365);
            }

        }
        $('.accept-cookie').click(function () {
            setCookie("acookie", "accepted", 365);
            cookieContent.hide(500);
        });
    });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('page.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\repoCompletoPertec\pertecPagina\resources\views/index.blade.php ENDPATH**/ ?>