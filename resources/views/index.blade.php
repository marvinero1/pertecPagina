@extends('includes.main')

@section('content')
<link href="http://fonts.cdnfonts.com/css/franklin-gothic-demi-2" rel="stylesheet">

<!-- carrusel -->

<section id="hero" class="hero hero-4">

    <!-- START REVOLUTION SLIDER 5.0 -->
    <div class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider" data-version="5.0">
            <ul>
                @foreach ($b1 as $bcarousel)
                    <li data-transition="3dcurtain-vertical" data-slotamount="default" data-easein="Power4.easeInOut"
                    data-easeout="Power4.easeInOut" data-masterspeed="1000"
                    style="background-color: rgba(34, 34, 34, 0.3);">
                    <!-- MAIN IMAGE -->
                        <img src="http://192.168.31.242:5000/{{ $bcarousel['imagen'] }}" alt="Background" width="1920" height="1280">
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption" data-x="center" data-hoffset="0" data-y="center" data-voffset="-120"
                            data-whitespace="nowrap" data-width="['150','70','70','100']"
                            data-height="['150','70','70','100']" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="3000" data-splitin="none"
                            data-splitout="none" data-responsive_offset="on"
                            style="font-family: 'Franklin Gothic Demi', sans-serif; text-align:center;  min-height: 110px !important; min-width: 110px !important;
                            max-height: 110px !important; max-width: 120px !important;">
                            <img src="http://192.168.31.242:5000/{{ $bcarousel['imagen_icono'] }}"
                                alt="hook"/>
                        </div>


                        <!-- LAYER NR. 2 -->
                        <h1 class="tp-caption text-uppercase" data-x="center" data-hoffset="0" data-y="center"
                            data-voffset="0" data-whitespace="nowrap" data-width="none" data-height="none"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="3500" data-splitin="none"
                            data-splitout="none" data-responsive_offset="on" data-fontsize="['75','17','15','15']"
                            data-lineheight="['100','45','25','25']"
                            data-color="#ffc527" style="font-family: 'Franklin Gothic Demi', sans-serif;">
                            {{ $bcarousel['titulo'] }}
                        </h1>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption text-uppercase" data-x="center" data-hoffset="0" data-y="center"
                            data-voffset="80" data-width="none" data-height="none" data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="4000" data-splitin="none"
                            data-splitout="none" data-responsive_offset="on" data-fontsize="['50','17','17','17']"
                            data-lineheight="['50','26','25','25']"
                            data-color="#fff" style="font-family: 'Franklin Gothic Demi', sans-serif;">
                            {{ $bcarousel['sub_titulo'] }}
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div style="width:100%; height: 800px; position: relative; margin-top: -800px;
        background: rgba(9, 48, 112, 0.2) !important; background: linear-gradient(183deg, rgba(9,48,112,1) 0%, rgba(255,255,255,1) 100%);">
    </div>
    <!-- END OF SLIDER WRAPPER -->
</section>


<!-- acerca de nosotros -->

<section id="sectionAboutUs" class="shotcode-1 about-home-2 text-center-xs text-center-sm" style="background-color: white;">
    <div class="container">
        <div class="row slide">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="heading heading-4">
                            <div class="heading-bg heading-right">
                                <p class="mb-0">¿Quiénes somos?</p>
                                <h2>Nuestra Historia</h2>
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
                        <p><i class="fa fa-check ml-xs" style="color: #FBD800;"></i> Nuestra vocación de servicio es el motor que impulsa y
                            dirige nuestras acciones.</p>
                    </li>
                    <li>
                        <p><i class="fa fa-check ml-xs" style="color: #FBD800;"></i> Brindamos un excelente servicio a los clientes externos e
                            internos, en procura de
                            maximizar la satisfacción de sus necesidades y deseos.</p>
                    </li>
                    <li>
                        <p><i class="fa fa-check ml-xs" style="color: #FBD800;"></i> Somos personas comprometidas con nuestra Empresa y
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
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 shop-content">
                <div class="row">
                    <div class="heading">
                        <div class="heading-bg heading-right">
                            <p class="mb-0">Catálogo</p>
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
                    <div class="carousel-inner content" role="listbox">
                        <div class="item active">
                            <div class="row">
                                <!-- product #1 -->
                                @foreach ($bMasVendidos as $mv)
                                <div class="col-xs-12 col-sm-6 col-md-3 product-item  clearfix">
                                    <div class="product-img">
                                        <img src='http://192.168.31.242:5000/{{ $mv["imagen"] }}' alt="product"
                                            style="height:300px;">
                                        <div class="product-hover">
                                            <div class="product-cart">
                                                <a class="btn btn-secondary btn-block a-card"
                                                    href="{{ route('oneProduc', ['id'=>base64_encode($mv['id'])]) }}">Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-bio">
                                        <h4>
                                            <a href="#">{{ $mv["nombre_producto"] }}</a>
                                        </h4>
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
                                            style="height:300px;">
                                        <div class="product-hover">
                                            <div class="product-cart">
                                                <a class="btn btn-secondary btn-block"
                                                    href="{{ route('oneProduc', ['id'=>base64_encode($menV['id'])]) }}">Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-bio">
                                        <h4>
                                            <a href="#">{{ $menV["nombre_producto"] }}</a>
                                        </h4>
                                    </div>

                                    <!-- .product-bio end -->
                                </div>
                                @endforeach


                            </div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <div style="width: 50px; height: 49px; position: absolute; top: 50%; left: 50%; background-color: rgb(206 206 206 / 80%);">
                                <span class="glyphicon glyphicon-chevron-left" style="margin-top: -16px;" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </div>

                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button"
                            data-slide="next">
                            <div style="width: 50px; height: 49px; position: absolute; top: 50%; right: 50%; background-color: rgb(206 206 206 / 80%);">
                                <span class="glyphicon glyphicon-chevron-right" style="margin-top: -16px;"aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </div>

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
                    <a class="btn btn-secondary btn-block btn-gereric" style="width: 240px !important;" href="/fullProducts">Ver más productos<i
                            class="fa fa-plus ml-xs"></i>
                    </a>
                </div>
            </div>
            <!-- .col-md-12 end -->
        </div>
    </div>
    <!-- .container end -->
</section>





{{-- Oficinas y tiendas --}}


<section id="sectionStores">
    <div class="container tdn">

        <!-- oficinas nivel nacional-->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="heading heading-4">
                            <div class="heading-bg heading-right">
                                <p class="mb-0">¿Dónde nos encontramos?</p>
                                <h2>Nuestras oficinas y tiendas</h2>
                            </div>
                        </div>
                        <!-- .heading end -->
                    </div>

                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 product-item" style="text-align: left;">
                        <div class="product-cart heading-right">
                            <a class="btn btn-secondary btn-block btn-gereric" style="width: 300px !important;"
                                onclick="showOfs('of-centrals')">Oficinas a nivel nacional<i
                                class="fa fa-plus ml-xs"></i>
                            </a>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                </div>
            </div>
        </div>
        <div class="row" id="of-centrals" style="display: none;">
            <!-- Entry Sucursal Cochabamba -->
            <div class="col-xs-12 col-sm-6 col-md-4 entry">
                <div class="entry-img">
                    <a class="img-popup">
                        <img src="assets/images/blog/grid/1.jpg" alt="title" />
                    </a>
                </div><br>
                <div class="entry-title">
                    <h3>
                        <a href="{{ route('store', ['id'=>2]) }}">Oficina Cochabamba</a>
                    </h3>
                </div>
                <!-- .entry-title end -->
                <div class="entry-content conten-stores">
                    <h5>Dirección: Calle Innominada No. 4581 (Arocagua)</h5>
                    <h5>Telf: (4) 4716000 (Líneas Rotativas)</h5>
                    <h5>Fax: (4) 4111632</h5>
                    <h5>Email: servicio.cliente@pertec.com.bo</h5>
                    <a class="entry-more" href="{{ route('store', ['id'=>2]) }}"><i class="fa fa-plus"></i>
                        <span>Más Información</span>
                    </a>
                </div>
                <!-- .entry-content end -->
            </div>
            <!-- .entry end -->


            <!-- Entry Sucursal La Paz -->
            <div class="col-xs-12 col-sm-6 col-md-4 entry">
                <div class="entry-img">
                    <a class="img-popup">
                        <img src="assets/images/blog/grid/1.jpg" alt="title" />
                    </a>
                </div><br>
                <div class="entry-title">
                    <h3>
                        <a href="{{ route('store', ['id'=>1]) }}">Oficina La Paz</a>
                    </h3>
                </div>
                <!-- .entry-title end -->
                <div class="entry-content conten-stores">
                    <h5>Dirección: Villa Bolívar "B" Calle 106 No. 501</h5>
                    <h5>Telf: (2) 2822336</h5>
                    <h5>Fax: (2) 2820619</h5>
                    <h5>Email: servicio.cliente@pertec.com.bo</h5>
                    <a class="entry-more" href="{{ route('store', ['id'=>1]) }}"><i class="fa fa-plus"></i>
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
                        <a href="{{ route('store', ['id'=>3]) }}">Oficina Santa Cruz</a>
                    </h3>
                </div>
                <!-- .entry-title end -->
                <div class="entry-content conten-stores">
                    <h5>Dirección: Calle Taitetú No. 2680</h5>
                    <h5>Telf: (3) 3470113</h5>
                    <h5>Fax: (3) 3111228</h5>
                    <h5>Email: servicio.cliente@pertec.com.bo</h5>
                    <a class="entry-more" href="{{ route('store', ['id'=>3]) }}"><i class="fa fa-plus"></i>
                        <span>Más Información</span>
                    </a>
                </div>
                <!-- .entry-content end -->
            </div>
            <!-- .entry end -->
        </div>


        <!-- tiendas cbba -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 product-item" style="text-align: left;">
                        <div class="product-cart heading-right">
                            <a class="btn btn-secondary btn-block btn-gereric" style="width: 300px !important;"
                                onclick="showOfs('storeCbba')">Tiendas Cochabamba<i
                                class="fa fa-plus ml-xs"></i>
                            </a>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                </div>
            </div>
        </div>
        <div class="row" id="storeCbba" style="display: none;">
            @foreach ($tcbba as $tcb)
            <div class="col-xs-12 col-sm-6 col-md-4 entry">
                <div class="entry-img">
                    <a class="img-popup">
                        <img src="http://192.168.31.242:5000/{{ $tcb["imagen"] }}" alt="title" />
                    </a>
                </div><br>
                <div class="entry-title">
                    <h3>
                        <a href="{{ route('store', ['id'=>2]) }}">Tienda {{ $tcb["nombre_tienda"] }}</a>
                    </h3>
                </div>
                <!-- .entry-title end -->
                <div class="entry-content conten-stores">
                    <h5>Dirección: {{ $tcb["direccion"] }}</h5>
                    <h5>Telf: {{ $tcb["telefono"] }}</h5>
                    <a class="entry-more" href="{{ route('store', ['id'=>2]) }}"><i class="fa fa-plus"></i>
                        <span>Más Información</span>
                    </a>
                </div>
                <!-- .entry-content end -->
            </div>
            @endforeach

        </div>


        <!-- tiendas la paz-->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 product-item" style="text-align: left;">
                        <div class="product-cart heading-right">
                            <a class="btn btn-secondary btn-block btn-gereric" style="width: 300px !important;"
                                onclick="showOfs('storeLaPaz')">Tiendas La Paz<i
                                class="fa fa-plus ml-xs"></i>
                            </a>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                </div>
            </div>
        </div>
        <div class="row" id="storeLaPaz" style="display: none;">
            @foreach ($tlapz as $tlz)
            <div class="col-xs-12 col-sm-6 col-md-4 entry">
                <div class="entry-img">
                    <a class="img-popup">
                        <img src="http://192.168.31.242:5000/{{ $tlz["imagen"] }}" alt="title" />
                    </a>
                </div><br>
                <div class="entry-title">
                    <h3>
                        <a href="{{ route('store', ['id'=>2]) }}">Tienda {{ $tlz["nombre_tienda"] }}</a>
                    </h3>
                </div>
                <!-- .entry-title end -->
                <div class="entry-content conten-stores">
                    <h5>Dirección: {{ $tlz["direccion"] }}</h5>
                    <h5>Telf: {{ $tlz["telefono"] }}</h5>
                    <a class="entry-more" href="{{ route('store', ['id'=>2]) }}"><i class="fa fa-plus"></i>
                        <span>Más Información</span>
                    </a>
                </div>
                <!-- .entry-content end -->
            </div>
            @endforeach
        </div>


        <!-- tiendas santa cruz -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 product-item" style="text-align: left;">
                        <div class="product-cart heading-right">
                            <a class="btn btn-secondary btn-block btn-gereric" style="width: 300px !important;"
                                onclick="showOfs('storeSantaCruz')">Tiendas Santa Cruz<i
                                class="fa fa-plus ml-xs"></i>
                            </a>
                        </div>
                    </div>
                    <!-- .col-md-12 end -->
                </div>
            </div>
        </div>
        <div class="row" id="storeSantaCruz" style="display: none;">
            @foreach ($tstcz as $tsz)
            <div class="col-xs-12 col-sm-6 col-md-4 entry">
                <div class="entry-img">
                    <a class="img-popup">
                        <img src="http://192.168.31.242:5000/{{ $tsz["imagen"] }}" alt="title" />
                    </a>
                </div><br>
                <div class="entry-title">
                    <h3>
                        <a href="{{ route('store', ['id'=>2]) }}">Tienda {{ $tsz["nombre_tienda"] }}</a>
                    </h3>
                </div>
                <!-- .entry-title end -->
                <div class="entry-content conten-stores">
                    <h5>Dirección: {{ $tsz["direccion"] }}</h5>
                    <h5>Telf: {{ $tsz["telefono"] }}</h5>
                    <a class="entry-more" href="{{ route('store', ['id'=>2]) }}"><i class="fa fa-plus"></i>
                        <span>Más Información</span>
                    </a>
                </div>
                <!-- .entry-content end -->
            </div>
            @endforeach
        </div>
    </div>
    <!-- .container end -->
</section>




{{--
<!-- Productos Promocion -->
<section id="cta-6" class="bg-overlay bg-overlay-dark cta cta-6"
    style="background-color:#FFFE04; border-width: 3px; border-style: solid;">
    <div class="container">
        <div class="row">
            <div class="col-md-1 hidden-xs hidden-sm">
                <i class="fa fa-star-o" aria-hidden="true"
                    style="font-size: 14rem; position: absolute; left: -75%; top: 20px;"></i>
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
                    <img src="assets/images/call/Mi proyecto.png" alt="call to action" />
                </div>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>
<!-- #cta-6 end -->
<div class="clearfix mb-150">
</div> --}}


<!-- Productos Promocion -->
{{-- <section id="cta-6" class="bg-overlay bg-overlay-dark cta cta-6"
    style="background-color:#FFFE04; border-width: 3px; border-style: solid;">
    <div class="container">
        <div class="row">
            <div class="col-md-1 hidden-xs hidden-sm" style="text-align: left;">
                <i class="fa fa-star-o" aria-hidden="true"
                    style="font-size: 14rem; margin-left: -80px;"></i>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7">
                <p class="text-capitalize mb-0 color-black">Conoce nuestras actuales promociones</p>
                <h2 class="mb-xs color-black">¡ Productos</h2>
                <h2 class="mb-xs color-black">en Promoción !</h2>
                <a class="btn btn-secondary btn-white btn-modif-white" href="/fullProdPromo">Ver Promociones</a>
            </div>
            <!-- .col-md-8 end -->
            <div class="col-md-4 hidden-xs hidden-sm" style="text-align: left;">
                <div class="cta-img" style="top: -95px;">
                    <img src="assets/images/call/Mi proyecto.png" alt="call to action" />
                </div>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section> --}}


{{--
<!-- Productos Novedosos -->
<section id="cta-6" class="bg-overlay bg-overlay-dark cta cta-6"
    style="background-color:#5cb85c; border-width: 3px; border-style: solid;">
    <div class="container">
        <div class="row">
            <div class="col-md-3 hidden-xs hidden-sm" style="text-align: right;">
                <div class="cta-img" style="top: -115px;">
                    <img src="assets/images/call/5.png" alt="call to action" />
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7">
                <p class="text-capitalize mb-0 color-black">Conoce nuestras novedades</p>
                <h2 class="mb-xs color-black">¡ Productos</h2>
                <h2 class="mb-xs color-black">en novedad !</h2>
                <a class="btn btn-secondary btn-white btn-modif-white" href="/fullProdNoved">Ver Novedades</a>
            </div>
            <div class="col-md-2 hidden-xs hidden-sm" style="text-align: right;">
                <div class="cta-img" style="top: -115px;">
                    <i class="fa fa-diamond hidden-xs hidden-sm" aria-hidden="true"
                    style="font-size: 14rem; "></i>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- #cta-6 end -->
<div class="clearfix mb-150">
</div> --}}





<!-- Productos Novedosos -->
{{-- <section id="cta-6" class="bg-overlay bg-overlay-dark cta cta-6"
    style="background-color:#5cb85c; border-width: 3px; border-style: solid;">
    <div class="container">
        <div class="row">
            <div class="col-md-5 hidden-xs hidden-sm">
                <div class="cta-img" style="top: -115px; padding-right: 110px;">
                    <img src="assets/images/call/5.png" alt="call to action" />
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7">
                <p class="text-capitalize mb-0 color-black">Conoce nuestras novedades</p>
                <h2 class="mb-xs color-black">¡ Productos</h2>
                <h2 class="mb-xs color-black">en novedad !</h2>
                <a class="btn btn-secondary btn-white btn-modif-white" href="/fullProdNoved">Ver Novedades</a>
                <i class="fa fa-diamond hidden-xs hidden-sm" aria-hidden="true"
                    style="font-size: 14rem; position: absolute; top: 40px; right: -25px;"></i>
            </div>
        </div>
    </div>
</section> --}}

{{-- nustros clientes --}}

{{-- <section id="clients" class="shortcode-9">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="heading heading-2 text-center">
					<div class="heading-bg">
						<p class="mb-0">Maestros en Pernos</p>
						<h2>Nuestros Clientes</h2>
					</div>
				</div>
				<!-- .heading end -->
			</div>
			<!-- .col-md-12 end -->
		</div>
		<!-- .row end -->
		<div class="row">
			<!-- Client Item -->
			<div class="col-xs-12 col-sm-4 col-md-2">
				<div class="brand">
					<img class="img-responsive center-block" src="assets/images/clients/1.png" alt="brand">
				</div>
			</div>
			<!-- .col-md-2 end -->

			<!-- Client Item -->
			<div class="col-xs-12 col-sm-4 col-md-2">
				<div class="brand">
					<img class="img-responsive center-block" src="assets/images/clients/2.png" alt="brand">
				</div>
			</div>
			<!-- .col-md-2 end -->

			<!-- Client Item -->
			<div class="col-xs-12 col-sm-4 col-md-2">
				<div class="brand">
					<img class="img-responsive center-block" src="assets/images/clients/3.png" alt="brand">
				</div>
			</div>
			<!-- .col-md-2 end -->

			<!-- Client Item -->
			<div class="col-xs-12 col-sm-4 col-md-2">
				<div class="brand">
					<img class="img-responsive center-block" src="assets/images/clients/4.png" alt="brand">
				</div>
			</div>
			<!-- .col-md-2 end -->

			<!-- Client Item -->
			<div class="col-xs-12 col-sm-4 col-md-2">
				<div class="brand">
					<img class="img-responsive center-block" src="assets/images/clients/5.png" alt="brand">
				</div>
			</div>
			<!-- .col-md-2 end -->

			<!-- Client Item -->
			<div class="col-xs-12 col-sm-4 col-md-2">
				<div class="brand last">
					<img class="img-responsive center-block" src="assets/images/clients/6.png" alt="brand">
				</div>
			</div>
			<!-- .col-md-2 end -->
		</div>
		<!-- .row End -->
	</div>
	<!-- .container end -->
</section> --}}





{{-- pedidos section --}}

{{-- <section id="service-2" class="service service-2 bg-gray pb-0">
    <div class="container-fluid bg-theme">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row" style="background-color: #FFFE04;">

                    <div class="col-xs-12 col-sm-6 col-md-6 col-img col-bg" style="background-image: url('assets/images/services/full/1.jpg');"></div>
                    <!-- .col-md-6 end -->
                    <div class="col-xs-12 col-sm-6 col-md-6 col-content" style="display: table; border-width: 3px; border-style: solid;">
                        <div class="row" style="display: table-cell; vertical-align: middle; text-align: center; background-color: #FFFE04">
                            <p style="font-size: 37px; font-weight: 700; line-height: 25px; text-transform: uppercase; color:#0a192f; margin-bottom: 50px; line-height: 165%;">
                                verifique el estado de sus pedidos
                            </p>
                            <a class="btn btn-secondary btn-white btn-modif-white" style="width: 224px !important;" href="/pedidos">Ver Mis Pedidos <i class="fa fa-plus ml-xs"></i></a>
                        </div>
                    </div>
                    <!-- .col-md-6 end -->
                </div>
                <!-- .row end -->
            </div>
            <!-- .col-md-12 -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container-fluid end -->
</section>
<div class="cleafix mb-150">
</div> --}}





{{-- depositos bancarios --}}
{{--
<section id="service-2" class="service service-2 bg-gray pb-0">
    <div class="container-fluid bg-theme">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row" style="background-color: #FFFE04;">

                    <div class="col-xs-12 col-sm-6 col-md-6 col-content" style="display: table; border-width: 3px; border-style: solid;">
                        <div class="row" style="display: table-cell; vertical-align: middle; text-align: center;">
                            <p style="font-size: 37px; font-weight: 700; line-height: 25px; text-transform: uppercase; color:#0a192f; margin-bottom: 50px; line-height: 165%;">
                                Ahora contamos con registro de Bouchers
                            </p>
                            <a class="btn btn-secondary btn-white btn-modif-white" style="width: 224px !important;" href="/depositos">Registrar Mi Depósito <i class="fa fa-plus ml-xs"></i></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-img col-bg" style="background-image: url('assets/images/services/full/1.jpg');"></div>
                </div>
                <!-- .row end -->
            </div>
            <!-- .col-md-12 -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container-fluid end -->
</section>
<div class="cleafix mb-150">
</div> --}}




{{-- facturas --}}

{{-- <section id="service-8" class="service service-2 service-8 bg-gray pb-0">
	<div class="container-fluid bg-theme">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12" style="background-image: url('assets/images/services/full/1.jpg'); background-size: cover;">
				<div class="row" >
                    <div class="col-md-6 col-md-offset-6 col-content" style="text-align: center; background-color: #FFFE04; border-width: 3px; border-style: solid;">
                        <p style="font-size: 37px; font-weight: 700; line-height: 25px; text-transform: uppercase; color: #0a192f; margin-bottom: 50px; line-height: 165%;">
                            Consulte inmediatamente sus facturas
                        </p>
                        <a class="btn btn-secondary btn-white btn-modif-white" style="width: 224px !important;" href="/facturas">Ver mis facturas <i class="fa fa-plus ml-xs"></i></a>
                    </div>
				</div>
				<!-- .row end -->
			</div>
			<!-- .col-md-12 -->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container-fluid end -->
</section>
<div class="cleafix mb-150">
</div> --}}






<!-- call center -->

<section id="sectionCallCenter" class="service service-2 bg-gray pb-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row" style="background-color: #FBD800;">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-img col-bg" style="background-image: url('../assets/images/features/4.jpg');"></div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-content" style="display: table;">
                        <div class="row" style="display: table-cell; vertical-align: middle; text-align: center;">
                            {{-- <p style="font-size: 37px; font-weight: 700; line-height: 25px; text-transform: uppercase; color:#0a192f; margin-bottom: 50px; line-height: 165%;">
                                Ahora contamos con registro de Bouchers
                            </p> --}}
                            <p class="p-title">CALL CENTER</p>
                            <br>
                            <img src="../assets/images/favicon/AGENTE 1-04.png" style="width: 66px !important;">
                            <P class="p-subtitle">Atención al cliente</P>
                            <p class="p-texto">
                                Contamos con personal altamente calificado para brindarle asesoramiento,
                                información y soluciones integrales a nivel nacional.
                            </p>
                            <br><br>
                            <img src="../assets/images/favicon/AGENTE 2-05.png" style="width: 66px !important;">
                            <P class="p-subtitle">Toma de pedidos</P>
                            <p class="p-texto">
                                Contamos con la tecnología adecuada que nos permite la toma de
                                pedidos en tiempo real.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
            <!-- .col-md-12 -->
        </div>
        <!-- .row end -->
    </div>
    <div class="container-fluid">
        <div class="widgets-contact">
            <div class="row" style="margin-right: 0px;">
                <div class="col-xs-12 col-sm-12 col-md-4 widget">
                    <div class="widget-contact-icon pull-left">
                        <img src="../assets/images/favicon/CELULAR.png" style="margin-top: -15px;" width="30px;">
                    </div>
                    <div class="widget-contact-info">
                        <p class="text-capitalize font-heading">72221031 - 72221033</p>
                    </div>
                </div>
                <!-- .widget end -->
                <div class="col-xs-12 col-sm-12 col-md-4 widget">
                    <div class="widget-contact-icon pull-left">
                        <img src="../assets/images/favicon/WHATSAPP.png" style="margin-top: -15px;" width="30px;">
                    </div>
                    <div class="widget-contact-info">
                        <p class="font-heading">(Whatsapp) 72221032 - 72230024</p>
                    </div>
                </div>
                <!-- .widget end -->
                <div class="col-xs-12 col-sm-12 col-md-4 widget">
                    <div class="widget-contact-icon pull-left">
                        <img src="../assets/images/favicon/MAIL.png" style="margin-top: -15px;" width="30px;">
                    </div>
                    <div class="widget-contact-info">
                        <p class="font-heading">servicio.cliente@pertec.com.bo</p>
                    </div>
                </div>
                <!-- .widget end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .row end -->
    </div>
</section>


<style type="text/css">
    .slide {
      animation-duration: 4s;
      animation-name: slidein;
    }

    .tdn{
        animation-duration: 3s;
        animation-name: tdn;
    }

@keyframes slidein {
    from{
        margin-left: 100%;
        }

        to{
            margin-left: 0%;
        }
    }
    @keyframes tdn{
    from{
        margin-top: 100%;
        }

        to{
            margin-top: 0%;
        }
    }
</style>

<script>
    function showOfs(Element){
        var x = document.getElementById(Element);
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>


@endsection
