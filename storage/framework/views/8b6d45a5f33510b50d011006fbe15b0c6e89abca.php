

<?php $__env->startSection('content'); ?>
    <!-- page content -->
    <div class="row " style="padding-top: 55px;">
        <div>
            <h1 class="font" style="text-align: center;"><?php echo e(__('views.admin.dashboard.title2')); ?></h1>        
        </div>

        <div>
            <img src="<?php echo e(url('assets/images/icon.png')); ?>" alt="logo" width="275px;" height="275px;" style="display: block;margin: auto;">
        </div>
    </div><br><br><hr><br>
    <!-- top tiles -->
    <div class="row tile_count">
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-cubes "></i> <?php echo e(__('views.admin.dashboard.count_2')); ?></span>
            <div>
                <span class="count green"><?php echo e($counts['products']); ?></span>
                 
                
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-shopping-cart"></i> <?php echo e(__('views.admin.dashboard.count_5')); ?></span>
            <div class="count green"><?php echo e($counts['users']); ?></div>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-address-book-o"></i> <?php echo e(__('views.admin.dashboard.count_4')); ?></span>
            <div class="count green"><?php echo e($counts['vendedors']); ?></div>
        </div>

        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-users"></i> <?php echo e(__('views.admin.dashboard.count_0')); ?></span>
            <div class="count green"><?php echo e($counts['users']); ?></div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-address-card"></i> <?php echo e(__('views.admin.dashboard.count_1')); ?></span>
            <div>
                <span class="count green"><?php echo e($counts['users'] - $counts['users_unconfirmed']); ?></span>
                <span class="count">/</span>
                <span class="count red"><?php echo e($counts['users_unconfirmed']); ?></span>
            </div>
        </div>
       
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-lock"></i> <?php echo e(__('views.admin.dashboard.count_3')); ?></span>
            <div>
                <span class="count green"><?php echo e($counts['protected_pages']); ?></span>
            </div>
        </div>
    </div>
    <!-- /top tiles -->

    <script type='text/javascript'>
        document.oncontextmenu = function(){return false}
    </script>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>
    <?php echo e(Html::script(mix('assets/admin/js/dashboard.js'))); ?>

    <script type='text/javascript'>
        document.oncontextmenu = function(){return false}
    </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('styles'); ?>
    <?php echo e(Html::style(mix('assets/admin/css/dashboard.css'))); ?>

<?php $__env->stopSection(); ?>
<style>
     .font {
        color: #093070;
        font-size: 50px;
        text-align: center;
        padding: 30px;
        text-shadow: 7px 4px 5px #FBD800;
    }
</style>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\repoCompletoPertec\pertecPagina\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>