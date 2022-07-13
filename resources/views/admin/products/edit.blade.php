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
                <h3><strong>Editar Producto</strong></h3>
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
                    <label for="linea">Linea</label>
                    <select id="linea" name="linea" class="form-control" value="{{ $producto->linea }}" required>
                        <option>Elige</option>
                        <option value="Linea General">Linea General.</option>
                        <option value="Linea Automotriz y Agricola">Linea Automotriz y Agricola.</option>
                    </select>
                </div>

                <div class="col-md-4 col-sm-12 form-group">
                    <label for="categoria">Categoria</label>
                    <select id="categoria" name="categoria" class="form-control" value="{{ $producto->categoria }}" required>
                        <option>Elige</option>
                        <option value="GRADO 2 PERNO HEX, CARR & TUE SAE">GRADO 2 PERNO HEX, CARR & TUE SAE, MEDIA Y BAJA RESISTENCIA.</option>
                        <option value="GRADO 5 Y GRADO 8 PERNO & TUE HEX SAE">GRADO 5 Y GRADO 8 PERNO & TUE HEX SAE, ALTA RESISTENCIA.</option>
                        <option value="CLASE 8.8, CLASE 10,9, CLASE 8, CLASE 10 PERNO & TUERCA HEX, ALTA RESISTENCIA">CLASE 8.8, CLASE 10,9, CLASE 8, CLASE 10 PERNO & TUERCA HEX, ALTA RESISTENCIA.</option>
                        <option value="VARILLAS ROSCADAS SAE & MM">VARILLAS ROSCADAS SAE & MM.</option>
                        <option value="TIRAFONDO Y TORNILLOS METAL, MADERA & DRYWALL">TIRAFONDO Y TORNILLOS METAL, MADERA & DRYWALL.</option>
                        <option value="ARANDELAS PLANAS Y DE PRESIÓN SAE & MM">ARANDELAS PLANAS Y DE PRESIÓN SAE & MM.</option>
                        <option value="PERNO & TUERCA MÁQUINA SAE & MM">PERNO & TUERCA MÁQUINA SAE & MM.</option>
                        <option value="PRODUCTOS TECHO & REMACHES DE ALUMINIO">PRODUCTOS TECHO & REMACHES DE ALUMINIO.</option>
                        <option value="PRODUCTO ESTRUCTURAL">PRODUCTO ESTRUCTURAL.</option>
                        <option value="PRODUCTOS VARIOS">PRODUCTOS VARIOS.</option>
                        <option value="TUERCA ESPECIAL SAE & MM">TUERCA ESPECIAL SAE & MM.</option>
                        <option value="ALLEN">ALLEN.</option>
                        <option value="PRODUCTO INOXIDABLE SAE & MM">PRODUCTO INOXIDABLE SAE & MM.</option>
                        <option value="PRODUCTOS AUTOMOTRICES & AGRÍCOLAS SAE & MM">PRODUCTOS AUTOMOTRICES & AGRÍCOLAS SAE & MM.</option>
                        <option value="PRODUCTO AGRÍCOLA SAE & MM">PRODUCTO AGRÍCOLA SAE & MM.</option>
                    </select>
                </div>

                <div class="col-md-4 col-sm-12 form-group">
                    <label for="sub_categoria">Sub-Categoria</label>
                    <select id="sub_categoria" name="sub_categoria" class="form-control" value="{{ $producto->sub_categoria }}" required>
                        <option>Elige</option>
                        <option value="Grado 2 Per Hex & Carroc c/Tue">Grado 2 Per Hex & Carroc c/Tue (Cjts & Pzas).</option>
                        <option value="Tuercas Hexag SAE">Tuercas Hexag. SAE (Kgs. & Pzas.).</option>
                        <option value="Grado 2 Rosca Fondo Pernos Hex & Carr SAE">Grado 2 Rosca Fondo Pernos Hex. & Carr. SAE.</option>
                        <option value="Grado 5 Perno & Tuerca Hexag SAE">Grado 5 Perno & Tuerca Hexag. SAE.</option>
                        <option value="Grado 8 Perno & Tuerca Hexag SAE">Grado 8 Perno & Tuerca Hexag. SAE.</option>
                        <option value="Grado 5 Perno Esp & Tue Hex Esp UNC">Grado 5 Perno Esp. & Tue. Hex. Esp. UNC.</option>
                        <option value="Clase 8.8 Perno Hx & Clase 8 Tuerca Hex">Clase 8.8 Perno Hx & Clase 8 Tuerca Hex.</option>
                        <option value="Perno c/Ara Incorp CL.8.8 CTE MM">Perno c/Ara Incorp. CL.8.8 CTE MM.</option>
                        <option value="Tuerca c/Ara Incorp. CL.8 CTE MM">Tuerca c/Ara Incorp. CL.8 CTE MM.</option>
                        <option value="Clase 10.9 Perno Hx">Clase 10.9 Perno Hx.</option>
                        <option value="Varilla Roscada SAE & MM">Varilla Roscada SAE & MM.</option>
                        <option value="Tirafondo Cabeza Hexagonal">Tirafondo Cabeza Hexagonal.</option>
                        <option value="Tornillos Roscalata">Tornillos Roscalata.</option>
                        <option value="Tornillo Madera">Tornillo Madera.</option>
                        <option value="Tornillo DW Cab. Ara. Punta Aguja ZB">Tornillo DW Cab. Ara. Punta Aguja ZB.</option>
                        <option value="Tornillo DW Cab. Ara. Autoperf. ZB">Tornillo DW Cab. Ara. Autoperf. ZB.</option>
                        <option value="Tornillo DW Cab. Trompeta Punta Aguja FOS">Tornillo DW Cab. Trompeta Punta Aguja FOS.</option>
                        <option value="Tornillo DW Cab. Trompeta Autoperf. FOS">Tornillo DW Cab. Trompeta Autoperf. FOS.</option>
                        <option value="Tornillo DW Cab. Pla Dentada Autoperf c/Alas ZB">Tornillo DW Cab. Pla. Dentada Autoperf. c/Alas ZB.</option>
                        <option value="Tornillo Roscalata">Tornillo Roscalata.</option>
                        <option value="Arandela Plana Especial">Arandela Plana Especial.</option>
                        <option value="Arandela Plana">Arandela Plana (Kilogramos & Piezas).</option>
                        <option value="Arandela Plana Nacional Gruesa (Kilog & Pzas)">Arandela Plana Nacional Gruesa (Kilog & Pzas).</option>
                        <option value="Arandela de Presión SAE & MM">Arandela de Presión SAE & MM.</option>
                        <option value="Perno Maquina UNC & MM">Perno Máquina UNC & MM.</option>
                        <option value="Tuerca Maquina Hex UNC & MM">Tuerca Máquina Hex. UNC & MM.</option>
                        <option value="Elem Sujeción p/Techo">Elem. Sujeción p/Techo (Cjts & Pzas).</option>
                        <option value="Remache">Remache.</option>
                        <option value="Perno, Tuerca & Arandela ASTM Galv Caliente">Perno, Tuerca & Arandela ASTM Galv. Caliente.</option>
                        <option value="Varilla & Tuerca ASTM">Varilla & Tuerca ASTM.</option>
                        <option value="Varilla & Tuerca ASTM ZB">Varilla & Tuerca ASTM ZB.</option>
                        <option value="Producto Cincado">Producto Cincado.</option>
                        <option value="Perno de Expansión MM">Perno de Expansión MM.</option>
                        <option value="Productos Varios">Productos Varios.</option>
                        <option value="Broca MM & SAE">Broca MM & SAE.</option>
                        <option value="Tarugo Plastico">Tarugo Plástico.</option>
                        <option value="Tuerca Especial SAE">Tuerca Especial SAE.</option>
                        <option value="Tuerca Especial MM">Tuerca Especial MM.</option>
                        <option value="Allen - Perno SAE & MM">Allen - Perno SAE & MM.</option>
                        <option value="Allen - Prisionero SAE & MM">Allen - Prisionero SAE & MM.</option>
                        <option value="Producto Inoxidable SAE">Producto Inoxidable SAE.</option>
                        <option value="Producto Inoxidable MM">Producto Inoxidable MM.</option>
                        <option value="Perno de Rueda SAE & MM">Perno de Rueda SAE & MM.</option>
                        <option value="Tuercas de Rueda SAE">Tuercas de Rueda SAE.</option>
                        <option value="Tuerca de Rueda MM">Tuerca de Rueda MM.</option>
                        <option value="Tuerca Alta MM & SAE">Tuerca Alta MM & SAE.</option>
                        <option value="Tuerca Autofrenante SAE & MM">Tuerca Autofrenante SAE & MM.</option>
                        <option value="Tuerca Torque SAE & MM">Tuerca Torque SAE & MM.</option>
                        <option value="Tuerca Castillo SAE & MM">Tuerca Castillo SAE & MM.</option>
                        <option value="Perno Central SAE & MM">Perno Central SAE & MM.</option>
                        <option value="Grampa SAE & MM">Grampa SAE & MM.</option>
                        <option value="Perno Agrícola SAE & MM">Perno Agrícola SAE & MM.</option>
                        <option value="Perno y Tuerca Tractor">Perno y Tuerca Tractor.</option>
                    </select>
                </div>
            </div>

            <div class="col-md-12 col-sm-12" style="padding-block-end: 7px;">
                <div class="col-md-6 col-sm-12  form-group">
                    <label for="inox">Inoxidable</label>
                    <select id="inox" name="inox" class="form-control" required>
                        <option>Elige</option>
                        <option value="si">SI</option>
                        <option value="no">NO</option>
                    </select>
                </div>
                <div class="col-md-6 col-sm-12  form-group">
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
                    <option>{{ $producto->sae }}</option>
                    <option value="si">SI</option>
                    <option value="no">NO</option>
                </select>
            </div>

            <div class="col-md-4 col-sm-12  form-group">
                <label for="zb">Zincado Blanco</label>
                <select id="zb" name="zb" class="form-control">
                    <option>{{ $producto->zb }}</option>
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
