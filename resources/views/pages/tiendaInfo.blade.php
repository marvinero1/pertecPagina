@extends('includes.main')

@section('content')


<section class="bg-overlay bg-overlay-gradient pb-0 bgPageCover" style="background-image: url(../assets/images/page-title/tiendas.jpg);">
    <div class="bgImgCoverPages"></div>
    <div class="container" style="margin-top: -540px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center">
                    <div class="title-bg">
                        <h2>Tienda {{ $b['nombre_tienda'] }}</h2>
                    </div>
                    <ol class="breadcrumb" style="display: unset !important;">
                        <li>
                            <a href="/">Inicio</a>
                        </li>
                        <li>
                            <a href="/sucursales">Oficinas y Tiendas</a>
                        </li>
                        <li class="active">Tiendas</li>
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
                                <h2>Tienda: {{ $b['nombre_tienda'] }} ({{ $b['ciudad'] }})</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 shop-content">
                <div class="product-img product-feature-img mb-50">
                    <img src="http://192.168.31.242:5000/{{ $b['imagen'] }}" alt="product" />
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
                                            <td>Encargado</td><td>{{ $b["encargado"] }}</td>
                                        </tr>
                                        <tr style="text-transform: uppercase;">
                                            <td>Celular</td><td>{{ $b["celular"] }}</td>
                                        </tr>
                                        <tr style="text-transform: uppercase;">
                                            <td>Whatsapp</td><td>{{ $b["whatsapp"] }}</td>
                                        </tr>
                                        <tr style="text-transform: uppercase;">
                                            <td>Teléfono</td><td>{{ $b["telefono"] }}</td>
                                        </tr>
                                        <tr style="text-transform: uppercase;">
                                            <td>Correo Electrónico</td><td>{{ $b["correo_electronico"] }}</td>
                                        </tr>
                                        <tr style="text-transform: uppercase;">
                                            <td>Dirección</td><td>{{ $b["direccion"] }}</td>
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
                var lat1 = {{$b["latitud"]}};
                var long1 = {{$b["longitud"]}};
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


@endsection
