<?php $__env->startSection('content'); ?>
    <div class="row">
        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <table class="table table-striped table-hover">
                <tbody>
                    <?php if(is_null($users->imagen)): ?>
                    <tr>
                        <th><?php echo e(__('views.admin.users.show.table_header_0')); ?></th>
                        <td><img src="<?php echo e($users->avatar); ?>" class="user-profile-image" alt="imagen_perfil"></td>
                    </tr>
                    <?php else: ?>
                    <tr>
                        <th><?php echo e(__('views.admin.users.show.table_header_0')); ?></th>
                        <td><img src="<?php echo e($users->imagen); ?>" class="user-profile-image" alt="imagen_perfil"></td>
                    </tr>
                    <?php endif; ?>
                

                <tr>
                    <th><?php echo e(__('views.admin.users.show.table_header_1')); ?></th>
                    <td><?php echo e($users->name); ?></td>
                </tr>
                <tr>
                    <th><?php echo e(__('views.admin.users.show.table_header_2')); ?></th>
                    <td><?php echo e($users->apellido); ?></td>
                </tr>

                
                <tr>
                    <th><?php echo e(__('views.admin.users.show.table_header_3')); ?></th>
                    <td>
                        <?php echo e($users->ciudad); ?>

                    </td>
                </tr>
                <tr>
                    <th><?php echo e(__('views.admin.users.show.table_header_4')); ?></th>
                    <td>
                        <?php echo e($users->celular); ?>

                    </td>
                </tr>
                <tr>
                    <th><?php echo e(__('views.admin.users.show.table_header_5')); ?></th>
                    <td>
                        <?php echo e($users->nit); ?>

                    </td>
                </tr>
                <tr>
                    <th><?php echo e(__('views.admin.users.show.table_header_6')); ?></th>
                    <td>
                        <a href="mailto:<?php echo e($users->email); ?>">
                            <?php echo e($users->email); ?>

                        </a>
                    </td>
                </tr>
                <tr>
                    <th><?php echo e(__('views.admin.users.show.table_header_7')); ?></th>
                    
                     <td>
                        <?php echo e($users->rol); ?>

                    </td>
                </tr>
                <tr>
                    <th><?php echo e(__('views.admin.users.show.table_header_8')); ?></th>
                    <td>
                        <?php if($users->active): ?>
                            <span class="label label-primary"><?php echo e(__('views.admin.users.show.active')); ?></span>
                        <?php else: ?>
                            <span class="label label-danger"><?php echo e(__('views.admin.users.show.inactive')); ?></span>
                        <?php endif; ?>
                    </td>
                </tr>

                <tr>
                    <th><?php echo e(__('views.admin.users.show.table_header_9')); ?></th>
                    <td>
                        <?php if($users->confirmed): ?>
                            <span class="label label-success"><?php echo e(__('views.admin.users.show.confirmed')); ?></span>
                        <?php else: ?>
                            <span class="label label-warning"><?php echo e(__('views.admin.users.show.not_confirmed')); ?></span>
                        <?php endif; ?></td>
                    </td>
                </tr>

                <tr>
                    <th><?php echo e(__('views.admin.users.show.table_header_10')); ?></th>
                    <td><?php echo e($users->created_at); ?> (<?php echo e($users->created_at); ?>)</td>
                </tr>

                <tr>
                    <th><?php echo e(__('views.admin.users.show.table_header_11')); ?></th>
                    <td><?php echo e($users->updated_at); ?> (<?php echo e($users->updated_at); ?>)</td>
                </tr>

                <tr>
                    <th><?php echo e(__('views.admin.users.show.table_header_12')); ?></th>
                    <td><?php echo e($users->last_login); ?> (<?php echo e($users->last_login); ?>)</td>
                </tr>
                </tbody>
            </table>  
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <a href="<?php echo e(route('admin.users')); ?>" style="color: black">
            <button class="btn btn-warning"> <i class="fa fa-close" aria-hidden="true"></i> Atras</button></a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pertecPagina\resources\views/admin/users/show.blade.php ENDPATH**/ ?>