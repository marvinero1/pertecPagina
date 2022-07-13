

<?php $__env->startSection('content'); ?>
<div class="container"><br>
    <?php if(Session::has('novedad')): ?>
        <div class="alert alert-success"><?php echo e(Session::get('novedad')); ?></div>
    <?php endif; ?>
    <div class="col">
        <div class="col-md-4" >
            <div class="card card-price">
                <div class="card-img"><br>
                    <div class="cat">
                        <img src="/<?php echo e($productos->imagen); ?>" class="img-responsive imgprod" alt="<?php echo e($productos->nombre_producto); ?>">
                    </div> <br>                   
                    <div class="card-caption">
                        <span class="h2"><?php echo e($productos->nombre_producto); ?></span>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="details"></ul> 
                    <table class="table">
                        <tr><th>Caracteristicas</th><th style="text-align: center;">Detalle</th></tr>
                        <?php if(!is_null($productos->denominacion)): ?>
                            <tr><td>Denominación</td><td class="price"><?php echo e($productos->denominacion); ?></td></tr>
                        <?php endif; ?>
                        <?php if(!is_null($productos->linea)): ?>
                            <tr><td>Linea</td><td class="price"><?php echo e($productos->linea); ?></td></tr>
                        <?php endif; ?>
                        <?php if(!is_null($productos->categoria)): ?>
                            <tr><td>Categoria</td><td class="price"><?php echo e($productos->categoria); ?></td></tr>
                        <?php endif; ?>
                        <?php if(!is_null($productos->sub_categoria)): ?>
                            <tr><td>Sub Categoria</td><td class="price"><?php echo e($productos->sub_categoria); ?></td></tr>
                        <?php endif; ?>
                        <?php if(!is_null($productos->material)): ?>
                            <tr><td>Material</td><td class="price"><?php echo e($productos->material); ?></td></tr>
                        <?php endif; ?>
                        <?php if(!is_null($productos->acabado)): ?>
                            <tr><td>Acabado</td><td class="price"><?php echo e($productos->acabado); ?></td></tr>
                        <?php endif; ?>
                        <?php if(!is_null($productos->rosca)): ?>
                            <tr><td>Rosca</td><td class="price"><?php echo e($productos->rosca); ?></td></tr>
                        <?php endif; ?>
                        <?php if(!is_null($productos->resistencia)): ?>
                            <tr><td>Resistencia</td><td class="price"><?php echo e($productos->resistencia); ?></td></tr>
                        <?php endif; ?>
                        <?php if(!is_null($productos->tratamiento)): ?>
                            <tr><td>Tratamiento</td><td class="price"><?php echo e($productos->tratamiento); ?></td></tr>
                        <?php endif; ?>
                        <?php if(!is_null($productos->tipo)): ?>
                            <tr><td>Tipo</td><td class="price"><?php echo e($productos->tipo); ?></td></tr>
                        <?php endif; ?>
                        <?php if(!is_null($productos->sae)): ?>
                            <tr><td>SAE</td><td class="price"><?php echo e($productos->sae); ?></td></tr>
                        <?php endif; ?>
                        <?php if(!is_null($productos->zb)): ?>
                            <tr><td>ZB</td><td class="price"><?php echo e($productos->zb); ?></td></tr>
                        <?php endif; ?>
                        <?php if(!is_null($productos->zam)): ?>
                            <tr><td>ZAM</td><td class="price"><?php echo e($productos->zam); ?></td></tr>
                        <?php endif; ?>
                    </table>
                </div>
                <div class="col-md-12">
                    <a href="<?php echo e(route('admin.producto.index')); ?>" style="color: black">
                        <button class="btn btn-warning"> <i class="fa fa-close" aria-hidden="true"></i> Atras</button></a>
                        <?php if($productos->novedad !='si'): ?>
                            <button type="button" style="float: right;" class="btn btn-success btn-md" data-toggle="modal" 
                             data-target="#myModalNovedad<?php echo e($productos->id); ?>">
                        <i class="fa fa-diamond" aria-hidden="true"></i> Novedad</button>
                        <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card card-price">
                <div class="card-img"><br>
                    <h2 style="text-align: center;">MATRIZ</h2>
                    <div class="cat" style="text-align: center;">
                        <?php if(!is_null($productos->imagen_matriz)): ?>
                        <div>
                            <button type="button" class="btn btn-warning btn-md" data-toggle="modal" data-target="#myModalMatrizEdit<?php echo e($productos->id); ?>">
                                <i class="fa fa-th" aria-hidden="true"></i> Editar Matriz</button>
                            <div class="modal fade" id="myModalMatrizEdit<?php echo e($productos->id); ?>" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Actualizar Matriz</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form action="<?php echo e(route('changeMatrix', $productos->id )); ?>" method="POST"
                                                style="margin-block-end:-1em !important;" enctype="multipart/form-data">
                                                <?php echo e(csrf_field()); ?>

                                                <?php echo e(method_field('PUT')); ?>

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
                            <img src="/<?php echo e($productos->imagen_matriz); ?>" class="img-responsive imgprod" alt="<?php echo e($productos->nombre_producto); ?>">
                        <?php else: ?>
                        <button type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#myModal<?php echo e($productos->id); ?>">
                            <i class="fa fa-th" aria-hidden="true"></i> Agregar Matriz</button>
                        <?php endif; ?>
                    </div><br><br>
                    
                    <div class="card-caption">
                        <span class="h2"><?php echo e($productos->nombre_producto); ?></span>
                    </div>
                </div>
                <div class="card-body">
                    
                </div><br>
            </div>
        </div>

        <div class="modal fade" id="myModal<?php echo e($productos->id); ?>" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Agregar Matriz</h4>
                    </div>
                    <div class="modal-body">
                        <form action="<?php echo e(route( 'admin.productos.productoMatriz', $productos->id )); ?>" method="POST"
                            style="margin-block-end:-1em !important;" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('PUT')); ?>

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
        
        <div class="modal fade" id="myModalNovedad<?php echo e($productos->id); ?>" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="text-align: center;">Añadir Producto a
                            Novedad</h4>
                    </div>
                    <div class="modal-body">
                        <form
                            action="<?php echo e(route( 'admin.productos.productoNovedad', $productos->id )); ?>"
                            method="POST" style="margin-block-end:-1em !important;">
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('PUT')); ?>

                            <input type="hidden" name="novedad" value="si">
                            <h5 style="text-align: center;">
                                <?php echo e(strtoupper($productos->nombre_producto)); ?></h5><br>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Descripción Novedad</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="descripcion_novedad"></textarea>
                            </div>
                            <div class="row" style="display: block;">
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success"
                                        style="width: 100% !important; ">
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        &nbsp; Añadir</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    td{
        line-height: inherit !important;
    }
    .card-price{ border-color: #999; background-color: #ededed; margin-bottom: 24px; }
    .card-price > .card-heading,
    .card-price > .card-footer{ color: #73879C; background-color: #fdfdfd; }
    .card-price > .card-heading{ border-bottom: 1px solid #ddd; padding: 8px; }
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\repoCompletoPertec\pertecPagina\resources\views/admin/products/show.blade.php ENDPATH**/ ?>