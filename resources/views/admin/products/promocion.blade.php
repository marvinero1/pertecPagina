@extends('admin.layouts.admin')

@section('content')

<!-- page content -->
    <div class="row">
        <div class="title_left" style="text-align: center;">
            <h3>{{ __('views.admin.products.index.title') }} </h3>
        </div><br>

        @if (Session::has('danger'))
        <div class="alert alert-danger">{{ Session::get('danger') }}
        </div>
        @endif

        <div class="row"><br>
            <div class="col-sm-6 col-md-4 col-xs-8">
                <div class="title_right">
                    <form
                        style="display: contents !important;margin-top: 0em !important;margin-block-end: 0em !important">
                        <div class="form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Buscar por Nombre Producto" name="buscarpor"
                                    style="border: 1px #093070 solid;">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button" style="border: 1px #093070 solid;">
                                        <i class="fa fa-search"></i> Buscar</button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><br>
    
    <div class="row">
        <div class="col-md col-sm">
            <div class="x_panel">
                <h2>Productos en Promoción</h2><br>
                <div class="x_content ">
                    <div class=" row">
                        @foreach($producto as $productos)
                        <div class="col-sm-3 col-md-3">
                            <div class="thumbnail">
                                <div class="container-hover">
                                    <div class="cat">
                                        <img src="/{{ $productos->imagen }}" class="img-responsive image"
                                            alt="{{ $productos->nombre_producto }}">
                                    </div>
                                    <div class="middle">
                                        <p><a href="{{ route('admin.producto.show', $hash->encodeHex($productos->id) ) }}"
                                                style="color: black">
                                                <button type="button" class="btn-borde" data-toggle="modal"
                                                    data-target="#myModal" title="Más información">
                                                    <span class="glyphicon glyphicon-eye-open"
                                                        aria-hidden="true"></span></button>
                                            </a></p>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h3>{{ strtoupper($productos->denominacion) }}</h3>
                                    <p>{{ strtoupper($productos->nombre_producto) }}</p>
                                    <div style="text-align: center;padding-block-start: 15px;">
                                        <p><button type="button" class="btn btn-danger btn-md" data-toggle="modal"
                                                data-target="#myModal{{$productos->id}}">
                                                <i class="fa fa-star" aria-hidden="true"></i> Quitar Promoción</button>
                                        </p>
                                        @include('admin.products.modalPromocion')
                                    </div>
                                </div>
                            </div>
                        </div>                       
                        @endforeach
                    </div>
                </div>
            </div>
            <div style="text-align: center;">
                {{ $producto->links() }}
            </div>  
        </div>
    </div><br><br><br><br><br><br><br>
<!-- /page content -->
@endsection

<style>
    th,
    td,
    h4,
    .modal-header {
        text-align: center;
    }

    .row1 {
        text-align: left;
    }

    img {
        max-width: 100%;
        max-height: 100%;
    }

    .cat {
        height: 250px;
        width: 95%;
        display: block;
        margin: auto;
    }

    /* cards */
    .thumbnail {
        height: auto !important;
    }

    .img-responsive,
    .thumbnail .image {
        width: 100%;
        height: 100% !important;
    }

    .container-hover {
        padding: 0px;
        position: relative;
        background-color: #FBD800;
    }

    .image {
        opacity: 1;
        display: block;
        width: 100%;
        height: auto;
        transition: .5s ease;
        backface-visibility: hidden;
    }

    .middle {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 60%;
        left: 50%;
        height: 30%;
        width: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
    }

    .container-hover:hover .image {
        opacity: 0.3;
    }

    .container-hover:hover .middle {
        opacity: 1;
    }

    .btn-borde {
        font-weight: bold;
        border: 2px solid #007bff;
        border-radius: 1rem;
        color: #093070;
        background-color: #FBD800;
        transition: color .15s ease-in-out,
            background-color .15s ease-in-out;
    }

    .btn-borde:hover,
    .btn-borde:active,
    .btn-borde:focus {
        color: #000000;
        background-color: transparent;
    }

    /* modalstyle */
    .button-modal-close {
        position: relative;
        left: 48%;
    }

    .modal-title {
        position: absolute;
    }

    .fade-scale {
        transform: scale(0);
        opacity: 0;
        -webkit-transition: all .25s linear;
        -o-transition: all .25s linear;
        transition: all .25s linear;
    }

    .fade-scale.in {
        opacity: 1;
        transform: scale(1);
    }
</style>