@extends('admin.layouts.admin')

@section('content')
<div class="row container"><br><br>
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}
        </div>
    @endif
    <div class="col">
        <div class="col-md-4" >
            <div class="card card-price">
                <div class="card-img"><br>
                    <div class="cat">
                        <img src="/{{ $producto->imagen }}" class="img-responsive imgprod" alt="{{ $producto->nombre_producto }}">
                    </div><br>
                    
                    <div class="card-caption">
                        <span class="h2">{{ $producto->nombre_producto }}</span>
                        {{-- <p>Gluten free</p> --}}
                    </div>
                   
                </div>
                <div class="card-body">
                    {{-- <div class="lead">Denominacion: {{ $producto->denominacion }}</div> --}}
                    <ul class="details">
                        {{-- <li>A stitch in time saves nine.</li>
                        <li>All good things come to those who wait.</li>
                        <li>There's a pony in that pile.</li> --}}
                    </ul> 
                    <table class="table">
                        <tr><th>Caracteristicas</th><th style="text-align: center;">Detalle</th></tr>
                        <tr><td>Denominación</td><td class="price">{{ $producto->denominacion }}</td></tr>
                        <tr><td>Categoria</td><td class="price">{{ $producto->categoria }}</td></tr>
                        <tr><td>Material</td><td class="price">{{ $producto->material }}</td></tr>
                        <tr><td>Acabado</td><td class="price">{{ $producto->acabado }}</td></tr>
                        <tr><td>Rosca</td><td class="price">{{ $producto->rosca }}</td></tr>
                        <tr><td>Resistencia</td><td class="price">{{ $producto->resistencia }}</td></tr>
                        <tr><td>Tratamiento</td><td class="price">{{ $producto->tratamiento }}</td></tr>
                        <tr><td>SAE</td><td class="price">{{ $producto->sae }}</td></tr>
                        <tr><td>ZB</td><td class="price">{{ $producto->zb }}</td></tr>
                        <tr><td>ZAM</td><td class="price">{{ $producto->zam }}</td></tr>
                    </table>
                </div>
                <div class="col-md-12">
                    <a href="{{ route('admin.producto.index') }}" style="color: black">
                        <button class="btn btn-warning"> <i class="fa fa-close" aria-hidden="true"></i> Atras</button></a>

                        <button type="button" style="float: right;" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal{{ $producto->id }}">
                            <i class="fa fa-diamond" aria-hidden="true"></i> Novedad</button>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card card-price">
                <div class="card-img"><br>
                    <h2 style="text-align: center;">MATRIZ</h2>
                    <div class="cat" style="text-align: center;">
                        @if(!is_null($producto->imagen_matriz))
                            <img src="/{{ $producto->imagen_matriz }}" class="img-responsive imgprod" alt="{{ $producto->nombre_producto }}">
                        @else
                        <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal{{ $producto->id }}">
                            <i class="fa fa-th" aria-hidden="true"></i> Agregar Matriz</button>
                        @endif
                    </div><br>
                    
                    <div class="card-caption">
                        <span class="h2">{{ $producto->nombre_producto }}</span>
                    </div>
                </div>
                <div class="card-body">
                    {{-- <ul class="details">
                        <li>A stitch in time saves nine.</li>
                        <li>All good things come to those who wait.</li>
                        <li>There's a pony in that pile.</li> 
                    </ul>  --}}
                </div><br>
            </div>
        </div>
        <div class="modal fade" id="myModal{{ $producto->id }}" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Agregar Matriz</h4>
                    </div>
                    <div class="modal-body">
                        <form action="{{route( 'admin.productos.productoMatriz', $producto->id )}}" method="POST"
                            style="margin-block-end:-1em !important;" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
                            <div class="col-md-12 col-sm-12  form-group">
                                <label><strong>Imagen</strong></label>
                                <label for="file-upload" class="custom-file-upload" style="text-align: center;">
                                    <i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp;
                                    <strong>Imagen Matriz</strong>
                                </label>
                                <p><strong>Sugerencia:</strong> Para una mejor visualizacion se recomienda
                                    resolucion a partir de<strong> 1280 x720 pixels</strong></p>
                                <input id="file-upload" type="file" name="imagen_matriz">
                            </div>
                            <div class="footer" style="padding: 15px 15px 5px 5px; float: right;">
                                <button type="submit" class="btn btn-primary float-right mr-2"><i class="fa fas fa-save"></i>
                                    Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .card-price{ border-color: #999; background-color: #ededed; margin-bottom: 24px; }
    .card-price > .card-heading,
    .card-price > .card-footer{ color: #73879C; background-color: #fdfdfd; }
    .card-price > .card-heading{ border-bottom: 1px solid #ddd; padding: 8px; }
    .card-price > .card-footer{ border-top: 1px solid #ddd; padding: 8px; }
    .card-price > .card-img:first-child img{ border-radius: 6px 6px 0 0; }
    .card-price > .card-left{ padding-right: 4px; }
    .card-price > .card-right{ padding-left: 4px; }
    .card-price .card-caption { color: #73879C; text-align: center; text-transform: uppercase; }
    .card-price p:last-child{ margin-bottom: 0; }

    .card-price .price{ 
    text-align: center; 
    color: #337ab7; 
    font-size: 3em; 
    text-transform: uppercase;
    line-height: 0.7em; 
    margin: 24px 0 16px;
    }
    .card-price .price small{ font-size: 0.4em; color: #66a5da; }
    .card-price .details{ list-style: none; margin-bottom: 24px; padding: 0 18px; }
    .card-price .details li{ text-align: center; margin-bottom: 8px; }
    .card-price .buy-now{ text-transform: uppercase; }
    .card-price table .price{ font-size: 1.2em; font-weight: 700; text-align: left; }
    .card-price table .note{ color: #666; font-size: 0.8em; }
    .imgprod{
        max-width: 100%;
        max-height: 100%;
        display: block;
        margin: auto;
    }
    .cat{
        height: 250px;
        width: 95%;
        display: block;
        margin: auto;
    }
    input[type="file"]{
        display: none;
    }
    input {
        text-transform: uppercase !important;
    }
    .custom-file-upload {
        width: 100%;
        border: 1px solid #ccc;
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
    }
</style>
@endsection