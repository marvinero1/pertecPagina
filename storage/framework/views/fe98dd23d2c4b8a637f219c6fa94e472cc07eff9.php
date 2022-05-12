

<?php $__env->startSection('content'); ?>
<!-- page content -->
<div class="container">
    <div class="row">
        <div class="title_left" style="text-align: center;">
            <h3><?php echo e(__('views.admin.products.index.title')); ?> </h3>
        </div><br>

        <?php if(Session::has('message')): ?>
        <div class="alert alert-info"><?php echo e(Session::get('message')); ?>

        </div>
        <?php endif; ?>

        <?php if(Session::has('danger')): ?>
        <div class="alert alert-danger"><?php echo e(Session::get('danger')); ?>

        </div>
        <?php endif; ?>
        
        <?php if(Session::has('promocion')): ?>
        <div class="alert alert-warning"><?php echo e(Session::get('promocion')); ?>

        </div>
        <?php endif; ?>

        <?php if(Session::has('novedad')): ?>
        <div class="alert alert-success"><?php echo e(Session::get('novedad')); ?>

        </div>
        <?php endif; ?>
        <div class="row"><br>
            <div class="col-xs-5">
                <div>
                    <a href="<?php echo e(route('admin.producto.create')); ?>" type="button btn btn-primary" style="color: black">
                        <button class="btn btn-primary"> <i class="fa fa-cubes" aria-hidden="true"></i> Crear
                            Producto</button></a>
                </div>
            </div>
            <div class="col-xs-7">
                <div class="title_right">
                    <form
                        style="display: contents !important;margin-top: 0em !important;margin-block-end: 0em !important">
                        <div class="form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Buscar por Nombre Producto" name="buscarpor"
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
                                <th>Nombre</th>
                                <th>Denominación</th>
                                <th>Categoria</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $__currentLoopData = $producto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="row1" scope="row"><?php echo e($productos->nombre_producto); ?></td>
                                <td scope="row"><?php echo e($productos->denominacion); ?></td>
                                <td scope="row"><?php echo e($productos->categoria); ?></td>
                                <td scope="row" style="text-align:center;">
                                    <a href="<?php echo e(route('admin.producto.show', $hash->encodeHex($productos->id) )); ?>" style="color: black">
                                        <button class="btn btn-gray"><i class="fa fa-eye" aria-hidden="true"></i>
                                            Ver</button></a>
                                    
                                    <a href="<?php echo e(route('admin.producto.edit', $hash->encodeHex($productos->id) )); ?>" style="color: black">
                                        <button class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i>
                                            Editar</button></a>
                                    <?php if($productos->promocion !='si'): ?>
                                        <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                        data-target="#myModal<?php echo e($productos->id); ?>">
                                        <i class="fa fa-star" aria-hidden="true"></i> Promoción</button>
                                    <?php endif; ?>
                                    

                                    <form action="<?php echo e(route('admin.producto.destroy',$productos->id )); ?>" method="POST"
                                        accept-charset="UTF-8" style="display:inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Image"
                                            onclick="return confirm(&quot;¿Desea eliminar?&quot;)"><i
                                                class="fa fas fa-trash" aria-hidden="true"></i> Eliminar</button>
                                    </form>
                                </td>
                                
                                <div class="modal fade" id="myModal<?php echo e($productos->id); ?>" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close"
                                                    data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Producto a Promoción</h4>
                                                <h5><strong><?php echo e(strtoupper($productos->nombre_producto)); ?></strong></h5>
                                            </div>
                                            <div class="modal-body">
                                                <form
                                                    action="<?php echo e(route( 'admin.productos.productoPromocion', $productos->id )); ?>"
                                                    method="POST" style="margin-block-end:-1em !important;">
                                                    <?php echo e(csrf_field()); ?>

                                                    <?php echo e(method_field('PUT')); ?>

                                                    <input type="hidden" name="promocion" value="si">
                                                    <h4>Agregar a Lista de Promoción </h4>
                                                    <div class="row" style="display: block;">
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary"
                                                                style="width: 100% !important; "><span
                                                                    class="icon-star"></span>
                                                                &nbsp; Añadir</button>
                                                        </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <div style="text-align: center;">
                    <?php echo e($producto->links()); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
<style>
    th,td,h4,.modal-header {
        text-align: center;
    }
    .row1 {
        text-align: left;
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pertecPagina\resources\views/admin/products/index.blade.php ENDPATH**/ ?>