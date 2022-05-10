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
                        <li class="active">Contactos</li>
                    </ol>
                </div>
                <!-- .page-title end -->
            </div>
            <!-- .col-md-12 end -->
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>

<section id="contact" class="contact">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="heading heading-4">
					<div class="heading-bg heading-right">
						<p class="mb-0">We Wanna Hear From You !</p>
						<h2>Contact Us</h2>
					</div>
				</div>
				<!-- .heading end -->
			</div>
			<!-- .col-md-12 end -->
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-4 widgets-contact mb-60-xs">
						<div class="widget">
							<div class="widget-contact-icon pull-left">
								<i class="lnr lnr-map"></i>
							</div>
							<div class="widget-contact-info">
								<p class="text-capitalize">visit us</p>
								<p class="text-capitalize font-heading">tanta , alGharbia, egypt.</p>
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
								<p class="text-capitalize ">email us</p>
								<p class="text-capitalize font-heading">7oroof@7oroof.com</p>
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
								<p class="text-capitalize">call us</p>
								<p class="text-capitalize font-heading">002 01065370701</p>
							</div>
						</div>
						<!-- .widget end -->
					</div>
					<!-- .col-md-4 end -->
					<div class="col-xs-12 col-sm-12 col-md-8">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 pr-0 pl-0">
                                    <div id="googleMap" style="width:100%;height:240px;">
                                    </div>
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
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="assets/js/jquery.gmap.min.js"></script>
<script type="text/javascript">
	$('#googleMap').gMap({
		address: "121 King St,Melbourne, Australia",
		zoom: 15,
		markers:[
			{
				address: "Melbourne, Australia",
				maptype:'ROADMAP',
			}
		]
	});
</script>
@endsection
