@extends('page.layouts.main')

@section('content')
<section id="hero" class="hero hero-4">
    <div class="rev_slider_wrapper tama-carusel">
        <div id="slider1" class="rev_slider" data-version="5.0">
            <ul>
                @foreach($carusel as $carusels)
                    <li data-transition="fadetobottomfadefromtop" data-slotamount="default" data-easein="Power4.easeInOut"
                        data-easeout="Power4.easeInOut" data-masterspeed="4000">
                        <img src="/{{ $carusels->imagen }}" alt="BackgroundPertecSRL">
                        @if(!is_null($carusels->imagen_icono))
                            <div class="tp-caption font-frank-demi" data-x="center" data-hoffset="0" data-y="center"
                                data-voffset="-120" data-whitespace="nowrap" data-width="['150','70','70','100']"
                                data-height="['150','70','70','100']" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="3000" data-splitin="none"
                                data-splitout="none" data-responsive_offset="on" style="z-index: 999 !important;">
                                <img src="/{{ $carusels->imagen_icono }}" alt="BackgroundPertecSRL"/>
                            </div>
                        @else
                            <div class="tp-caption font-frank-demi" data-x="center" data-hoffset="0" data-y="center"
                                data-voffset="-120" data-whitespace="nowrap" data-width="['150','70','70','100']"
                                data-height="['150','70','70','100']" data-transform_idle="o:1;"
                                data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                                data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                                data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                                data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="3000" data-splitin="none"
                                data-splitout="none" data-responsive_offset="on" style="z-index: 999 !important;">
                            </div>
                        @endif
                        <h1 class="tp-caption text-uppercase font-frank-demi" data-x="center" data-hoffset="0"
                            data-y="center" data-voffset="0" data-whitespace="nowrap" data-width="none" data-height="none"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="3500" data-splitin="none"
                            data-splitout="none" data-responsive_offset="on" data-fontsize="['75','17','15','15']"
                            data-lineheight="['100','45','25','25']" data-color="#ffc527" style="z-index: 999 !important;">
                            {{ $carusels->titulo }}
                        </h1>
                        <h1 class="tp-caption text-uppercase font-frank-demi" data-x="center" data-hoffset="0"
                            data-y="center" data-voffset="80" data-width="none" data-height="none"
                            data-transform_idle="o:1;"
                            data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
                            data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                            data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
                            data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="4000" data-splitin="none"
                            data-splitout="none" data-responsive_offset="on" data-fontsize="['50','17','17','17']"
                            data-lineheight="['50','26','25','25']" data-color="#fff" style="z-index: 999 !important;">
                            {{ $carusels->sub_titulo }}
                        </h1>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</section>

<div class="cotizacion-div">
    <div class="widgets-contact" style="padding-top: 36px; background-color: transparent;">
        <div class="widget widget-contact-center" style="padding-left: 5px; position: relative;">
            <div class="pull-left">
                <i class="fa fa-truck" aria-hidden="true"></i>
                <strong class="text-white">|</strong>
            </div>
            <div class="widget-contact-info">
                <a class="font-heading awithmodelh1" href="/contactanos">REALIZA UN PEDIDO</a>
            </div>
        </div>
    </div>
</div>

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
                    </div>

                </div>
            </div>
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
            </div>
        </div>
    </div>
</section>

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
                                @foreach ($producto as $productos)
                                <div class="col-xs-12 col-sm-6 col-md-4 product-item  clearfix">
                                    <div class="product-img">
                                        <img src='/{{ $productos->imagen }}' alt="product" class="car-prod-img"
                                            style="height: auto; width: auto;">
                                        <div class="product-hover">
                                            <div class="product-cart">
                                                <a class="btn btn-secondary btn-block a-card"
                                                    href="{{ route('producto.showFrontEnd', $hash->encodeHex($productos->id)) }}">Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="height: 50px;">
                                        <h4>
                                            <a class="tama-car-nom" href="{{ route('producto.showFrontEnd', $hash->encodeHex($productos->id)) }}">{{ $productos->nombre_producto }}</a>
                                        </h4>
                                    </div>

                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="item">
                            <div class="row">
                                @foreach ($producto2 as $productos)
                                <div class="col-xs-12 col-sm-6 col-md-4 product-item  clearfix">
                                    <div class="product-img">
                                        <img src='/{{ $productos->imagen }}' alt="product" class="car-prod-img"
                                            style="height: auto; width: auto;">
                                        <div class="product-hover">
                                            <div class="product-cart">
                                                <a class="btn btn-secondary btn-block a-card"
                                                    href="{{ route('producto.showFrontEnd', $hash->encodeHex($productos->id)) }}">Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="height: 50px;">
                                        <h4>
                                            <a class="tama-car-nom" href="{{ route('producto.showFrontEnd', $hash->encodeHex($productos->id)) }}">{{ $productos->nombre_producto }}</a>
                                        </h4>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" role="button"
                            data-slide="prev">
                            <div class="controlCarrProd" style="left: 0%;">
                                <i class="fa fa-angle-left" style="margin-top: 2px; font-size: 3rem; font-weight: bold;"
                                    aria-hidden="true"></i>
                            </div>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button"
                            data-slide="next">
                            <div class="controlCarrProd" style="right: 0%;">
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
        </div>
    </div><br>

    @if($nombre_producto != "null")
        <div class="content section-content">
            <div class="col-md-6">
                <h3>Productos Buscados</h3>
            </div><br>
            <div class="col-md-6">
                <div class="input-group">
                    <form class="search-form">
                        <input type="hidden" class="form-control" placeholder=" &nbsp; Buscar" name="buscarpor" value="null">
                        <button type="submit" class="input-group-addon bg-blue text-white" style="border-radius: 20px;
                            width: 170px !important"><i class="fa fa-close"></i> Limpiar
                        </button>
                    </form>
                </div><br><br>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 shop-content">
                    <div class="item">
                        <div class="row">
                            @foreach ($productoBuscado as $productos)
                                <div class="col-xs-12 col-sm-6 col-md-4 product-item  clearfix">
                                    <div class="product-img">
                                        <img src='/{{ $productos->imagen }}' alt="product" class="car-prod-img"
                                            style="height: auto; width: auto;">
                                        <div class="product-hover">
                                            <div class="product-cart">
                                                <a class="btn btn-secondary btn-block a-card"
                                                    href="{{ route('producto.showFrontEnd', $hash->encodeHex($productos->id)) }}">Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="height: 50px;">
                                        <h4>
                                            <a class="tama-car-nom" href="{{ route('producto.showFrontEnd', $hash->encodeHex($productos->id)) }}">{{ $productos->nombre_producto }}</a>
                                        </h4>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</section>

<section id="sectionStores">
    <div class="content tdn section-content">
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
                </div>
            </div>
        </div>
        <div class="row" id="of-centrals" style="display: none; margin-top: -55px;">
            @foreach ($oficinas as $item)
                <div class="col-xs-12 col-sm-6 col-md-4 entry">
                    <div class="entry-img">
                        <a class="img-popup" href="{{ route('tiendasPertec', $hash->encodeHex($item->id)) }}">
                            <img src="/{{ $item->imagen }}" alt="title" />
                        </a>
                    </div><br>
                    <div class="entry-title">
                        <h3><a href="{{ route('tiendasPertec', $hash->encodeHex($item->id)) }}" >Oficina {{ $item->ciudad }}</a></h3>
                    </div>
                    <div class="entry-content conten-stores">
                        <h5 style="text-transform: capitalize;"><i class="fa fa-map-marker"></i> Dirección: {{ $item->direccion}}</h5>
                        <h5><i class="fa fa-phone-square"></i> Telf: {{ $item->telefono}}</h5>
                        <h5><i class="fa fa-whatsapp"></i> Whatsapp: {{ $item->whatsapp}}</h5>
                        <h5><i class="fa fa-phone"></i> Celular: {{ $item->celular}}</h5>
                        <a class="entry-more" href="{{ route('tiendasPertec', $hash->encodeHex($item->id)) }}"><i class="fa fa-plus"></i>
                            <span>Más Información</span>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

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
            @foreach ($tiendaCBBA as $tcb)
            <div class="col-xs-12 col-sm-6 col-md-4 entry">
                <div class="entry-img">
                    <a class="img-popup" href="{{ route('tiendasPertec', $hash->encodeHex($tcb->id)) }}">
                        <img src="/{{ $tcb->imagen }}" alt="title" />
                    </a>
                </div><br>
                <div class="entry-title">
                    <h3>
                        <a href="{{ route('tiendasPertec', $hash->encodeHex($tcb->id)) }}">Tienda {{ $tcb->nombre_tienda}}</a>
                    </h3>
                </div>
                <div class="entry-content conten-stores">
                    <h5 style="text-transform: capitalize;"><i class="fa fa-map-marker"></i> Dirección: {{ $tcb->direccion}}</h5>
                    <h5><i class="fa fa-phone-square"></i> Telf: {{ $tcb->telefono}}</h5>
                    <h5><i class="fa fa-whatsapp"></i> Whatsapp: {{ $tcb->whatsapp}}</h5>
                    <h5><i class="fa fa-phone"></i> Celular: {{ $tcb->celular}}</h5>
                    <a class="entry-more" href="{{ route('tiendasPertec', $hash->encodeHex($tcb->id)) }}"><i class="fa fa-plus"></i>
                        <span>Más Información</span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

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
                </div>
            </div>
        </div>
        <div class="row" id="storeLaPaz" style="display: none; margin-top: -55px;">
            @foreach ($tiendaLPZ as $tlz)
            <div class="col-xs-12 col-sm-6 col-md-4 entry" style="float: right;">
                <div class="entry-img">
                    <a class="img-popup" href="{{ route('tiendasPertec', $hash->encodeHex($tlz->id)) }}">
                        <img src="/{{ $tlz->imagen }}" alt="title" />
                    </a>
                </div><br>
                <div class="entry-title">
                    <h3>
                        <a href="{{ route('tiendasPertec', $hash->encodeHex($tlz->id)) }}">Tienda {{ $tlz->nombre_tienda}}</a>
                    </h3>
                </div>
                <div class="entry-content conten-stores">
                    <h5 style="text-transform: capitalize;"><i class="fa fa-map-marker"></i> Dirección: {{ $tlz->direccion}}</h5>
                    <h5><i class="fa fa-phone-square"></i> Telf: {{ $tlz->telefono}}</h5>
                    <h5><i class="fa fa-whatsapp"></i> Whatsapp: {{ $tlz->whatsapp}}</h5>
                    <h5><i class="fa fa-phone"></i> Celular: {{ $tlz->celular}}</h5>
                    <a class="entry-more" href="{{ route('tiendasPertec', $hash->encodeHex($tlz->id)) }}"><i class="fa fa-plus"></i>
                        <span>Más Información</span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

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
            @foreach ($tiendaSTCZ as $tsz)
            <div class="col-xs-12 col-sm-6 col-md-4 entry">
                <div class="entry-img">
                    <a class="img-popup" href="{{ route('tiendasPertec', $hash->encodeHex($tsz->id)) }}">
                        <img src="/{{ $tsz->imagen }}" alt="title" />
                    </a>
                </div><br>
                <div class="entry-title">
                    <h3>
                        <a href="{{ route('tiendasPertec', $hash->encodeHex($tsz->id)) }}">Tienda {{ $tsz->nombre_tienda}}</a>
                    </h3>
                </div>
                <div class="entry-content conten-stores">
                    <h5 style="text-transform: capitalize;"><i class="fa fa-map-marker"></i> Dirección: {{ $tsz->direccion}}</h5>
                    <h5><i class="fa fa-phone-square"></i> Telf: {{ $tsz->telefono}}</h5>
                    <h5><i class="fa fa-whatsapp"></i> Whatsapp: {{ $tsz->whatsapp}}</h5>
                    <h5><i class="fa fa-phone"></i> Celular: {{ $tsz->celular}}</h5>
                    <a class="entry-more" href="{{ route('tiendasPertec', $hash->encodeHex($tsz->id)) }}"><i class="fa fa-plus"></i>
                        <span>Más Información</span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

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
                        <a class="text-capitalize font-heading awithmodelh1 font-tam-respp" href="tel:+591 72221031">72221031 - </a>
                        <a class="text-capitalize font-heading awithmodelh1 font-tam-respp" href="tel:+591 72221033"">72221033</a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 widget widget-contact-center">
                    <div class="widget-contact-icon pull-left">
                        <i class="fa fa-whatsapp" aria-hidden="true" style="margin-top: -15px;color:black;"></i>
                    </div>
                    <div class="widget-contact-info">
                        <a class="font-heading awithmodelh1 font-tam-respp">(Whatsapp)</a>
                        <a href="https://wa.me/+59172221032/?text=Hola%20Pertec%20Quisiera%20Cotizar%20Sus%20Productos"
                        class=" awithmodelh1 font-tam-respp" target="_blank">72221032 - </a>
                        <strong>-</strong>
                        <a href="https://wa.me/+59172230024/?text=Hola%20Pertec%20Quisiera%20Cotizar%20Sus%20Productos"
                        class="awithmodelh1 font-tam-respp" target="_blank">72230024</a>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4 widget widget-contact-right">
                    <div class="widget-contact-icon pull-left">
                        <i class="fa fa-envelope-o" aria-hidden="true" style="margin-top: -15px;color:black;"></i>
                    </div>
                    <div class="widget-contact-info">
                        <a class="font-heading awithmodelh1 font-tam-respp" href="mailto:servicio.cliente@pertec.com.bo">servicio.cliente@pertec.com.bo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="cookie-disclaimer">
    <div class="cookie-close accept-cookie"><i class="fa fa-times"></i></div>
    <div class="container">
        <p style="text-align: center;">PERTEC S.R.L. &copy; utiliza ("cookies") para aumentar la calidad del sitio.
                Lea más sobre nuestro uso de cookies.
            <br>Al continuar utilizando el sitio web, acepta nuetro uso de cookies.</p>
        <button type="button" class="btn btn-success accept-cookie">¡Está bien!</button>
    </div>
</div>

<input type="checkbox" id="cerrar">

<div class="modalPopUp" style="padding-block-start: 28px;">
    <div class="contenido"><br>
        <h2>Promociones</h2>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 product-item">
                <div class="product-cart">
                    @foreach ($modalPopup as $modalPopups)
                        <img src="/{{ $modalPopups->imagen }}" alt="{{ $modalPopups->descripcion }}"
                        width="75%" style="display: block;margin: auto;">
                        <div style="padding: 25px;">
                            <h3>{{ $modalPopups->descripcion }}</h3>
                        </div>
                    @endforeach
                    <div style="padding: 10px;">
                        <a type="button" class="btn btn-lg btn-block btn-popUp" href="/prom_products">
                            <i class="fa fa-star"></i> Productos en Promoción
                        </a>
                        <label for="cerrar" id="btn-cerrar" style="text-align: center !important; z-index: 1000;"
                        class="btn-sm btn-danger btn-block"><i class="fa fa-close"></i> Cerrar</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    .controlCarrProd {
        width: 50px; height: 49px; position: absolute; background-color: rgb(206 206 206 / 80%)
    }
    @media (min-width: 992px) {
        .controlCarrProd {
            top: 25%;
        }
    }
    @media (min-width: 768px) and (max-width: 991px) {
        .controlCarrProd {
            top: 41%;
        }
    }
    @media (max-width: 767px) {
        .controlCarrProd {
            top: 46%;
        }
        .cotizacion-div {
            display: none;
        }
    }




    .awithmodelh1{
        color: #000000;
        font-family: 'Franklin Gothic Demi', sans-serif;
        font-size: 1.4rem;
        line-height: 23px;
        cursor: pointer;
    }
    .product-item {
        text-align: center;
        margin-bottom: 5px !important;
    }
    .spaceText p {
        margin-bottom: 0.5rem;
        text-align: center;
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
    @keyframes slidein {
        from {
            margin-left: 0%;
            margin-top: 100%;
        }

        to {
            margin-down: 100%;
            width: 100%;
        }
    }
    @keyframes tdn {
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
        width: auto;
        height: auto;
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
        right: 21px;
        top: 132px;
        cursor: pointer;
        animation: modal 2s 2s forwards;
        visibility: hidden;
        opacity: 0;
    }
    .btn-close{
        background: darkred;
        color: white;
    }
    #cerrar:checked+label,
    #cerrar:checked~.modalPopUp {
        display: none;
    }
    @keyframes modal {
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
    .cotizacion-div a {
        color: white;font-size: 2rem;
    }
    .cotizacion-div strong {
        width: 20px; font-size: 4rem;color: #FBD800 !important;font-weight: lighter;
    }
    .cotizacion-div i {
        margin-top: -15px;font-size: 4rem;color: white;
    }
    .cotizacion-div .pull-left {
        position: absolute;top: 50%;left: 50%;height: 30%;width: 50%;margin: -7% 0 0px -43%;
    }
    .cotizacion-div .widget-contact-info {
        position: absolute;top: 50%;left: 50%;height: 30%;width: 50%;margin: 0% 0 0px -8%;
    }


    .car-prod-img::after {
        position: absolute;
    overflow: hidden;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0;
    background-color: rgba(254, 219, 0, 0.7);
    -webkit-transition: all 0.4s ease-in-out;
    -moz-transition: all 0.4s ease-in-out;
    -o-transition: all 0.4s ease-in-out;
    transition: all 0.4s ease-in-out;

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
@endsection
