@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="title_left" style="text-align: center;">
            <h3>{{ __('views.admin.vendedrs.index.title') }} </h3>
        </div><br>

        @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}
        </div>
        @endif

        @if (Session::has('danger'))
        <div class="alert alert-danger">{{ Session::get('danger') }}
        </div>
        @endif

        @if (Session::has('edit'))
        <div class="alert alert-success">{{ Session::get('edit') }}
        </div>
        @endif
        
        <div class="row"><br>
            <div class="col-xs-5">
                <div>
                    <a href="{{ route('admin.vendedor.create') }}" type="button btn btn-primary" style="color: black">
                        <button class="btn btn-primary"> <i class="fa fa-address-card" aria-hidden="true"></i> Crear
                            Vendedor</button></a>
                </div>
            </div>
            <div class="col-xs-7">
                <div class="title_right">
                    <form
                        style="display: contents !important;margin-top: 0em !important;margin-block-end: 0em !important">
                        <div class="form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Buscar Por Nombre Vendedor" name="buscarpor"
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
    </div>
    
    <div class="clearfix"></div>
    <div class="row" style="display: block;">
        <div class="col-md col-sm">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tabla de Vendedores</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                <div class="clearfix"></div>
                </div>
                
                <div class="x_content table-responsive">
                    <table class="table" >
                        <thead>
                            <tr>
                                <th>Imagen</th>
                                <th>Ciudad</th>
                                <th>Nombre y Apellidos </th>
                                <th>Celular</th>
                                <th>Whatsapp</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($vendedor as $vendedors)
                            <tr>
                                <td scope="row" id='listimages'> <img src="/{{ $vendedors->imagen }}" class="img-responsive imgprod" id='listimages'
                                    alt="{{ $vendedors->nombre_tienda }}" style="display: block;margin: auto;">
                                </td>
                                <td scope="row">{{ strtoupper($vendedors->ciudad) }}</td>
                                <td scope="row">{{ strtoupper($vendedors->nombre_vendedor) }}, {{ strtoupper($vendedors->apellido) }}</td>
                                <td scope="row">{{ $vendedors->celular }}</td>
                                <td scope="row">{{ $vendedors->whatsapp }}</td>
                                <td scope="row" style="text-align:center;">
                                    <a href="{{ route('admin.vendedor.show', $hash->encodeHex($vendedors->id)) }}" style="color: black">
                                        <button class="btn btn-gray"><i class="fa fa-eye" aria-hidden="true"></i>
                                            Ver</button></a>   
                                    <a href="{{ route('admin.vendedor.edit', $hash->encodeHex($vendedors->id) ) }}" style="color: black">
                                        <button class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i>
                                            Editar</button>
                                    </a>                                     

                                    <form action="{{ route('admin.vendedor.destroy', $vendedors->id ) }}" method="POST"
                                        accept-charset="UTF-8" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" title="Delete Image"
                                            onclick="return confirm(&quot;¿Desea eliminar?&quot;)"><i
                                                class="fa fas fa-trash" aria-hidden="true"></i> Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div style="text-align: center;">
                    {{ $vendedor->links() }}
                </div>
            </div>
        </div>
    </div>
   
</div>
<!--div para el fondo de pantalla-->
<div id='background'></div>
<!--div para visualizar la imagen grande con el boton cerrar-->
<div id='preview'><div id='close'></div><div id='content'></div></div>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
$(document).ready(function(){
    // Funcion que se ejecuta al hacer click sobre una imagen
    $("#listimages img").click(function(){
        // Posicionamos las capas
        $('#background').css('height',$(document).height());
        // $('#preview').css('top',(($(window).height()/2) - ($('#preview').height()/2) + $(document).scrollTop()));
        // $('#preview').css('left', ($(document).width()/2) - ($('#preview').width()/2));
        // Cargamos la imagen en la capa grande
        $('#content').html("<img src='"+$(this).attr("src")+"'>");
        // Mostramos las capas
        $('#preview').fadeIn();
        $('#background').fadeIn();
    });
    
    // Cerramos las capas al pulsar sobre el fondo
    $("#background").click(function(){
        $('#background').fadeOut();
        $('#preview').fadeOut();
    });
    // Cerramos las capas al pulsar sobre la cruz
    $("#close").click(function(){
        $('#background').fadeOut();
        $('#preview').fadeOut();
    });
});
</script>
<style>
    th,td,h4,.modal-header {
        text-align: center;
    }
    .imgprod{
        width: 136px !important;
        height: 110px !important; 
    }
    /*Estilo para el listado de imagenes*/
    #listimages img {width:200px;height:130px;}

    /*Estilo para el fondo de pantalla cuando estamos mostrando la imagen grande*/
    #background {
        display:none;
        position: absolute;
        top:0px;left:0px;width:100%;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
        filter: alpha(opacity=80);
        -moz-opacity: 0.8;
        -khtml-opacity: 0.8;
        opacity: 0.8;
        background-color: #093070;
        z-index: 1;
    }

    /*Estilo para la capa que contendra la imagen grande y la cruz de cerrar*/
    #preview {
        /* display: none; */
        margin: auto;
        /* left: 150px !important; */
        position: absolute;
        left: auto !important;
        top: 220px;
        box-shadow: 1px 1px 5px #DDD;
        z-index: 2;
    }

    /*Estilo para el contenedor de la imagen grande*/
    #content {
        width:100%;
        height:100%;
    }

    #content img{
        width: 500px !important;
    }   
    /*Estilo para el boton cerrar*/
    #close {
        position: absolute;
        border:0px solid;
        width:16px;
        height:16px;
        right:2px;
        top:2px;
        background:url('close.png');
    }

    .url {text-align:center;margin-top:20px;}
</style>
@endsection