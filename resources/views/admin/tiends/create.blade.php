@extends('admin.layouts.admin')

@section('content')
<div>
    <form action="{{route('admin.tienda.store')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row" style="border: outset;">
            <div class="col-md-12 col-sm-12 form-group">
                <h3><strong>Crear Tienda</strong></h3>
                <p><strong>Los campos (*) son obligatorios</strong></p>
            </div>

            <div class="col-md-12 col-sm-12" style="padding-block-end: 15px;">
                <div class="col-md-4 col-sm-12  form-group">
                    <label for="nombre">Nombre Tienda *</label>
                    <input type="text" class="form-control" name="nombre_tienda" placeholder="Nombre Tienda" required>
                </div>

                <div class="col-md-4 col-sm-12  form-group">
                    <label for="nombre">Teléfono *</label>
                    <input type="number" class="form-control" name="telefono" placeholder="Teléfono" required>
                </div>

                <div class="col-md-4 col-sm-12  form-group">
                    <label for="nombre">Celular *</label>
                    <input type="number" class="form-control" name="celular" placeholder="Celular" required>
                </div>
            </div>

            <div class="col-md-12 col-sm-12" style="padding-block-end: 7px;">
                <div class="col-md-4 col-sm-12  form-group">
                    <label for="nombre">Whatsapp *</label>
                    <input type="number" class="form-control" name="whatsapp" placeholder="Whatsapp" required>
                </div>

                <div class="col-md-4 col-sm-12 form-group">
                    <label for="ciudad">Ciudad *</label>
                    <select id="ciudad" name="ciudad" class="form-control" required>
                        <option>Elige</option>
                        <option value="La Paz">La Paz.</option>
                        <option value="Oruro">Oruro.</option>
                        <option value="Potosi">Potosi.</option>
                        <option value="Cochabamba">Cochabamba.</option>
                        <option value="Sucre">Sucre.</option>
                        <option value="Tarija">Tarija.</option>
                        <option value="Santa Cruz">Santa Cruz.</option>
                        <option value="Beni">Beni.</option>
                        <option value="Pando">Pando.</option>
                    </select>
                </div>

                <div class="col-md-4 col-sm-12  form-group">
                    <label for="nombre">Dirección *</label>
                    <input type="text" class="form-control" name="direccion" placeholder="Dirección" required>
                </div>
            </div>
        
            <div class="col-md-12 col-sm-12" style="padding-block-end: 15px;">
                <div class="col-md-6 col-sm-12  form-group">
                    <label for="latitud">Latitud *</label>
                    <input type="text" class="form-control" name="latitud" placeholder="Latitud" required>
                </div>

                <div class="col-md-6 col-sm-12  form-group">
                    <label for="longitud">Longitud *</label>
                    <input type="text" class="form-control" name="longitud" placeholder="Longitud" required>
                </div>
            </div>

            <div class="col-md-12 col-sm-12" style="padding-block-end: 7px;">
               

                <div class="col-md-4 col-sm-12  form-group">
                    <label for="nombre">E-mail *</label>
                    <input type="email" class="form-control" name="correo_electronico" placeholder="E-mail" required>
                </div>

                <div class="col-md-4 col-sm-12  form-group">
                    <label for="cargo">Encargado *</label>
                    <input type="text" class="form-control" name="encargado" placeholder="Encargado" required>
                </div>

                <div class="col-md-4 col-sm-12  form-group">
                    <label><strong>Imagen *</strong></label>
                    <label for="file-upload" class="custom-file-upload" style="text-align: center;">
                        <i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp;
                        <strong>Imagen Tienda</strong>
                    </label>
                    <p><strong>Sugerencia:</strong> Para una mejor visualizacion se recomienda
                        resolucion a partir de<strong> 1280 x720 pixels</strong></p>
                    <input id="file-upload" type="file" name="imagen" required>
                </div>
            </div>
        </div><br>

        <div class="footer" style="padding: 15px 15px 5px 5px; float: right;">
            <a type="button" class="btn btn-warning float-right" href="{{url('/admin/tienda')}}" style="color: black">
                <i class="fa fas fa-arrow-left"></i> Cerrar</a>
            <button type="submit" class="btn btn-primary float-right mr-2"><i class="fa fas fa-save"></i>
                Guardar</button>
        </div>
    </form>
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