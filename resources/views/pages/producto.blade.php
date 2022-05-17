@extends('includes.main')

@section('content')


<section class="bg-overlay bg-overlay-gradient pb-0 bgPageCover" style="background-image: url(../assets/images/page-title/producBackground.jpg);">
    <div class="bgImgCoverPages"></div>
    <div class="container" style="margin-top: -540px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center">
                    <div class="title-bg">
                        <h2>{{ $b['denominacion'] }}</h2>
                    </div>
                    <ol class="breadcrumb" style="display: unset !important;">
                        <li>
                            <a href="/">Inicio</a>
                        </li>
                        <li>
                            <a href="/fullProducts">Productos</a>
                        </li>
                        <li class="active">Producto</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

</section>




<section class="shop">
    <div class="container">
        <h1 style="text-align: center; text-transform: uppercase;"><b>{{ $b['nombre_producto'] }}</b></h1><br>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5 shop-content">

                <!-- Product Image -->
                <div class="product-img product-feature-img mb-50">
                    <img src=" http://192.168.31.242:5000/{{ $b['imagen'] }}" alt="product" />
                </div>
                <!-- .product-img end -->

                <!-- Product Content -->
                <div class="product-content">
                    <div class="product-title text-center-xs">
                        <h3>Descripción</h3>
                    </div>
                    <!-- .product-img end -->

                    <div class="product-desc text-center-xs">
                        <p>Lorem ipsum dolor sit amet, mauris suspendisse viverra eleifend tortor tellus suscipit,
                            tortor aliquet at nulla mus, dignissim neque, nulla neque. Ultrices proin mi urna nibh ut,
                            aenean sollicitudin etiam libero nisl, ultrices ridiculus in magna purus consequuntur, ipsum
                            donec orci ad vitae pede, id odio.</p>
                    </div>
                    <!-- .product-desc end -->

                    <hr class="mt-50 mb-30">

                    <!-- .product-tabs -->
                    <div class="product-tabs mb-50">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <!-- <li role="presentation" class="active">
                                <a href="#description" aria-controls="description" role="tab"
                                    data-toggle="tab">description</a>
                            </li> -->
                            <li role="presentation" class="active">
                                <a href="#details" aria-controls="details" role="tab" data-toggle="tab">Más Detalles</a>
                            </li>
                            <!-- <li role="presentation">
                                <a href="#reviews" aria-controls="reviews" role="tab" data-toggle="tab">reviews(2)</a>
                            </li> -->
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- <div role="tabpanel" class="tab-pane active" id="description">
                                <p>Lorem ipsum dolor sit amet, mauris suspendisse viverra eleifend tortor tellus
                                    suscipit, tortor aliquet at nulla mus, dignissim neque, nulla neque. Ultrices proin
                                    mi urna nibh ut, aenean sollicitudin etiam libero nisl, ultrices ridiculus in magna
                                    purus consequuntur, ipsum donec orci ad vitae pede, id odio.</p>
                                <p>Lorem ipsum dolor sit amet, mauris suspendisse viverra eleifend tortor tellus
                                    suscipit, tortor aliquet at nulla mus, dignissim neque, nulla neque. Ultrices proin
                                    mi urna nibh ut, aenean sollicitudin etiam libero nisl, ultrices ridiculus in magna
                                    purus consequuntur, ipsum donec orci ad vitae pede, id odio.</p>
                            </div> -->
                            <!-- #description end -->
                            <div role="tabpanel" class="tab-pane active" id="details">
                                <h5>Detalles Técnicos</h5>
                                <table class="table table-striped">
                                    <tbody>
                                        @foreach ( $b as $k => $v)
                                        @if ($v && $k!="id" && $k!="nombre_producto" && $k!="imagen" &&
                                        $k!="imagen_matriz" && $k!="created_at" && $k!="updated_at")
                                        <tr style="text-transform: uppercase;">
                                            <td>{{ $k }}</td>
                                            <td>{{ $v }}</td>
                                        </tr>
                                        @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-7 sidebar sidebar-full">
                <!-- .sidebar end -->
                <div class="row">
                    <div class="product-img product-feature-img mb-50">
                        @if(is_null($b['imagen_matriz']))
                            <img src="../assets/images/matrizVacia.jpg" alt="matriz" />
                        @else
                            <img src=" http://192.168.31.242:5000/{{ $b['imagen_matriz'] }}" alt="matriz" />
                        @endif
                    </div>
                </div>
                <div class="row">
                    <h5>Detalles :</h5>
                    <br><br>
                    @foreach ( $b as $k => $v)
                    @if ($v && $k!="id" && $k!="nombre_producto" && $k!="imagen" && $k!="imagen_matriz" &&
                    $k!="created_at" && $k!="updated_at")
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <div class="product-details text-center-xs">
                            <ul class="list-unstyled">
                                <li style="text-transform: uppercase; font-size: 11px">{{ $k }} : <span>{{ $v }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    @endif
                    @endforeach
                </div>




            </div>
            <!-- .col-md-3 end -->
        </div>
        <!-- .row end -->
        <hr class="mt-50 mb-30">

        <!-- .product-related end -->
    </div>
    <!-- .container end -->
</section>

<section class="shop">
    <div class="content">
        <!-- Related Project -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h1 style="text-align: center; text-transform: uppercase;"><b>Productos Relacionados</b></h1><br>
                <div class="row">
                    <div class="widget-related-product">
                        <div class="widget-content">
                            <div class="row">
                                <!-- product #1 -->
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 product-item clearfix">
                                    <div class="product-img">
                                        <img src="../assets/images/shop/grid/4.jpg" alt="product">
                                        <div class="product-hover">
                                            <div class="product-cart">
                                                <a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .product-img end -->
                                    <div class="product-bio">
                                        <h4>
                                            <a href="#">Plate Compactor</a>
                                        </h4>
                                        <p class="product-price">$230.00</p>
                                    </div>
                                    <!-- .product-bio end -->
                                </div>
                                <!-- .product-item clearfix end -->

                                <!-- product #2 -->
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 product-item clearfix">
                                    <div class="product-img">
                                        <img src="../assets/images/shop/grid/5.jpg" alt="product">
                                        <div class="product-hover">
                                            <div class="product-cart">
                                                <a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .product-img end -->
                                    <div class="product-bio">
                                        <h4>
                                            <a href="#">Black Tape</a>
                                        </h4>
                                        <p class="product-price">$12.00</p>
                                    </div>
                                    <!-- .product-bio end -->
                                </div>
                                <!-- .product-item clearfix end -->

                                <!-- product #3 -->
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 product-item clearfix">
                                    <div class="product-img">
                                        <img src="../assets/images/shop/grid/6.jpg" alt="product">
                                        <div class="product-hover">
                                            <div class="product-cart">
                                                <a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .product-img end -->
                                    <div class="product-bio">
                                        <h4>
                                            <a href="#">ICS Concrete Saw</a>
                                        </h4>
                                        <p class="product-price">$40.00</p>
                                    </div>
                                    <!-- .product-bio end -->
                                </div>
                                <!-- .product-item clearfix end -->




                                <!-- product #1 -->
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 product-item clearfix">
                                    <div class="product-img">
                                        <img src="../assets/images/shop/grid/4.jpg" alt="product">
                                        <div class="product-hover">
                                            <div class="product-cart">
                                                <a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .product-img end -->
                                    <div class="product-bio">
                                        <h4>
                                            <a href="#">Plate Compactor</a>
                                        </h4>
                                        <p class="product-price">$230.00</p>
                                    </div>
                                    <!-- .product-bio end -->
                                </div>
                                <!-- .product-item clearfix end -->

                                <!-- product #2 -->
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 product-item clearfix">
                                    <div class="product-img">
                                        <img src="../assets/images/shop/grid/5.jpg" alt="product">
                                        <div class="product-hover">
                                            <div class="product-cart">
                                                <a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .product-img end -->
                                    <div class="product-bio">
                                        <h4>
                                            <a href="#">Black Tape</a>
                                        </h4>
                                        <p class="product-price">$12.00</p>
                                    </div>
                                    <!-- .product-bio end -->
                                </div>
                                <!-- .product-item clearfix end -->

                                <!-- product #3 -->
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-2 product-item clearfix">
                                    <div class="product-img">
                                        <img src="../assets/images/shop/grid/6.jpg" alt="product">
                                        <div class="product-hover">
                                            <div class="product-cart">
                                                <a class="btn btn-secondary btn-block" href="#">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- .product-img end -->
                                    <div class="product-bio">
                                        <h4>
                                            <a href="#">ICS Concrete Saw</a>
                                        </h4>
                                        <p class="product-price">$40.00</p>
                                    </div>
                                    <!-- .product-bio end -->
                                </div>
                                <!-- .product-item clearfix end -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
