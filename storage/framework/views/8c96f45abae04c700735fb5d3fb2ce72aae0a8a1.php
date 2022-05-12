

<?php $__env->startSection('content'); ?>
<!-- page content -->
<div class="container">
    <div class="row">
        <div class="title_left" style="text-align: center;">
            <h3><?php echo e(__('views.admin.dashboard.count_5')); ?> </h3>
        </div><br>

        <div class="row"><br>
            <div class="col-xs-5">
                <div>
                  
                </div>
            </div>
            <div class="col-xs-7">
                <div class="title_right">
                    <form
                        style="display: contents !important;margin-top: 0em !important;margin-block-end: 0em !important">
                        <div class="form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Buscar por Codigo Cliente" name="buscarpor"
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
                    <h2>Tabla de Pedidos</h2>
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
                                <th>Cod. Cliente</th>
                                <th>Lugar Pedido</th>
                                <th>Fecha Pedido</th>
                                <th>Fecha Entrega</th>
                                <th>Estado Pedido</th>
                            </tr>
                        </thead>

                        <tbody>
                            
                            <tr>
                                <td class="row1" scope="row"></td>
                                <td scope="row"></td>
                                <td scope="row"></td>
                                <td scope="row"></td>
                                <td scope="row" style="text-align:center;">
                                   
                                    <div class="div-background-success"><i class="fa fa-check" aria-hidden="true"></i>
                                        Confirmado</div>
                                        
                                    <div class="div-background-pendiente"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                        En revision</div>

                                    <div class="div-background-danger"><i class="fa fa-close" aria-hidden="true"></i>
                                        Rechazado</div>
                                    
                                </td>
                            </tr>
                            
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
    .div-background-pendiente{
        background-color:green; 
        color: white;
    }
    .div-background-success{
        background-color:yellow; 
        color: black;
    }
    .div-background-danger{
        background-color:red; 
        color: white;
    }
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pertecPagina\resources\views/admin/pedids/index.blade.php ENDPATH**/ ?>