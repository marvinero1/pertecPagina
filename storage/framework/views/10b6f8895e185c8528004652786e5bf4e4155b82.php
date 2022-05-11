

<?php $__env->startSection('content'); ?>

<!-- page content -->
<div class="container">
    <div class="row">
        <div class="title_left" style="text-align: center;">
            <h3><?php echo e(__('views.admin.bouchers_pendients.index.title')); ?> </h3>
        </div><br>

        <?php if(Session::has('message')): ?>
        <div class="alert alert-info"><?php echo e(Session::get('message')); ?>

        </div>
        <?php endif; ?>

        <?php if(Session::has('danger')): ?>
        <div class="alert alert-danger"><?php echo e(Session::get('danger')); ?>

        </div>
        <?php endif; ?>
        
        <div class="row"><br>
            <div class="col-xs-5">
                
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
                    <h2>Tabla de Boucheres Pendientes</h2>
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
                            
                        </tbody>
                    </table>
                </div>
                <div style="text-align: center;">
                    
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
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pertecPagina\resources\views/admin/bouchers/index.blade.php ENDPATH**/ ?>