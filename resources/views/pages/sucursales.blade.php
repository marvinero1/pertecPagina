@extends('includes.main')

@section('content')

<section class="bg-overlay bg-overlay-gradient pb-0"
    style="background-image: url(../assets/images/page-title/CrepusPERTEC5455NEF.jpg); background-size: cover; height: 635px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center texto-borde">
                    <div class="title-bg">
                        <h2>Oficinas y Tiendas</h2>
                    </div>
                    <ol class="breadcrumb" style="display: unset !important;">
                        <li>
                            <a href="/">Inicio</a>
                        </li>
                        <li class="active">Oficinas y Tiendas</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="content section-content">
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
                        <a href="{{ route('oneOfice', ['id'=>2]) }}">Oficina Cochabamba</a>
                    </h3>
                </div>
                <div class="entry-content conten-stores">
                    <h5>Dirección: Calle Innominada No. 4581 (Arocagua)</h5>
                    <h5>Telf: (4) 4716000 (Líneas Rotativas)</h5>
                    <h5>Fax: (4) 4111632</h5>
                    <h5>Email: servicio.cliente@pertec.com.bo</h5>
                    <a class="entry-more" href="{{ route('oneOfice', ['id'=>2]) }}"><i class="fa fa-plus"></i>
                        <span>Más Información</span>
                    </a>
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
                        <a href="{{ route('oneOfice', ['id'=>1]) }}">Oficina La Paz</a>
                    </h3>
                </div>
                <div class="entry-content conten-stores">
                    <h5>Dirección: Villa Bolívar "B" Calle 106 No. 501</h5>
                    <h5>Telf: (2) 2822336</h5>
                    <h5>Fax: (2) 2820619</h5>
                    <h5>Email: servicio.cliente@pertec.com.bo</h5>
                    <a class="entry-more" href="{{ route('oneOfice', ['id'=>1]) }}"><i class="fa fa-plus"></i>
                        <span>Más Información</span>
                    </a>
                </div>
            </div>
            <!-- Entry Sucursal Santa Cruz -->
            <div class="col-xs-12 col-sm-6 col-md-4 entry">
                <div class="entry-img">
                    <a class="img-popup">
                        <img src="assets/images/blog/grid/1.jpg" alt="title" />
                    </a>
                </div><br>
                <div class="entry-title">
                    <h3>
                        <a href="{{ route('oneOfice', ['id'=>3]) }}">Oficina Santa Cruz</a>
                    </h3>
                </div>
                <div class="entry-content conten-stores">
                    <h5>Dirección: Calle Taitetú No. 2680</h5>
                    <h5>Telf: (3) 3470113</h5>
                    <h5>Fax: (3) 3111228</h5>
                    <h5>Email: servicio.cliente@pertec.com.bo</h5>
                    <a class="entry-more" href="{{ route('oneOfice', ['id'=>3]) }}"><i class="fa fa-plus"></i>
                        <span>Más Información</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- tiendas cbba -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 product-item" style="text-align: left;">
                        <div class="product-cart heading-right">
                            <a class="btn btn-secondary btn-block btn-gereric" style="width: 300px !important;"
                                onclick="showOfs('storeCbba')">Tiendas Cochabamba<i class="fa fa-plus ml-xs"></i>
                            </a>
                        </div>
                    </div>
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
                        <a href="{{ route('oneStore', ['id'=>$tcb["id"]]) }}">Tienda {{ $tcb["nombre_tienda"] }}</a>
                    </h3>
                </div>
                <div class="entry-content conten-stores">
                    <h5 style="text-transform: capitalize;">Dirección: {{ $tcb["direccion"] }}</h5>
                    <h5>Telf: {{ $tcb["telefono"] }}</h5>
                    <a class="entry-more" href="{{ route('oneStore', ['id'=>$tcb["id"]]) }}"><i
                            class="fa fa-plus"></i>
                        <span>Más Información</span>
                    </a>
                </div>
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
                                onclick="showOfs('storeLaPaz')">Tiendas La Paz<i class="fa fa-plus ml-xs"></i>
                            </a>
                        </div>
                    </div>
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
                        <a href="{{ route('oneStore', ['id'=>$tlz["id"]]) }}">Tienda {{ $tlz["nombre_tienda"] }}</a>
                    </h3>
                </div>
                <div class="entry-content conten-stores">
                    <h5 style="text-transform: capitalize;">Dirección: {{ $tlz["direccion"] }}</h5>
                    <h5>Telf: {{ $tlz["telefono"] }}</h5>
                    <a class="entry-more" href="{{ route('oneStore', ['id'=>$tlz["id"]]) }}"><i
                            class="fa fa-plus"></i>
                        <span>Más Información</span>
                    </a>
                </div>
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
                        <a href="{{ route('oneStore', ['id'=>$tsz["id"]]) }}">Tienda {{ $tsz["nombre_tienda"] }}</a>
                    </h3>
                </div>
                <!-- .entry-title end -->
                <div class="entry-content conten-stores">
                    <h5 style="text-transform: capitalize;">Dirección: {{ $tsz["direccion"] }}</h5>
                    <h5>Telf: {{ $tsz["telefono"] }}</h5>
                    <a class="entry-more" href="{{ route('oneStore', ['id'=>$tsz["id"]]) }}"><i
                            class="fa fa-plus"></i>
                        <span>Más Información</span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<script>
    function showOfs(Element) {
        var x = document.getElementById(Element);
        if (x.style.display === "none") {
            x.style.display = "flex";
        } else {
            x.style.display = "none";
        }
    }

</script>
@endsection
