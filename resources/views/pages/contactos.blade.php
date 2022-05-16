@extends('includes.main')

@section('content')


<section class="bg-overlay bg-overlay-gradient pb-0"
    style="background-image: url(../assets/images/page-title/producBackground.jpg); background-size: cover; height: 635px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center texto-borde">
                    <div class="title-bg">
                        <h2>Contáctanos</h2>
                    </div>
                    <ol class="breadcrumb" style="display: unset !important;">
                        <li>
                            <a href="/">Inicio</a>
                        </li>
                        <li class="active">Contáctos</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="contact">
	<div class="content section-content">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="heading heading-4">
					<div class="heading-bg heading-right">
						<p class="mb-0">Contáctanos</p>
						<h2>Oficina Nacional</h2>
					</div>
				</div>
				<!-- .heading end -->
			</div>
			<!-- .col-md-12 end -->
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-5 widgets-contact mb-60-xs">
						<div class="widget">
							<div class="widget-contact-icon pull-left">
								<i class="lnr lnr-map"></i>
							</div>
							<div class="widget-contact-info">
								<p class="text-capitalize">Visítanos</p>
                                <p class="text-capitalize font-heading">Cbba. calle Innominada #4581 (Arocagua)</p>
							</div>
						</div>
						<!-- .widget end -->
						<div class="clearfix">
						</div>
						<div class="widget">
							<div class="widget-contact-icon pull-left">
								<i class="lnr lnr-envelope"></i>
							</div>
							<div class="widget-contact-info">
								<p class="text-capitalize ">Escríbenos</p>
								<p class="font-heading">servcliente@pertec.com.bo</p>
							</div>
						</div>
						<!-- .widget end -->
						<div class="clearfix">
						</div>
						<div class="widget">
							<div class="widget-contact-icon pull-left">
								<i class="lnr lnr-phone"></i>
							</div>
							<div class="widget-contact-info">
								<p class="text-capitalize">Llámanos</p>
								<p class="text-capitalize font-heading">72221033 - 72221033</p>
							</div>
						</div>
						<!-- .widget end -->
					</div>
					<!-- .col-md-4 end -->
					<div class="col-xs-12 col-sm-12 col-md-7">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 pr-0 pl-0">
                                    <div class="card-body">
                                        <div id="map"></div>
                                    </div><br>
                                </div>
                            </div>
                        </div>
					</div>
					<!-- .col-md-8 end -->
				</div>
				<!-- .row end -->
			</div>
			<!-- .col-md-12 end -->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>



<!-- Google Maps
============================================= -->
{{-- <section class="google-maps pb-0 pt-0">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 pr-0 pl-0">
				<div id="googleMap" style="width:100%;height:240px;">
				</div>
			</div>
		</div>
	</div>
</section> --}}
<!-- .google-maps end -->
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXolVNo_nkRhEqs9BV_oJDY6Dz1OUQCUU&callback=initMap&v=weekly" defer></script>

        <script>
            function initMap() {
                var lat1 = -17.38012174009731;
                var long1 = -66.11619546366377;
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
