@extends('page.layouts.main')

@section('content')
{{-- <h1>{{ $user_id->name }}</h1> --}}


<section class="section about-section gray-bg" id="about" style="padding-top: 240px">
    <div class="container">
        <div class="row align-items-center flex-row-reverse">
            <div class="col-lg-6">
                <div class="about-text go-to">
                    <h3 class="dark-color font-frank-demi">Mi Perfil</h3>
                    @if($user_id->confirmed != 1)
                        <h6 class="theme-color lead font-frank-demi">Usuario No Verificado <i class="fa fa-times-circle-o" aria-hidden="true"></i></h6>
                    @else
                    <h6 class="lead font-frank-demi" style="color: green">Usuario Verificado <i class="fa fa-check-circle-o" aria-hidden="true"></i></h6>
                    @endif

                    <div class="row about-list">
                        <div class="col-md-12">
                            <div class="media">
                                <label>Código de Usuario</label>
                                <p>{{ $user_id->id }}</p>
                            </div>
                            <div class="media">
                                <label>Nombre</label>
                                <p>{{ $user_id->name }}</p>
                            </div>
                            <div class="media">
                                <label>Correo</label>
                                <p>{{ $user_id->email }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" style="text-align: center;">
                <div class="about-avatar">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" title="" alt="">
                </div><br>
                <div class="row">
                    <button class="btn btn-primary" style="height: 35px; font-size: 1.5rem;">Actualizar Datos</button>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="counter">
            <div class="row">
                <div class="col-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="500" data-speed="500">500</h6>
                        <p class="m-0px font-w-600">Pedidos Realizados</p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="150" data-speed="150">150</h6>
                        <p class="m-0px font-w-600">Facturaciones Completas</p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="850" data-speed="850">850</h6>
                        <p class="m-0px font-w-600">Total de Productos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    .section {
        padding: 100px 0;
        position: relative;
    }

    .gray-bg, br {
        background-color: #f5f5f5;
    }

    img {
        max-width: 100%;
    }

    img {
        vertical-align: middle;
        border-style: none;
    }

    /* About Me
---------------------*/
    .about-text h3 {
        font-size: 4.5rem;
        font-weight: 100;
        margin: 0 0 6px;
    }

    @media (max-width: 767px) {
        .about-text h3 {
            font-size: 35px;
        }
    }

    .about-text h6 {
        margin-bottom: 15px;
        font-size: 1.6rem;
    }

    @media (max-width: 767px) {
        .about-text h6 {
            font-size: 18px;
        }
    }

    .about-text p {
        font-size: 18px;
        max-width: 450px;
    }

    .about-text p mark {
        font-weight: 600;
        color: #093070;
    }

    .about-list {
        padding-top: 10px;
    }

    .about-list .media {
        padding: 5px 0;
    }

    .about-list label {
        color: #093070;
        font-weight: 600;
        font-size: 1.4rem;
        width: 180px;
        margin: 0;
        position: relative;
    }

    .about-list label:after {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        right: 11px;
        width: 1px;
        height: 12px;
        background: #093070;
        -moz-transform: rotate(15deg);
        -o-transform: rotate(15deg);
        -ms-transform: rotate(15deg);
        -webkit-transform: rotate(15deg);
        transform: rotate(15deg);
        margin: auto;
        opacity: 0.5;
    }

    .about-list p {
        margin: 0;
        font-size: 1.3rem;
    }

    @media (max-width: 991px) {
        .about-avatar {
            margin-top: 30px;
        }
    }

    .about-section .counter {
        padding: 22px 20px;
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
    }

    .about-section .counter .count-data {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .about-section .counter .count {
        font-weight: 700;
        color: #093070;
        margin: 0 0 5px;
    }

    .about-section .counter p {
        font-weight: 600;
        font-size: 1.3rem;
        margin: 0;
    }

    mark {
        background-image: linear-gradient(rgba(252, 83, 86, 0.6), rgba(252, 83, 86, 0.6));
        background-size: 100% 3px;
        background-repeat: no-repeat;
        background-position: 0 bottom;
        background-color: transparent;
        padding: 0;
        color: currentColor;
    }

    .theme-color {
        color: #fc5356;
    }

    .dark-color {
        color: #093070;
    }

</style>
@endsection
