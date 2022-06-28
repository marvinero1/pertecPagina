@extends('page.layouts.main')

@section('content')



<!-- Stepper CSS -->
<link href="css/addons-pro/steppers.css" rel="stylesheet">
<!-- Stepper CSS - minified-->
<link href="css/addons-pro/steppers.min.css" rel="stylesheet">

<!-- Stepper JavaScript -->
<script type="text/javascript" src="js/addons-pro/steppers.js"></script>
<!-- Stepper JavaScript - minified -->
<script type="text/javascript" src="js/addons-pro/steppers.min.js"></script>

<section class="bg-overlay bg-overlay-gradient pb-0 bgPageCover"
    style="background: linear-gradient(177deg, rgba(252,218,1,1) 0%, rgba(130,131,59,1) 50%, rgba(9,45,116,1) 100%);">
    <div class="bgImgCoverPages"></div>
    <div class="container" style="margin-top: -540px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center texto-borde">
                    <div>
                        <h2>Catálogo de Productos</h2>
                    </div>
                    <ol class="breadcrumb" style="display: unset !important;">
                        <li>
                            <a href="/">Inicio</a>
                        </li>
                        <li class="active">Catálogo</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>





<section class="signup-step-container">
    <div class="content">
        <div class="row d-flex justify-content-center">
            <div class="col-md-9">
                <div class="wizard">
                    <div class="wizard-inner">
                        <div class="connecting-line"></div>
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab"
                                    aria-expanded="true"><span class="round-tab">1 </span> <i>Paso 1</i></a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab"
                                    aria-expanded="false"><span class="round-tab">2</span> <i>Paso 2</i></a>
                            </li>
                            <li role="presentation" class="disabled">
                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span
                                        class="round-tab">3</span> <i>Paso 3</i></a>
                            </li>
                        </ul>
                    </div>

                    <form role="form" action="index.html" class="login-box">
                        <div class="tab-content" id="main_form">





                            <div class="tab-pane active" role="tabpanel" id="step1">
                                <h4 class="text-center">Paso 1</h4>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="cart-table table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr class="cart-product">
                                                        <th class="cart-product-item">Código Producto</th>
                                                        <th class="cart-product-item">Descripción</th>
                                                        <th class="cart-product-item">Unidad de Medida</th>
                                                        <th class="cart-product-quantity">Cantidad</th>
                                                        <th class="cart-product-total">Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="cart-product">
                                                        <td class="cart-product-quantity">
                                                            <div>
                                                                <h6>30NHMM15</h6>
                                                            </div>
                                                        </td>
                                                        <td class="cart-product-item">
                                                            <h6>BROCAS MM HSS 13</h6>
                                                        </td>
                                                        <td class="cart-product-quantity">
                                                            <h6>PZ</h6>
                                                        </td>
                                                        <td class="cart-product-quantity">
                                                            <h6>1</h6>
                                                        </td>
                                                        <td style="text-align: center">
                                                            <input type="button" class="btn btn-danger" value="Eliminar">
                                                        </td>
                                                    </tr>
                                                    <tr class="cart-product">
                                                        <td class="cart-product-quantity">
                                                            <h6>30NHMM15</h6>
                                                        </td>
                                                        <td class="cart-product-item">
                                                            <h6>BROCAS MM HSS 13</h6>
                                                        </td>
                                                        <td class="cart-product-quantity">
                                                            <h6>PZ</h6>
                                                        </td>
                                                        <td class="cart-product-quantity">
                                                            <h6>2</h6>
                                                        </td>
                                                        <td style="text-align: center">
                                                            <input type="button" class="btn btn-danger" value="Eliminar">
                                                        </td>                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>


                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="default-btn next-step">Continue to next
                                            step</button></li>
                                </ul>
                            </div>







                            <div class="tab-pane" role="tabpanel" id="step2">
                                <h4 class="text-center">Paso 2</h4>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nombre Cliente *</label>
                                        <input class="form-control" type="text" name="nombre" placeholder="Nombre" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Teléfono</label>
                                        <input class="form-control" type="number" min="6" max="10" name="telefono" placeholder="Teléfono">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Celular *</label>
                                        <input class="form-control" type="number" min="6" max="10" name="celular" placeholder="Celular" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Whatsapp *</label>
                                        <input class="form-control" type="number" min="6" max="10" name="whatsapp" placeholder="Whatsapp" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Ciudad *</label>
                                        <select name="ciudad" class="form-control" id="ciudad" required>
                                            <option disabled selected></option>
                                            <option value="La Paz">La Paz</option>
                                            <option value="Oruro">Oruro</option>
                                            <option value="Potosi">Potosi</option>
                                            <option value="Cochabamba">Cochabamba</option>
                                            <option value="Sucre">Sucre</option>
                                            <option value="Tarija">Tarija</option>
                                            <option value="Santa Cruz">Santa Cruz</option>
                                            <option value="Beni">Beni</option>
                                            <option value="Pando">Pando</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Dirección *</label>
                                        <input class="form-control" type="text" name="direccion" placeholder="Dirección" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Correo Electrónico *</label>
                                        <input class="form-control" type="text" name="correo" placeholder="Correo" required>
                                    </div>
                                </div>



                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="default-btn prev-step">Atras</button></li>
                                    <li><button type="button" class="default-btn next-step">Continuar</button></li>
                                </ul>
                            </div>




                            <div class="tab-pane" role="tabpanel" id="step3">
                                <h4 class="text-center">Paso 3</h4>
                                <div class="all-info-container" style="text-align: center;">
                                    <i class="fa fa-check-circle-o iconAcept" style="" aria-hidden="true"></i>
                                    <h3>Su cotización a sido realizada con éxito.</h3>
                                </div>

                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                    <li><button type="button" class="default-btn next-step">Finish</button></li>
                                </ul>
                            </div>


                            <div class="clearfix"></div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>









<style>


    .iconAcept {
        font-size: 10rem;
        color: green;
    }
    .iconAcept:hover {
        animation-name: bubble2;
        animation-duration: 1s;
        animation-delay: 0.1s;
        animation-fill-mode: forwards;
    }



    @keyframes bubble2 {
        100% {
            color: blue;
        }
    }



    /*----------step-wizard------------*/
    .d-flex {
        display: flex;
    }

    .justify-content-center {
        justify-content: center;
    }

    /*---------signup-step-------------*/

    .signup-step-container {
        padding: 150px 0px 60px 0px;
    }


    .wizard .nav-tabs {
        position: relative;
        margin-bottom: 0;
        border-bottom-color: transparent;
    }

    .wizard>div.wizard-inner {
        position: relative;
    }

    .connecting-line {
        height: 2px;
        background: #e0e0e0;
        position: absolute;
        width: 75%;
        margin: 0 auto;
        left: 0;
        right: 0;
        top: 50%;
        z-index: 1;
    }

    .wizard .nav-tabs>li.active>a,
    .wizard .nav-tabs>li.active>a:hover,
    .wizard .nav-tabs>li.active>a:focus {
        color: #555555;
        cursor: default;
        border: 0;
        border-bottom-color: transparent;
    }

    span.round-tab {
        width: 30px;
        height: 30px;
        line-height: 30px;
        display: inline-block;
        border-radius: 50%;
        background: #fff;
        z-index: 2;
        position: absolute;
        left: 0;
        text-align: center;
        font-size: 16px;
        color: #0e214b;
        font-weight: 500;
        border: 1px solid #ddd;
    }



    .wizard li.active span.round-tab {
        background: #093070;
        color: #fff;
        border-color: #093070;
    }


    .wizard .nav-tabs>li {
        width: 33%;
    }

    .wizard li:after {
        content: " ";
        position: absolute;
        left: 46%;
        opacity: 0;
        margin: 0 auto;
        bottom: 0px;
        border: 5px solid transparent;
        border-bottom-color: red;
        transition: 0.1s ease-in-out;
    }



    .wizard .nav-tabs>li a {
        width: 30px;
        height: 30px;
        margin: 20px auto;
        border-radius: 100%;
        padding: 0;
        background-color: transparent;
        position: relative;
        top: 0;
    }

    .wizard .nav-tabs>li a i {
        position: absolute;
        top: -15px;
        font-style: normal;
        font-weight: 400;
        white-space: nowrap;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 12px;
        font-weight: 700;
        color: #000;
    }

    .wizard .nav-tabs>li a:hover {
        background: transparent;
    }

    .wizard .tab-pane {
        position: relative;
        padding-top: 20px;
    }


    .wizard h3 {
        margin-top: 0;
    }

    .prev-step,
    .next-step {
        font-size: 13px;
        padding: 8px 24px;
        border: none;
        border-radius: 4px;
        margin-top: 30px;
    }

    .next-step {
        background-color: #093070;
    }

    .step-head {
        font-size: 20px;
        text-align: center;
        font-weight: 500;
        margin-bottom: 20px;
    }

    .term-check {
        font-size: 14px;
        font-weight: 400;
    }

    .custom-file {
        position: relative;
        display: inline-block;
        width: 100%;
        height: 40px;
        margin-bottom: 0;
    }

    .custom-file-input {
        position: relative;
        z-index: 2;
        width: 100%;
        height: 40px;
        margin: 0;
        opacity: 0;
    }

    .custom-file-label {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1;
        height: 40px;
        padding: .375rem .75rem;
        font-weight: 400;
        line-height: 2;
        color: #495057;
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: .25rem;
    }

    .custom-file-label::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 3;
        display: block;
        height: 38px;
        padding: .375rem .75rem;
        line-height: 2;
        color: #495057;
        content: "Browse";
        background-color: #e9ecef;
        border-left: inherit;
        border-radius: 0 .25rem .25rem 0;
    }

    .all-info-container {}

    .list-content {
        margin-bottom: 10px;
    }

    .list-content a {
        padding: 10px 15px;
        width: 100%;
        display: inline-block;
        background-color: #f5f5f5;
        position: relative;
        color: #565656;
        font-weight: 400;
        border-radius: 4px;
    }

    .list-content a[aria-expanded="true"] i {
        transform: rotate(180deg);
    }

    .list-content a i {
        text-align: right;
        position: absolute;
        top: 15px;
        right: 10px;
        transition: 0.5s;
    }

    .form-control[disabled],
    .form-control[readonly],
    fieldset[disabled] .form-control {
        background-color: #fdfdfd;
    }

    .list-box {
        padding: 10px;
    }


    /*-----------custom-checkbox-----------*/
    /*----------Custom-Checkbox---------*/
    input[type="checkbox"] {
        position: relative;
        display: inline-block;
        margin-right: 5px;
    }

    input[type="checkbox"]::before,
    input[type="checkbox"]::after {
        position: absolute;
        content: "";
        display: inline-block;
    }

    input[type="checkbox"]::before {
        height: 16px;
        width: 16px;
        border: 1px solid #999;
        left: 0px;
        top: 0px;
        background-color: #fff;
        border-radius: 2px;
    }

    input[type="checkbox"]::after {
        height: 5px;
        width: 9px;
        left: 4px;
        top: 4px;
    }

    input[type="checkbox"]:checked::after {
        content: "";
        border-left: 1px solid #fff;
        border-bottom: 1px solid #fff;
        transform: rotate(-45deg);
    }

    input[type="checkbox"]:checked::before {
        background-color: #18ba60;
        border-color: #18ba60;
    }






    @media (max-width: 767px) {
        .sign-content h3 {
            font-size: 40px;
        }

        .wizard .nav-tabs>li a i {
            display: none;
        }
    }

</style>





<script>
    // ------------step-wizard-------------
    $(document).ready(function () {
        $('.nav-tabs > li a[title]').tooltip();

        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

            var $target = $(e.target);

            if ($target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);

        });
        $(".prev-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            prevTab($active);

        });
    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }

    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }

</script>





@endsection
