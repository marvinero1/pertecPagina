@extends('includes.main')

@section('content')

<section class="bg-overlay bg-overlay-gradient pb-0" style="background-image: url(../assets/images/page-title/CrepusPERTEC5455NEF.jpg); background-size: cover; height: 635px;">
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
                        <li class="active">Oficinas</li>
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


<section>
	<div class="container">
		<div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="heading heading-4">
                            <div class="heading-bg heading-right">
                                <p class="mb-0">¿Dónde nos encontramos?</p>
                                <h2>Nuestras oficinas</h2>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


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
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>


@endsection
