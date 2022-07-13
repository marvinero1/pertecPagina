@extends('page.layouts.main')

@section('content')


<section id="contac" class="contact section">
    <div class="content section-content">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-4">
                    <div class="heading-right">
                        <p class="mb-0">Contáctanos</p>
                        <h2>Oficina Nacional</h2>
                    </div>
                </div>
            </div><br><br>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5 widgets-contact mb-60-xs">
                        <div class="widget">
                            <div class="widget-contact-icon pull-left">
                                <i class="fa fa-map"></i>
                            </div>
                            <div class="widget-contact-info">
                                <p class="text-capitalize">Visítanos</p>
                                <p class="text-capitalize font-heading">Cbba. Calle Innominada #4581 (Arocagua)</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="widget">
                            <div class="widget-contact-icon pull-left">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            <div class="widget-contact-info">
                                <p class="text-capitalize ">Escríbenos</p>
                                <a class="font-heading" href="mailto:servicio.cliente@pertec.com.bo">servicio.cliente@pertec.com.bo</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="widget">
                            <div class="widget-contact-icon pull-left">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="widget-contact-info">
                                <p class="text-capitalize">Llámanos</p>
                                <a class="text-capitalize font-heading" href="tel:+591 72221033">72221033</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="widget">
                            <div class="widget-contact-icon pull-left">
                                <i class="fa fa-whatsapp"></i>
                            </div>
                            <div class="widget-contact-info">
                                <p class="text-capitalize">Escribenos</p>
                                <a class="text-capitalize font-heading" href="https://wa.me/+59172221032/?text=Hola%20Pertec%20Quisiera%20Cotizar%20Sus%20Productos">72221033</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-7">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 pr-0 pl-0">
                                    <div class="card-body">
                                        <div id="map"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><br><br><br>

                <div class="row cnterDiv">
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <div class="row">
                            <form id="contact-form" action="{{route('sendemail')}}" method="POST">
                                {{ csrf_field() }}
                                <div class="col-sm-12 col-md-6">
                                    <input type="text" class="form-control message-contact" name="nombre" id="name"
                                        placeholder="Nombre" required />
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <input type="text" class="form-control message-contact" name="celular"
                                        id="telephone" placeholder="Celular" required />
                                </div>
                                <div class="col-md-12">
                                    <input type="email" class="form-control message-contact" name="email" id="email"
                                        placeholder="Correo Electrónico" required />
                                </div>
                                <div class="col-md-12">
                                    <textarea class="form-control message-contact" name="mensaje" id="message" rows="3"
                                        placeholder="Mensaje..." required></textarea>
                                </div>
                                <div class="col-md-12">
                                        <div class="row product-item">
                                            <div class="product-cart">
                                                <button type="submit" id="submit-message" class="btn btn-secondary btn-block btn-gereric"
                                                    style="width: 300px !important;">Enviar Mensaje
                                                </button>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 mt-xs">
                                    <!--Alert Message-->
                                    <div id="contact-result"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXolVNo_nkRhEqs9BV_oJDY6Dz1OUQCUU&callback=initMap&v=weekly"
    defer></script>
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
    .m-0px{
        text-shadow: 0 0.2px 0 rgb(9 45 116) !important;
    }
    .header-3.style-2 .navbar-fixed-top.affix{
        background-color: #093070c2;
    }
    .section {
        padding-top: 12%;
        position: relative;
    }

    .gray-bg, br {
        background-color: #f5f5f5;
    }


    #map {
        height: 440px;
        /* / The height is 400 pixels / width: 100%; */
        /* / The width is the width of the web page / */
    }
    a{
        color: #000000;
        font-family: 'Franklin Gothic Demi', sans-serif !important;
        font-size: 1.6rem;
        line-height: 23px;
    }
</style>
@endsection
