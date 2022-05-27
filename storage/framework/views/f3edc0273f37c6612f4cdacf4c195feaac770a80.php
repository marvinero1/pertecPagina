<?php $__env->startSection('title', __('views.admin.users.index.title')); ?>

<?php $__env->startSection('content'); ?>



<div class="row table-responsive">
    <?php if(Session::has('confirmed')): ?>
        <div class="alert alert-success"><?php echo e(Session::get('confirmed')); ?></div>
    <?php endif; ?>  
    
    <table class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('email', __('views.admin.users.index.table_header_0'),['page' => $users->currentPage()]));?></th>
                <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('name',  __('views.admin.users.index.table_header_1'),['page' => $users->currentPage()]));?></th>
                <th><?php echo e(__('views.admin.users.index.table_header_2')); ?></th>
                <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('active', __('views.admin.users.index.table_header_3'),['page' => $users->currentPage()]));?></th>
                <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('confirmed', __('views.admin.users.index.table_header_4'),['page' => $users->currentPage()]));?></th>
                <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('created_at', __('views.admin.users.index.table_header_5'),['page' => $users->currentPage()]));?></th>
                <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('updated_at', __('views.admin.users.index.table_header_6'),['page' => $users->currentPage()]));?></th>
                <th><?php echo \Kyslik\ColumnSortable\SortableLink::render(array ('last_login', __('views.admin.users.index.table_header_7'),['page' => $users->currentPage()]));?></th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($user->email); ?></td>
                    <td><?php echo e($user->name); ?></td>
                    <td><?php echo e($user->roles->pluck('name')->implode(',')); ?></td>
                    <td>
                        <?php if($user->active): ?>
                            <span class="label label-primary"><?php echo e(__('views.admin.users.index.active')); ?></span>
                        <?php else: ?>
                            <span class="label label-danger"><?php echo e(__('views.admin.users.index.inactive')); ?></span>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if($user->confirmed): ?>
                            <span class="label label-success"><?php echo e(__('views.admin.users.index.confirmed')); ?></span>
                        <?php else: ?>
                            <span class="label label-warning"><?php echo e(__('views.admin.users.index.not_confirmed')); ?></span>
                        <?php endif; ?></td>
                    <td><?php echo e($user->created_at); ?></td>
                    <td><?php echo e($user->updated_at); ?></td>
                    <td><?php echo e($user->last_login); ?></td>
                    <td>
                        <a class="btn btn-xs btn-primary" href="<?php echo e(route('admin.users.show',  [$hash->encode($user->id)])); ?>" data-toggle="tooltip" data-placement="top" data-title="<?php echo e(__('views.admin.users.index.show')); ?>">
                            <i class="fa fa-eye"></i>
                        </a>

                        <?php if(!$user->hasRole('administrator')): ?>
                            <button type="button" class="btn btn-xs btn-success" data-toggle="modal" data-target="#myModal<?php echo e($user->id); ?>">
                            <i class="fa fa-check"></i></button>

                            <!-- Modal -->
                            <div id="myModal<?php echo e($user->id); ?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Confirmar a Usuario <?php echo e($user->name); ?></h4>
                                        </div>
                                        <div class="modal-body" style="text-align: center;">
                                            <form action="<?php echo e(route( 'admin.users.confirmedUsuario', $user->id )); ?>"
                                                method="POST" style="margin-block-end:-1em !important;">
                                                <?php echo e(csrf_field()); ?>

                                                <?php echo e(method_field('PUT')); ?>

                                                <input type="hidden" name="confirmed" value="1">
                                                <h4> ¿SE CONFIRMA LA SOLICITUD DE INGRESO AL SISTEMA A: ? </h4>
                                                <h4><?php echo e($user->name); ?></h4>

                                                <div class="row" style="display: block;">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-warning" data-dismiss="modal">
                                                            <i class="fa fa-close"></i>&nbsp; No</button>

                                                        <button type="submit" class="btn btn-success"><i class="fa fa-check"></i>
                                                            &nbsp; Si</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a href="<?php echo e(route('admin.users.destroy', [$user->id])); ?>" class="btn btn-xs btn-danger user_destroy" data-toggle="tooltip" data-placement="top" data-title="<?php echo e(__('views.admin.users.index.delete')); ?>">
                                <i class="fa fa-trash"></i>
                            </a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="pull-right">
        <?php echo e($users->links()); ?>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pertecPagina\resources\views/admin/users/index.blade.php ENDPATH**/ ?>