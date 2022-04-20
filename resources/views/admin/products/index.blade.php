@extends('admin.layouts.admin')

@section('content')
    <!-- page content -->
    <div class="container">
        <div class="row">

        <div class="title_left">
            <h3>{{ __('views.admin.products.index.title') }} </h3>
        </div><br>
        <div class="row">
            <div class="col-xs-6">
                <div>
                    <a href="{{ route('admin.producto.create') }}" type="button btn btn-primary" style="color: black">
                    <i class="fa fa-cubes" aria-hidden="true"></i> Crear Productos</a>
                </div>
            </div>

            <div class="col-xs-6">
                <div class="title_right">
                    <div class="form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Buscar por nombre">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i> Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
          </div>       
        </div>


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
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    </tr>
                </tbody>
                </table>

            </div>
            </div>
        </div>       
        </div>
    </div>
    <!-- /page content -->
@endsection