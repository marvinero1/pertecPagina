<div class="modal fade-scale" id="myModal{{ $btiendas["id"] }}" tabindex="-1" role="dialog"
aria-labelledby="myModalLabel">

<div class="modal-dialog full-screen" role="document" onload="initMap()">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Ubicación de la Tienda</h4>
            <button type="button" class="close button-modal-close" data-dismiss="modal"
                aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>

        <div class="modal-body">
            <div class="col-md-12">
                <div class="card card-price">
                    <div class="card-img"><br>
                        <div class="card-caption" style="text-align: center;">
                            <span class="h2">Tienda: {{ $btiendas["nombre_tienda"] }}</span>
                        </div>

                        <div class="cat" style="text-align: center; visibility: hidden;">
                            <div class="col">
                                <div class="row">
                                    <div id="lat">{{ $btiendas["latitud"] }}</div> , <div id="long">
                                        {{ $btiendas["longitud"] }}</div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="card-body">
                        <div id="map"></div>
                    </div><br>
                </div>
            </div>
        </div>



        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXolVNo_nkRhEqs9BV_oJDY6Dz1OUQCUU&callback=initMap&v=weekly" defer></script>

        <script>
            function initMap() {
                var lat1 = document.getElementById("lat").innerHTML;
                var long1 = document.getElementById("long").innerHTML;

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
                    height: 530px;
                    / The height is 400 pixels /
                    width: 100%;
                    / The width is the width of the web page /
                    }
        </style>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        </div>
    </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->




