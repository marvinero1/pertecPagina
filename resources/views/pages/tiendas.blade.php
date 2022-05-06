@extends('includes.main')

@section('content')


<section class="bg-overlay bg-overlay-gradient pb-0"
    style="background-image: url(../assets/images/page-title/tiendas.jpg); background-size: cover; height: 635px;">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center texto-borde">
                    <div class="title-bg">
                        <h2>Tiendas {{ $b1[2] }}</h2>
                    </div>
                    <ol class="breadcrumb" style="display: unset !important;">
                        <li>
                            <a href="/">Inicio</a>
                        </li>
                        <li>
                            <a href="/sucursales">Tiendas y Almacenes</a>
                        </li>
                        <li class="active">Tiendas</li>
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


{{-- Tiendas --}}





<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <div class="heading heading-4">
                            <div class="heading-bg heading-right">
                                <p class="mb-0">Maestros en Pernos</p>
                                <h2>Nuestras Tiendas</h2>
                            </div>
                        </div>
                        <!-- .heading end -->
                    </div>

                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <p>
                        <h5><b>Supervisor de Ventas: </b> {{ $b1[0] }} </h5>
                    </p>
                    <p>
                        <h5><b>Celular: </b> {{ $b1[1] }}</h5>
                    </p>
                </div>
            </div>
            @foreach ($b as $btiendas)
            @if($btiendas["ciudad"] == $b1[2])

            <!-- Imagen Tienda -->
            <div class="col-xs-12 col-sm-12 col-md-7 entry">
                <div class="entry-img">
                    <a class="img-popup">
                        <img src="http://192.168.31.242:5000/{{ $btiendas['imagen'] }}" alt="title" />
                    </a>
                </div>
            </div>
            <!-- .entry end -->

            <!-- Info text Tienda -->
            <div class="col-xs-12 col-sm-12 col-md-5 entry">
                <div class="entry-content" style="text-transform: capitalize;">
                    <p>
                        <h5>Encargado: {{ $btiendas['encargado'] }}</h5>
                    </p>
                    <p>
                        <h5>Celular: {{ $btiendas['celular'] }}</h5>
                    </p>
                    <p>
                        <h5>Whatsapp: {{ $btiendas['whatsapp'] }}</h5>
                    </p>
                    <p>
                        <h5>Direccion: {{ $btiendas['direccion'] }}</h5>
                    </p>
                </div>
                <div class="product-item">
                    <div class="product-cart">
                        <button class="btn btn-secondary btn-block" style="width: auto;" data-toggle="modal"
                            data-target="#myModal{{ $btiendas["id"] }}">
                            Ver ubicación<i class="fa fa-map-marker ml-xs"></i>
                        </button>
                    </div>

                </div>
                <!-- .entry-content end -->
            </div>
            <!-- .entry end -->
            <hr class="mt-50 mb-30">
            @include('pages.modalMap')

            @endif

            @endforeach


        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>





@endsection
