@extends('admin.layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="title_left" style="text-align: center;">
            <h3>Manejador de Pop Up's </h3>
        </div><br>

        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        @if (Session::has('danger'))
            <div class="alert alert-danger">{{ Session::get('danger') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br/>
        @endif
        @if(!count($modalPopup) > 0)
            <div class="row"><br>
                <div class="col-xs-5">
                    <div>
                        <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#myModal">
                            <i class="fa fa-wpexplorer" aria-hidden="true"></i> Crear Pop-Up</button>
                    </div>
                </div>
            </div>
        @endif
        
    </div><br>
    <div class="clearfix"></div>
</div>


<div class="row" style="display: block;">
    <div class="col-md col-sm">
        <div class="x_panel">
            <div class="x_title">
                <h2>Tabla de Pop-Up's</h2>
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
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Imagen</th>
                            <th>Descripción</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($modalPopup as $modalPopups)
                            <tr>
                                <td class="row1" scope="row">{{ $modalPopups->id }}</td>
                                <td><img src="/{{ $modalPopups->imagen }}" alt="{{ $modalPopups->descripcion }}"
                                    width="35%" style="display: block;margin: auto;"></td>
                                <td scope="row">{{ $modalPopups->descripcion }}</td>
                                <td scope="row" style="text-align:center;">        
                                    <form action="{{ route('admin.pop-up.destroy',  $modalPopups->id )}}" method="POST"
                                        accept-charset="UTF-8" style="display:inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Image"
                                            onclick="return confirm(&quot;¿Desea eliminar?&quot;)"><i
                                                class="fa fas fa-trash" aria-hidden="true"></i> Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close"
                                data-dismiss="modal">&times;</button>
                            <h4>Agregar a Imagen Promoción Pop-Up </h4>
                        </div>

                        <div class="modal-body">
                            <form action="{{route('admin.pop-up.store')}}" method="POST" enctype="multipart/form-data"
                            style="margin-block-end:-1em !important;"> 
                                {{ csrf_field() }}                                               
                                <div class="col-md-12 col-sm-12 form-group">
                                    <label><strong>Imagen</strong></label>
                                    <label for="file-upload" class="custom-file-upload" style="text-align: center;">
                                        <i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp;
                                        <strong>Imagen</strong>
                                    </label>
                                    <p><strong>Sugerencia:</strong> Para una mejor visualización se recomienda
                                        resolución a partir de<strong> 1024 x720 pixels</strong></p>
                                    <input id="file-upload" type="file" name="imagen" required>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Descripción Promoción</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" 
                                        name="descripcion"></textarea>
                                    </div>
                                </div>
                                <div class="row" style="display: block;">
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary"
                                            style="width: 100% !important; "><i class="fa fa-check"></i>
                                            &nbsp; Añadir Imagen de Pop-Up</button>
                                    </div>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
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