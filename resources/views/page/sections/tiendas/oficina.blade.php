@extends('page.layouts.main')

@section('content')


<section class="bg-overlay bg-overlay-gradient pb-0 bgPageCover" style="background-image: url(../assets/images/page-title/tiendas.jpg);">
    <div class="bgImgCoverPages"></div>
    <div class="container" style="margin-top: -540px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center">
                    <div class="title-bg">
                        <h2>Oficinas {{ $b1[2] }}</h2>
                    </div>
                    <ol class="breadcrumb" style="display: unset !important;">
                        <li>
                            <a href="/">Inicio</a>
                        </li>
                        <li>
                            <a href="/sucursales">Oficinas y Tiendas</a>
                        </li>
                        <li class="active">Oficinas</li>
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
                            <div class="heading-bg heading-right">
                                <p class="mb-0">¿Dónde nos encontramos?</p>
                                <h2>Nuestras Oficinas en {{ $b1[2] }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 shop-content">
                <div class="product-img product-feature-img mb-50">
                    <img src="../assets/images/blog/grid/1.jpg" alt="product" />
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
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-7 shop-content">
                <div class="product-content">
                    <div class="product-tabs mb-50">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#details" aria-controls="details" role="tab" data-toggle="tab">Información de
                                    las Oficinas</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="details">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr style="text-transform: uppercase;">
                                            <td>Supervisor Ventas</td>
                                            <td>{{ $b1[0] }}</td>
                                        </tr>
                                        <tr style="text-transform: uppercase;">
                                            <td>Celular de Supervisor</td>
                                            <td>{{ $b1[1] }}</td>
                                        </tr>
                                        <tr style="text-transform: uppercase;">
                                            <td>Teléfono de Oficinas</td>
                                            <td>{{ $b1[6] }}</td>
                                        </tr>
                                        <tr style="text-transform: uppercase;">
                                            <td>Fax de Oficinas</td>
                                            <td>{{ $b1[7] }}</td>
                                        </tr>
                                        <tr style="text-transform: uppercase;">
                                            <td>Correo Electrónico</td>
                                            <td>{{ $b1[8] }}</td>
                                        </tr>
                                        <tr style="text-transform: uppercase;">
                                            <td>Dirección</td>
                                            <td>{{ $b1[5] }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-50 mb-30">
    </div>
</section>

<section style="padding-top: 0px;">
	<div class="content section-content">
		<div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="heading heading-4">
                            <div class="heading-bg heading-right">
                                <p class="mb-0">Maestros en Pernos</p>
                                <h2>Nuestros Vendedores en {{ $b1[2] }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @foreach ($v as $vend)
                @if($vend["ciudad"] == $b1[2])
                    <div class="col-xs-12 col-sm-6 col-md-3 service-block" style="text-align: center;">
                        <div class="service-img">
                            <img src="http://192.168.31.242:5000/{{ $vend['imagen'] }}" alt="vendedor" width="280" height="230"/>
                        </div><br>
                        <div class="service-content">
                            <div class="service-desc">
                                <h5>{{ $vend['nombre_vendedor'] }} {{ $vend['apellido'] }}</h5>
                                <p>Celular: {{ $vend['celular'] }}</p>
                                <p>Whatsapp: {{ $vend['whatsapp'] }}</p>
                                <p>Correo: {{ $vend['correo_electronico'] }}</p>
                            </div>
                        </div>
                    </div><br>
                @endif
            @endforeach
        </div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>






<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXolVNo_nkRhEqs9BV_oJDY6Dz1OUQCUU&callback=initMap&v=weekly"
    defer></script>

<script>
    function initMap() {
        var lat1 = {{$b1[3]}};
        var long1 = {{$b1[4]}};
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
        / The height is 400 pixels / width: 100%;
        / The width is the width of the web page /
    }

</style>







@endsection
