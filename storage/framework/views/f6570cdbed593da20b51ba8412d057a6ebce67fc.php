<?php $__env->startSection('body_class','passwords_email'); ?>

<?php $__env->startSection('content'); ?>
<div class="login_wrapper">
    <div class="animate form login_form">
        <section class="login_content"><br><br><br>
            <img src="../assets/images/icon.png" alt="logo" width="100px"><br><br>

            <div><br>
                <div class="h1"><?php echo e(config('app.name')); ?></div>
            </div>
            
            <?php echo e(Form::open(['route' => 'password.email'])); ?>

                <h1><?php echo e(__('views.auth.passwords.email.header')); ?></h1>

                <div>
                    <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>"
                            placeholder="<?php echo e(__('views.auth.passwords.email.input')); ?>" required autofocus>
                </div>

                <?php if(session('status')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>

                <?php if(!$errors->isEmpty()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $errors->first(); ?>

                    </div>
                <?php endif; ?>

                <div>
                    <button class="btn btn-primary btn-block submit" type="submit"><i class="fa fa-check"></i> Enviar Solicitud </button>
                    
                </div><br>

                <div class="clearfix"></div>
                <p>&copy; <?php echo e(date('Y')); ?> <?php echo e(config('app.name')); ?>. <?php echo e(__('views.auth.passwords.email.copyright')); ?></p>

                
            <?php echo e(Form::close()); ?>

        </section>
    </div>
</div>
<style>
    .passwords_email{
       
        background: rgb(252,218,1);
        background: linear-gradient(177deg, rgba(252,218,1,1) 0%, rgba(130,131,59,1) 50%, rgba(9,45,116,1) 100%);
    }
    p,h1, .h1{
        color: white;
        text-shadow: 0 1px 0 rgba(9,45,116,1) !important;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('styles'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('styles'); ?> <?php echo e(Html::style(mix('assets/auth/css/passwords.css'))); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('auth.layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pertecPagina\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>