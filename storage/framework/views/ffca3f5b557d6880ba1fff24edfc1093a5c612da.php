

<?php $__env->startSection('content'); ?>
<div>
    <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div><br/>
    <?php endif; ?>

    <form action="<?php echo e(route('admin.producto.update', $producto->id)); ?>" method="POST" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <?php echo e(method_field('PUT')); ?>

        <div class="row" style="border: outset;"><br>
            <div class="col-md-12 col-sm-12  form-group">
                <h3><strong>Editar Producto</strong></h3>
                <p><strong>Los campos (*) son obligatorios</strong></p>
            </div>

            <div class="col-md-12 col-sm-12" style="padding-block-end: 15px;">
                <div class="col-md-6 col-sm-12  form-group">
                    <label for="nombre">Nombre Producto *</label>
                    <input type="text" class="form-control" name="nombre_producto" value="<?php echo e($producto->nombre_producto); ?>" required>
                </div>

                <div class="col-md-6 col-sm-12  form-group">
                    <label for="nombre">Denominación Simplificada *</label>
                    <input type="text" class="form-control" name="denominacion" value="<?php echo e($producto->denominacion); ?>"
                        required>
                </div>
            </div>

            <div class="col-md-12 col-sm-12" style="padding-block-end: 7px;">
                <div class="col-md-4 col-sm-12 form-group">
                    <label for="categoria">Categoria</label>
                    <select id="categoria" name="categoria" class="form-control" required>
                        <option><?php echo e($producto->categoria); ?></option>
                        <option value="Accesorios Sujeción Techos">Accesorios Sujeción Techos.</option>
                        <option value="Agricultura">Agricultura.</option>
                        <option value="Arandelas Planas">Arandelas Planas.</option>
                        <option value="Automotriz">Automotriz.</option>
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
                        <option><?php echo e($producto->inox); ?></option>
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
                <input type="text" class="form-control" name="material" value="<?php echo e($producto->material); ?>">
            </div>

            <div class="col-md-4 col-sm-12  form-group">
                <label for="nombre">Acabado</label>
                <input type="text" class="form-control" name="acabado" value="<?php echo e($producto->acabado); ?>">
            </div>

            <div class="col-md-4 col-sm-12  form-group">
                <label for="nombre">Rosca</label>
                <input type="text" class="form-control" name="rosca" value="<?php echo e($producto->rosca); ?>">
            </div>
        </div>

        <div class="col-md-12 col-sm-12" style="padding-block-end: 7px;">
            <div class="col-md-6 col-sm-12  form-group">
                <label for="nombre">Resistencia</label>
                <input type="text" class="form-control" name="resistencia" value="<?php echo e($producto->resistencia); ?>">
            </div>

            <div class="col-md-6 col-sm-12  form-group">
                <label for="nombre">Tratamiento</label>
                <input type="text" class="form-control" name="tratamiento" value="<?php echo e($producto->tratamiento); ?>">
            </div>
        </div>

        <div class="col-md-12 col-sm-12">
            <div class="col-md-4 col-sm-12 form-group">
                <label for="sae">Norma SAE</label>
                <select id="sae" name="sae" class="form-control">
                    <option><?php echo e($producto->sae); ?></option>
                    <option value="si">SI</option>
                    <option value="no">NO</option>
                </select>
            </div>

            <div class="col-md-4 col-sm-12  form-group">
                <label for="zb">Zincado Blanco</label>
                <select id="zb" name="zb" class="form-control">
                    <option><?php echo e($producto->zb); ?></option>
                    <option value="si">SI</option>
                    <option value="no">NO</option>
                </select>
            </div>

            <div class="col-md-4 col-sm-12  form-group">
                <label for="zam">Zincado Amarillo</label>
                <select id="zam" name="zam" class="form-control"  value="<?php echo e($producto->zam); ?>" required>
                    <option><?php echo e($producto->zam); ?></option>
                    <option value="si">SI</option>
                    <option value="no">NO</option>
                </select>
            </div>
        </div>

        <div class="footer" style="padding: 15px 15px 5px 5px; float: right;">
            <a type="button" class="btn btn-warning float-right" href="<?php echo e(url('/admin/producto')); ?>" style="color: black">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pertecPagina\resources\views/admin/products/edit.blade.php ENDPATH**/ ?>