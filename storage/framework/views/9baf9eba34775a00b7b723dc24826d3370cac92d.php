

<?php $__env->startSection('content'); ?>
<!-- page content -->
<div class="container">
    <div class="row">
        <div class="title_left" style="text-align: center;">
            <h3><?php echo e(__('views.admin.carusel.index.title')); ?> </h3>
        </div><br>

        <?php if(Session::has('message')): ?>
            <div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
        <?php endif; ?>

        <?php if(Session::has('danger')): ?>
            <div class="alert alert-danger"><?php echo e(Session::get('danger')); ?> </div>
        <?php endif; ?>
        <div class="row"><br>
            <div class="col-xs-5">
                <div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                        <i class="fa fa-picture-o" aria-hidden="true"></i>  Crear
                        Imagen Carusel</button>
                </div>
            </div>
            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Crear Imagen para Carusel</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row container">
                            <form action="<?php echo e(route('admin.carusel.store')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <div class="col-md-6 col-sm-6 form-group">
                                <label for="titulo">Título *</label>
                                <input type="text" id="titulo" class="form-control" name="titulo" placeholder="Título" required>
                            </div>
                            <div class="col-md-6 col-sm-6 form-group">
                                <label for="sub_titulo">Sub-Título *</label>
                                <input type="text" id="sub_titulo" class="form-control" name="sub_titulo" placeholder="Sub-Título" required>
                            </div><hr>

                            <div class="col-sm-12 form-group">
                                <label><strong>Imagen Carusel</strong></label>
                                <label for="file-upload" class="custom-file-upload" style="text-align: center;">
                                    <i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp;
                                    <strong>Imagen Carusel</strong>
                                </label>
                                <p><strong>Sugerencia:</strong> Para una mejor visualizacion se recomienda
                                    resolucion a partir de<strong> 4280 x 2832 pixels</strong></p>
                                <input id="file-upload" type="file" name="imagen">
                            </div><hr>

                            <div class="col-sm-12 form-group">
                                <label><strong>Imagen Icono</strong></label>
                                <label for="file-upload-icono" class="custom-file-upload" style="text-align: center;">
                                    <i class="fa fa-cloud-upload" aria-hidden="true"></i>&nbsp;
                                    <strong>Imagen Icono</strong>
                                </label>
                                <p><strong>Sugerencia:</strong> Para una mejor visualizacion se recomienda
                                    resolucion a partir de<strong> 65 x 55 pixels</strong></p>
                                <input id="file-upload-icono" type="file" name="imagen_icono">
                            </div>
                            <div class="modal-footer" style="padding: 15px 15px 5px 5px; float: right;">
                                <a data-dismiss="modal" type="button" class="btn btn-warning float-right" href="<?php echo e(url('/admin/producto')); ?>" style="color: black">
                                    <i class="fa fas fa-arrow-left"></i> Cerrar</a>
                                <button type="submit" class="btn btn-primary float-right mr-2"><i class="fa fas fa-save"></i>
                                    Guardar</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div><br>
    <div class="clearfix"></div>
    <div class="row" style="display: block;">
        <div class="col-md col-sm">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tabla de <?php echo e(__('views.admin.carusel.index.title')); ?></h2>
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
                                <th>Imagen</th>
                                <th>Imagen Icono</th>
                                <th>Titulo</th>
                                <th>Sub - Titulo</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $__currentLoopData = $carusel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $carusels): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td scope="row" id='listimages'> <img src="/<?php echo e($carusels->imagen); ?>" class="img-responsive imgprod" id='listimages'
                                    alt="<?php echo e($carusels->imagen); ?>" style="display: block;margin: auto;" width="450px;" height="450px;">
                                </td>
                                <td scope="row" id='listimages'> <img src="/<?php echo e($carusels->imagen_icono); ?>" class="img-responsive imgprod" id='listimages'
                                    alt="<?php echo e($carusels->imagen_icono); ?>" style="display: block;margin: auto;" width="75px;" height="75px;">
                                </td>
                                <td scope="row"><?php echo e(strtoupper($carusels->titulo)); ?></td>
                                <td scope="row"><?php echo e(strtoupper($carusels->sub_titulo)); ?></td>
                                <td scope="row" style="text-align:center;">                         
                                    <form action="<?php echo e(route('admin.carusel.destroy',$carusels->id )); ?>" method="POST"
                                        accept-charset="UTF-8" style="display:inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Image"
                                            onclick="return confirm(&quot;¿Desea eliminar?&quot;)"><i
                                                class="fa fas fa-trash" aria-hidden="true"></i> Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->



<style>
    .modalPopUp {
        width: 100%;
        height: 100%;
        background: rgba(9,48,112,0.5);
        position: fixed;
        top: 0;
        left: 0;
        display: flex;
        animation: modal 1s 2s forwards;
        visibility: hidden;
        opacity: 0;
        text-align: center;
    }
    .contenido {
        margin: auto;
        width: 40%;
        height: 40%;
        background: white;
        border-radius: 10px;
    }

    #cerrar {
        display: none;
    }
    #cerrar + label {
        position: fixed;
        color: #fff;
        font-size: 25px;
        z-index: 50;
        background: darkred;
        height: 40px;
        width: 40px;
        line-height: 40px;
        border-radius: 50%;
        right: 150px;
        top: 150px;
        cursor: pointer;
        
        animation: modal 2s 2s forwards;
        visibility: hidden;
        opacity: 0;
    }
    #cerrar:checked + label, #cerrar:checked ~ .modalPopUp {
        display: none;
    }
    @keyframes  modal {
        100% {
            visibility: visible;
            opacity: 1;
        }
    }

    th,td,h4,.modal-header {
        text-align: center;
    }
    .row1 {
        text-align: left;
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
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\repoCompletoPertec\pertecPagina\resources\views/admin/carusels/index.blade.php ENDPATH**/ ?>