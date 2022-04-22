@extends('admin.layouts.admin')

@section('content')
<!-- page content -->
<div class="container">
    <div class="row">

        <div class="title_left" style="text-align: center;">
            <h3>{{ __('views.admin.products.index.title') }} </h3>
        </div><br>

        @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}
        </div>
        @endif

        <div class="row"><br>
            <div class="col-xs-6">
                <div>
                    <a href="{{ route('admin.producto.create') }}" type="button btn btn-primary" style="color: black">
                    <button class="btn btn-primary"> <i class="fa fa-cubes" aria-hidden="true"></i> Crear Productos</button></a>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="title_right">
                    <form style="display: contents !important;margin-top: 0em !important;margin-block-end: 0em !important">
                        <div class="form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Buscar por nombre" name="buscarpor" 
                                style="border: 1px #2832A1 solid;">
                                    <span class="input-group-btn" >
                                    <button class="btn btn-default" type="button" style="border: 1px #2832A1 solid;">
                                    <i class="fa fa-search"></i> Buscar</button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>       
    </div><br>
    <div class="clearfix"></div>
    <div class="row" style="display: block;">
    <div class="col-md col-sm">
        <div class="x_panel">
        <div class="x_title">
            <h2>Tabla de Productos</h2>
            <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
        <div class="x_content">

            <table class="table">
                <thead>
                    <tr>
                        {{-- <th>#</th> --}}
                        <th>Nombre</th>
                        <th>Denominación</th>
                        <th>Categoria</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($producto as $productos)
                    <tr>
                        <th scope="row">{{ $productos->nombre_producto }}</th>
                        <td>{{ $productos->denominacion }}</td>
                        <td>{{ $productos->categoria }}</td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        <div style="text-align: center;">
            {{ $producto->links() }}
        </div>
        </div>
    </div>       
    </div>
</div>
<!-- /page content -->
@endsection