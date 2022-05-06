@extends('includes.main')

@section('content')


<!-- carrusel -->

<section id="hero" class="hero hero-4">

    <!-- START REVOLUTION SLIDER 5.0 -->
    <div class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider" data-version="5.0">
            <ul>

                <!-- slide 1 -->
                <li data-transition="3dcurtain-vertical" data-slotamount="default" data-easein="Power4.easeInOut"
                    data-easeout="Power4.easeInOut" data-masterspeed="1000"
                    style="background-color: rgba(34, 34, 34, 0.3);">
                    <!-- MAIN IMAGE -->
                    <img src="assets/images/sliders/p1.jpg" alt="Background" width="1920" height="1280">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="-120"
                        data-whitespace="nowrap" data-width="['80','70','70','100']"
                        data-height="['80','70','70','100']" data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="3000" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-lineheight="['80','100','100','100']"
                        style="font-family: raleway; text-align:center">
                        <img src="assets/images/sliders/icons/png-transparent-screw-black-hex-screw-nut-bolt-tool-screwdriver-text-black-and-white-thumbnail-removebg-preview.png"
                            alt="hook" />
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption text-uppercase texto-borde" data-x="center" data-hoffset="0" data-y="center"
                        data-voffset="0" data-whitespace="nowrap" data-width="none" data-height="none"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="3500" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-fontsize="['75','17','15','15']"
                        data-lineheight="['100','45','25','25']" data-fontweight="['700','500','600','300']"
                        data-color="#ffc527" style="font-family: montserrat; ">
                        PERTEC S.R.L.
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption text-uppercase texto-borde" data-x="center" data-hoffset="0" data-y="center"
                        data-voffset="80" data-width="none" data-height="none" data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                        data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="4000" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-fontsize="['25','17','17','17']"
                        data-lineheight="['50','26','25','25']" data-fontweight="['700','500','500','500']"
                        data-color="#fff" style="font-family: raleway; text-align:center">
                        © 2022 - 2022 Pertec SA. All Rights Reserved
                    </div>
                </li>

                <!-- slide 2 -->
                <li data-transition="fadefrombottom" data-slotamount="default" data-easein="Power4.easeInOut"
                    data-easeout="Power4.easeInOut" data-masterspeed="2000">
                    <img src="assets/images/sliders/16.png" alt="" width="1920" height="1280">
                    <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="-120"
                        data-width="['80','70','70','100']" data-height="['80','70','70','100']"
                        data-transform_idle="o:1;"
                        data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power3.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-start="1000" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-fontsize="['17','17','15','15']"
                        data-lineheight="['80','100','100','100']" style="font-family: raleway; text-align:center">
                        <img src="assets/images/sliders/icons/png-transparent-nut-bolt-black-silhouette-hexagon-hole-removebg-preview.png"
                            alt="brush" />
                    </div>

                    <div class="tp-caption text-uppercase color-theme texto-borde" data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="0" data-whitespace="nowrap" data-width="none" data-height="none"
                        data-transform_idle="o:1;"
                        data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="2000" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-fontsize="['75','17','15','15']"
                        data-lineheight="['100','45','25','25']" data-fontweight="['700','500','600','300']"
                        data-color="#ffc527" style="font-family: montserrat; ">
                        Maestros en Pernos
                    </div>

                    <div class="tp-caption text-uppercase texto-borde" data-x="center" data-hoffset="0" data-y="center"
                        data-voffset="80" data-width="none" data-height="none" data-transform_idle="o:1;"
                        data-transform_in="x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="3000" data-splitin="none"
                        data-splitout="none" data-responsive_offset="on" data-fontsize="['25','17','17','17']"
                        data-lineheight="['26','26','25','25']" data-fontweight="['700','500','500','500']"
                        data-color="#fff" style="font-family: raleway; text-align:center">
                        Calidad Garantizada
                    </div>
                </li>

                <li data-index='rs-367' data-transition='scaledownfromtop' data-slotamount='default'
                    data-easein='default' data-easeout='default' data-masterspeed='default'>
                    <img src="assets/images/sliders/12.png" alt="" width="1920" height="1280">
                    <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="-120"
                        data-width="['80','70','70','100']" data-height="['80','70','70','100']"
                        data-transform_idle="o:1;"
                        data-transform_in="y:-30px;rX:70deg;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="1000"
                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                        data-lineheight="['80','100','100','100']" style="font-family: raleway; text-align:center">
                        <img src="assets/images/sliders/icons/png-transparent-screw-bolt-computer-icons-nut-screw-cdr-white-technic-removebg-preview.png"
                            alt="shovel" />
                    </div>

                    <div class="tp-caption text-uppercase color-theme texto-borde" data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="0" data-whitespace="nowrap"
                        data-width="['auto','auto','auto','auto']" data-height="['auto','auto','auto','auto']"
                        data-transform_idle="o:1;"
                        data-transform_in="x:[-105%];z:0;rX:0deg;rY:0deg;rZ:-90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                        data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-start="1500" data-splitin="chars"
                        data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05"
                        data-fontsize="['75','17','15','15']" data-lineheight="['100','45','25','25']"
                        data-fontweight="['700','500','600','300']" data-color="#ffc527"
                        style="font-family: montserrat; ">
                        Nosotros Innovamos
                    </div>

                    <div class="tp-caption text-uppercase texto-borde" data-x="center" data-hoffset="0" data-y="center"
                        data-voffset="80" data-width="none" data-height="none" data-transform_idle="o:1;"
                        data-transform_in="x:-50px;skX:100px;opacity:0;s:2000;e:Power4.easeInOut;"
                        data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-start="2500"
                        data-splitin="none" data-splitout="none" data-responsive_offset="on"
                        data-fontsize="['25','17','17','17']" data-lineheight="['26','26','25','25']"
                        data-fontweight="['700','500','500','500']" data-color="#fff"
                        style="font-family: raleway ;text-align:center">
                        Materiales de Sujeción
                    </div>
                </li>
            </ul>
        </div>
        <!-- END REVOLUTION SLIDER -->

        <!-- Widget Bottom -->
        <div class="container widget-bottom widgets-contact hidden-xs">
            <div class="row">
                <ul class="list-inline">

                    <li class="col-sm-4 col-md-3 col-md-offset-3 widget">
                        <div class="widget-contact-icon pull-left">
                            <i class="lnr lnr-envelope"></i>
                        </div>
                        <div class="widget-contact-info">
                            <p class="text-capitalize">Nuestro Correo</p>
                            <p class="font-heading text-white">servicio.cliente@pertec.com.bo</p>
                        </div>
                    </li>
                    <!-- .widget end -->


                    <li class="col-sm-4 col-md-3 widget">
                        <div class="widget-contact-icon pull-left">
                            <i class="lnr lnr-phone"></i>
                        </div>
                        <div class="widget-contact-info">
                            <p class="text-capitalize">Llámanos</p>
                            <p class="text-capitalize font-heading text-white">(4) 4111632</p>
                        </div>
                    </li>
                    <!-- .widget end -->


                    <li class="col-sm-4 col-md-3 widget">
                        <div class="widget-contact-icon pull-left">
                            <i class="lnr lnr-map-marker"></i>
                        </div>
                        <div class="widget-contact-info">
                            <p class="text-capitalize">Encuéntranos</p>
                            <p class="text-capitalize font-heading text-white">No. 4581 Arocagua</p>
                        </div>
                    </li>
                    <!-- .widget end -->
                    <!-- <li class="col-sm-4 col-md-3 widget">
                        <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#model-quote"
                            id="modelquote">Request A Quote</a>

                        <div class="modal fade model-quote" id="model-quote" tabindex="-1" role="dialog"
                            aria-labelledby="modelquote">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <div class="model-icon">
                                            <i class="lnr lnr-apartment"></i>
                                        </div>
                                        <div class="model-divider">
                                            <div class="model-title">
                                                <p>Don’t Hesitate To ask</p>
                                                <h6>rquest a quote</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-body">
                                        <form id="pop-quote-form" action="assets/php/sendpopquote.php" method="post">
                                            <input type="text" class="form-control" name="quote-name" id="name"
                                                placeholder="Your Name" required />
                                            <input type="email" class="form-control" name="quote-email" id="email"
                                                placeholder="Email" required />
                                            <input type="text" class="form-control" name="quote-telephone"
                                                id="telephone" placeholder="Telephone" required />
                                            <textarea class="form-control" name="quote-message" id="quote"
                                                placeholder="Quote Details" rows="2" required></textarea>
                                            <button type="submit" class="btn btn-primary btn-black btn-block">Submit
                                                Inquiry</button>
                                            <div id="pop-quote-result" class="mt-xs">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li> -->
                </ul>
            </div>
        </div>
        <!-- .container end -->
    </div>
    <!-- END OF SLIDER WRAPPER -->
</section>


<!-- acerca de nosotros -->

<section id="shotcode-1" class="shotcode-1 about-home-2 text-center-xs text-center-sm"  style="background-color: white;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="heading heading-4">
                            <div class="heading-bg heading-right">
                                <p class="mb-0">Maestros en Pernos</p>
                                <h2>Nuestra Historia</h2>
                            </div>
                        </div>
                        <!-- .heading end -->
                    </div>

                </div>
            </div>
            <!-- .col-md-12 end -->
            <div class="col-xs-12 col-sm-12 col-md-6">
                <h3 class="color-heading mb-md" style="text-align: justify;">Desarrollamos oportunidades mutuas de servicio y beneficio con nuestros
                    proveedores, mediante el cumplimiento de estrictas normas de calidad.</h3>
                <p style="text-align: justify;">Somos una empresa dedicada a satisfacer todas las necesidades de Elementos de Sujeción de los sectores
                    de construcción, industria, agroindustria, minería, metalmecánica y del parque automotriz en general, a través de la importación y
                    comercialización directa.</p>
                    <ul style="text-align: justify;" class="list-unstyled">
                        <li>
                            <p><i class="fa fa-check ml-xs"></i> Nuestra vocación de servicio es el motor que impulsa y dirige nuestras acciones.</p>
                        </li>
                        <li>
                            <p><i class="fa fa-check ml-xs"></i> Brindamos un excelente servicio a los clientes externos e internos, en procura de
                            maximizar la satisfacción de sus necesidades y deseos.</p>
                        </li>
                        <li>
                            <p><i class="fa fa-check ml-xs"></i> Somos personas comprometidas con nuestra Empresa y trabajamos en equipo.</p>
                        </li>
                    </ul>
                <p style="text-align: justify;">Importamos desde Europa, el Asia, Norte y Sudamérica el 97 % de los productos que comercializamos.
                    Nuestros proveedores, son todas empresas líderes del rubro con certificaciones ISO 9000, QS 9000, etc., que manufacturan sus productos
                    cumpliendo las más estrictas normas de calidad y exportan más de la mitad de su producción a Norteamérica, Europa y Japón. </p>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6">
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
                            <div class="panel-body" style="text-align: justify;">
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



{{-- Tiendas y Almacenes --}}


<section>
    <div class="container">
        <div class="row">


            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="heading heading-4">
                            <div class="heading-bg heading-right">
                                <p class="mb-0">Maestros en Pernos</p>
                                <h2>Nuestras Sucursales</h2>
                            </div>
                        </div>
                        <!-- .heading end -->
                    </div>

                </div>
            </div>


            <!-- Entry Sucursal La Paz -->
            <div class="col-xs-12 col-sm-6 col-md-4 entry">
                <div class="entry-img">
                    <a class="img-popup">
                        <img src="assets/images/blog/grid/1.jpg" alt="title" />
                    </a>
                </div><br>
                <div class="entry-title">
                    <h3>
                        <a href="{{ route('store', ['id'=>1]) }}">En La Paz</a>
                    </h3>
                </div>
                <!-- .entry-title end -->
                <div class="entry-content">
                    <p>
                        <h5>Dirección: Villa Bolívar "B" Calle 106 No. 501</h5>
                    </p>
                    <p>
                        <h5>Telf: 2822336</h5>
                    </p>
                    <p>
                        <h5>Fax: (2) 2820619</h5>
                    </p>
                    <p>
                        <h5>Email: servicio.cliente@pertec.com.bo</h5>
                    </p>

                    <a class="entry-more" href="{{ route('store', ['id'=>1]) }}"><i class="fa fa-plus"></i>
                        <span>Más Información</span>
                    </a>
                </div>
                <!-- .entry-content end -->
            </div>
            <!-- .entry end -->

            <!-- Entry Sucursal Cochabamba -->
            <div class="col-xs-12 col-sm-6 col-md-4 entry">
                <div class="entry-img">
                    <a class="img-popup">
                        <img src="assets/images/blog/grid/1.jpg" alt="title" />
                    </a>
                </div><br>
                <div class="entry-title">
                    <h3>
                        <a href="{{ route('store', ['id'=>2]) }}">En Cochabamba</a>
                    </h3>
                </div>
                <!-- .entry-title end -->
                <div class="entry-content">
                    <p>
                        <h5>Dirección: Calle Innominada No. 4581 (Arocagua)</h5>
                    </p>
                    <p>
                        <h5>Telf: 4716000</h5>
                    </p>
                    <p>
                        <h5>Fax: (4) 4111632</h5>
                    </p>
                    <p>
                        <h5>Email: servicio.cliente@pertec.com.bo</h5>
                    </p>

                    <a class="entry-more" href="{{ route('store', ['id'=>2]) }}"><i class="fa fa-plus"></i>
                        <span>Más Información</span>
                    </a>
                </div>
                <!-- .entry-content end -->
            </div>
            <!-- .entry end -->


            <!-- Entry Sucursal Santa Cruz -->
            <div class="col-xs-12 col-sm-6 col-md-4 entry">
                <div class="entry-img">
                    <a class="img-popup">
                        <img src="assets/images/blog/grid/1.jpg" alt="title" />
                    </a>
                </div><br>
                <div class="entry-title">
                    <h3>
                        <a href="{{ route('store', ['id'=>3]) }}">En Santa Cruz</a>
                    </h3>
                </div>
                <!-- .entry-title end -->
                <div class="entry-content">
                    <p>
                        <h5>Dirección: Calle Taitetú No. 2680</h5>
                    </p>
                    <p>
                        <h5>Telf: 3470113</h5>
                    </p>
                    <p>
                        <h5>Fax: (3) 3111228</h5>
                    </p>
                    <p>
                        <h5>Email: servicio.cliente@pertec.com.bo</h5>
                    </p>

                    <a class="entry-more" href="{{ route('store', ['id'=>3]) }}"><i class="fa fa-plus"></i>
                        <span>Más Información</span>
                    </a>
                </div>
                <!-- .entry-content end -->
            </div>
            <!-- .entry end -->

        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>


<!-- productos -->

<section class="shop pb-100">
    <div class="container">
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
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 shop-content">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <!-- <li data-target="#carousel-example-generic" data-slide-to="2"></li> -->
                    </ol>
                    <div class="carousel-inner content" role="listbox">

                        <div class="item active">
                            <div class="row">
                                <!-- product #1 -->
                                @foreach ($bMasVendidos as $mv)
                                <div class="col-xs-12 col-sm-6 col-md-3 product-item  clearfix">
                                    <div class="product-img">
                                        <img src='http://192.168.31.242:5000/{{ $mv["imagen"] }}' alt="product"
                                            style="height:200px;">
                                        <div class="product-hover">
                                            <div class="product-cart">
                                                <a class="btn btn-secondary btn-block"
                                                    href="{{ route('oneProduc', ['id'=>base64_encode($mv['id'])]) }}">Detalles</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- .product-img end -->
                                    <div class="product-hover">
                                        <div class="product-cart">
                                            <a class="btn btn-secondary btn-block"
                                                href="{{ route('oneProduc', ['id'=>base64_encode($mv['id'])]) }}">Detalles</a>
                                        </div>
                                    </div><br>
                                    <div class="product-bio">
                                        <h4>
                                            <a href="#">{{ $mv["nombre_producto"] }}</a>
                                        </h4>
                                        <p class="product-price">{{ $mv["denominacion"] }}</p>
                                    </div>

                                    <!-- .product-bio end -->
                                </div>
                                @endforeach
                            </div>
                            <!-- .row end -->
                        </div>


                        <div class="item">
                            <div class="row">
                                <!-- product #1 -->
                                @foreach ($bMenosVendidos as $menV)
                                <div class="col-xs-12 col-sm-6 col-md-3 product-item  clearfix">
                                    <div class="product-img">
                                        <img src='http://192.168.31.242:5000/{{ $menV["imagen"] }}' alt="product"
                                            style="height:200px;">
                                        <div class="product-hover">
                                            <div class="product-cart">
                                                <a class="btn btn-secondary btn-block"
                                                    href="{{ route('oneProduc', ['id'=>base64_encode($menV['id'])]) }}">Detalles</a>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- .product-img end -->
                                    <div class="product-hover">
                                        <div class="product-cart">
                                            <a class="btn btn-secondary btn-block"
                                                href="{{ route('oneProduc', ['id'=>base64_encode($menV['id'])]) }}">Detalles</a>
                                        </div>
                                    </div><br>
                                    <div class="product-bio">
                                        <h4>
                                            <a href="#">{{ $menV["nombre_producto"] }}</a>
                                        </h4>
                                        <p class="product-price">{{ $menV["denominacion"] }}</p>
                                    </div>

                                    <!-- .product-bio end -->
                                </div>
                                @endforeach


                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button"
                            data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button"
                            data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>


                    </div>
                </div>



            </div>
            <!-- .shop-content end -->
        </div>
        <!-- .row end -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 product-item">
                <div class="product-cart">
                    <a class="btn btn-secondary btn-block" style="width: auto;"
                        href="/fullProducts">Ver más<i class="fa fa-plus ml-xs"></i>
                    </a>
                </div>
            </div>
            <!-- .col-md-12 end -->
        </div>
    </div>
    <!-- .container end -->
</section>



<!-- Productos Promocion -->
<section id="cta-6" class="bg-overlay bg-overlay-dark cta cta-6" style="background-color:#FFFE04; border-width: 3px; border-style: solid;">
	<div class="container">
		<div class="row">
            <div class="col-md-1 hidden-xs hidden-sm">
                <i class="fa fa-star-o" aria-hidden="true" style="font-size: 14rem; position: absolute; left: -75%; top: 20px;"></i>
            </div>
			<div class="col-xs-12 col-sm-12 col-md-7">

				<p class="text-capitalize mb-0 color-black">Conoce nuestras actuales promociones</p>
				<h2 class="mb-xs color-black">¡ Productos</h2>
                <h2 class="mb-xs color-black">en Promoción !</h2>
				<a class="btn btn-secondary btn-white btn-modif-white" href="/fullProdPromo">Ver Promociones</a>
			</div>
			<!-- .col-md-8 end -->
			<div class="col-md-4 hidden-xs hidden-sm">
				<div class="cta-img" style="top: -95px;">
					<img src="assets/images/call/Mi proyecto.png" alt="call to action"/>
				</div>
			</div>
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>
<!-- #cta-6 end -->
<div class="clearfix mb-150">
</div>



<!-- Productos Novedosos -->
<section id="cta-6" class="bg-overlay bg-overlay-dark cta cta-6" style="background-color:#5cb85c; border-width: 3px; border-style: solid;">
	<div class="container">
		<div class="row">
			<div class="col-md-5 hidden-xs hidden-sm">
				<div class="cta-img" style="top: -115px; padding-right: 110px;">
					<img src="assets/images/call/5.png" alt="call to action"/>
				</div>
			</div>
            <div class="col-xs-12 col-sm-12 col-md-7">
				<p class="text-capitalize mb-0 color-black">Conoce nuestras novedades</p>
				<h2 class="mb-xs color-black">¡ Productos</h2>
                <h2 class="mb-xs color-black">en novedad !</h2>
				<a class="btn btn-secondary btn-white btn-modif-white" href="/fullProdNoved">Ver Novedades</a>
                <i class="fa fa-diamond hidden-xs hidden-sm" aria-hidden="true" style="font-size: 14rem; position: absolute; top: 40px; right: -25px;"></i>
			</div>
		</div>
	</div>
</section>
<!-- #cta-6 end -->
<div class="clearfix mb-150">
</div>

<!-- call center -->
<section id="shortcode-3" class="shortcode-3 section-img">
    <div class="container-fluid">
        <div class="row" style="background: #FFFE04; border-width:3px; border-style:solid;">
            <div class="col-md-6 col-content">
                <div class="heading heading-4 mb-60">
                    <div class="heading-bg heading-right">
                        <p class="mb-0">Maestros en Pernos</p>
                        <h2>Nuestro Call Center</h2>
                    </div>
                </div>
                <!-- .heading end -->
                <div class="row pr-50">
                    <div class="col-xs-12 col-sm-12 col-md-12 feature feature-1 mb-12 mb-12-xs"
                        style="padding-left: 5%">
                        <h3 class="text-uppercase">Diponibles en todo momento</h3><br>
                        <p>
                            <h4>Telf: 4716000 (Líneas Rotativas)</h4>
                        </p>
                        <p>
                            <h4>Celular: </h4>
                        </p>
                        <p>
                            <h4>Fax: (4) 4111632</h4>
                        </p>
                        <p>
                            <h4>Email: servicio.cliente@pertec.com.bo</h4>
                        </p>
                    </div>
                </div>
                <!-- .row end -->
            </div>
            <!-- .col-md-6 end -->
            <div class="col-md-6 col-img"
                style="background: rgb(255,254,4);
                background: linear-gradient(90deg, rgba(255,254,4,0.8673844537815126) 10%, rgba(40,50,161,0.9822303921568627) 29%);">
                <div class="col-bg">
                    <img src="assets/images/features/callCenter1.jpg" width="100%" alt="Background" />
                </div>
            </div>
            <!-- .col-md-6 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<div class="clearfix mb-150">
</div>

{{-- prueba carrusel productos --}}






@endsection
