@extends('admin.layouts.admin')

@section('content')
<div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br/>
    @endif

    <form action="{{route('admin.producto.update', $producto->id)}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="row" style="border: outset;"><br>
            <div class="col-md-12 col-sm-12  form-group">
                <h3><strong>Crear Producto</strong></h3>
                <p><strong>Los campos (*) son obligatorios</strong></p>
            </div>

            <div class="col-md-12 col-sm-12" style="padding-block-end: 15px;">
                <div class="col-md-6 col-sm-12  form-group">
                    <label for="nombre">Nombre Producto *</label>
                    <input type="text" class="form-control" name="nombre_producto" value="{{ $producto->nombre_producto }}" required>
                </div>

                <div class="col-md-6 col-sm-12  form-group">
                    <label for="nombre">Denominación Simplificada *</label>
                    <input type="text" class="form-control" name="denominacion" value="{{ $producto->denominacion }}"
                        required>
                </div>
            </div>

            <div class="col-md-12 col-sm-12" style="padding-block-end: 7px;">
                <div class="col-md-4 col-sm-12 form-group">
                    <label for="categoria">Categoria</label>
                    <select id="categoria" name="categoria" class="form-control" required>
                        <option>Elige</option>
                        <option value="Accesorios Sujeción Techos">Accesorios Sujeción Techos.</option>
                        <option value="Agricultura">Agricultura.</option>
                        <option value="Arandelas Planas">Arandelas Planas.</option>
                        <option value="Brocas y Anclajes">Brocas y Anclajes.</option>
                        <option value="Cincados">Cincados.</option>
                        <option value="Fijación Placas de Yeso">Fijación Placas de Yeso.</option>
                        <option value="Inoxidable SAE AISI 304">Inoxidable SAE AISI 304.</option>
                        <option value="Inoxidable Metricos A2">Inoxidable Metricos A2.</option>
                        <option value="Galvanizados en Caliente">Galvanizados en Caliente.</option>
                        <option value="Madera">Madera.</option>
                        <option value="Pernos y Tuercas de Acero Alta Resistencia SAE">Pernos y Tuercas de Acero Alta Resistencia SAE.</option>
                        <option value="Pernos y Tuercas de Acero Alta Resistencia Metricos">Pernos y Tuercas de Acero Alta Resistencia Metricos.</option>
                        <option value="Pernos Allen SAE - Metricos">Pernos Allen SAE - Metricos.</option>
                        <option value="Pernos Maquina">Pernos Maquina.</option>
                        <option value="Petroquimicos y Construcción Civil">Petroquimicos y Construcción Civil.</option>
                        <option value="Remache Pop">Remache Pop.</option>
                        <option value="Sujeción Techos">Sujeción Techos.</option>
                        <option value="Tuercas SAE Metricas">Tuercas SAE Metricas.</option>
                        <option value="Tornillo Roscalata">Tornillo Roscalata.</option>
                        <option value="Varrilla Roscada SAE y Metricas">Varrilla Roscada SAE y Metricas.</option>
                        <option value="Varios">Varios.</option>
                    </select>
                </div>

                <div class="col-md-4 col-sm-12  form-group">
                    <label for="inox">Inoxidable</label>
                    <select id="inox" name="inox" class="form-control" required>
                        <option>Elige</option>
                        <option value="si">SI</option>
                        <option value="no">NO</option>
                    </select>
                </div>

                <div class="col-md-4 col-sm-12  form-group">
                    <label><strong>Imagen</strong></label>
                    <label for="file-upload" class="custom-file-upload" style="text-align: center;">
                        <i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp;
                        <strong>Imagen</strong>
                    </label>
                    <p><strong>Sugerencia:</strong> Para una mejor visualizacion se recomienda
                        resolucion a partir de<strong> 1280 x720 pixels</strong></p>
                    <input id="file-upload" type="file" name="imagen">
                </div>
            </div>

            
        </div><br><br>

        <div class="col-md-12 col-sm-12" style="padding-block-end: 7px;">
            <div class="col-md-4 col-sm-12  form-group">
                <label for="nombre">Material</label>
                <input type="text" class="form-control" name="material" value="{{ $producto->material }}">
            </div>

            <div class="col-md-4 col-sm-12  form-group">
                <label for="nombre">Acabado</label>
                <input type="text" class="form-control" name="acabado" value="{{ $producto->acabado }}">
            </div>

            <div class="col-md-4 col-sm-12  form-group">
                <label for="nombre">Rosca</label>
                <input type="text" class="form-control" name="rosca" value="{{ $producto->rosca }}">
            </div>
        </div>

        <div class="col-md-12 col-sm-12" style="padding-block-end: 7px;">
            <div class="col-md-6 col-sm-12  form-group">
                <label for="nombre">Resistencia</label>
                <input type="text" class="form-control" name="resistencia" value="{{ $producto->resistencia }}">
            </div>

            <div class="col-md-6 col-sm-12  form-group">
                <label for="nombre">Tratamiento</label>
                <input type="text" class="form-control" name="tratamiento" value="{{ $producto->tratamiento }}">
            </div>
        </div>

        <div class="col-md-12 col-sm-12">
            <div class="col-md-4 col-sm-12 form-group">
                <label for="sae">Norma SAE</label>
                <select id="sae" name="sae" class="form-control">
                    <option>Elige</option>
                    <option value="si">SI</option>
                    <option value="no">NO</option>
                </select>
            </div>

            <div class="col-md-4 col-sm-12  form-group">
                <label for="zb">Zincado Blanco</label>
                <select id="zb" name="zb" class="form-control">
                    <option>Elige</option>
                    <option value="si">SI</option>
                    <option value="no">NO</option>
                </select>
            </div>

            <div class="col-md-4 col-sm-12  form-group">
                <label for="zam">Zincado Amarillo</label>
                <select id="zam" name="zam" class="form-control"  value="{{ $producto->zam }}" required>
                    <option>{{ $producto->zam }}</option>
                    <option value="si">SI</option>
                    <option value="no">NO</option>
                </select>
            </div>
        </div>

        <div class="footer" style="padding: 15px 15px 5px 5px; float: right;">
            <a type="button" class="btn btn-warning float-right" href="{{url('/admin/producto')}}" style="color: black">
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