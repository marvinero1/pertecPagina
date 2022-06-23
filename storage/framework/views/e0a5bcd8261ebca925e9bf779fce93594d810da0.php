<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <meta name="theme-color" content="#ffcb00">
        <meta name="theme-color" content="#ffcb00">
        <meta name="theme-color" content="#ffcb00">

        <!-- Browser Color - Chrome, Firefox OS, Opera -->
        <meta name="theme-color" content="#ffcb00"> 
        <!-- Browser Color - Windows Phone -->
        <meta name="msapplication-navbutton-color" content="#ffcb00"> 
        <!-- Browser Color - iOS Safari -->
        <meta name="apple-mobile-web-app-status-bar-style" content="#ffcb00">

        
        <title><?php echo e(config('app.name')); ?></title>
        
        <script type='text/javascript'>
            document.oncontextmenu = function(){return false}
        </script>
        
        <?php echo e(Html::style(mix('assets/app/css/app.css'))); ?> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        
        <?php echo $__env->yieldContent('styles'); ?>

        
        <?php echo $__env->yieldContent('head'); ?>    
        <link href="http://fonts.cdnfonts.com/css/franklin-gothic-demi-2" rel="stylesheet">
                
    </head>
    
    <body class="<?php echo $__env->yieldContent('body_class'); ?>"> 
        
        <?php echo $__env->yieldContent('page'); ?>

        
        <?php echo e(Html::script(mix('assets/app/js/app.js'))); ?> 

        
        <script> window.Laravel = {"locale":"en"}</script>

        
        <?php echo $__env->yieldContent('scripts'); ?>
        <script type='text/javascript'>
            document.oncontextmenu = function(){return false}
        </script>
    </body>
</html>
<?php /**PATH C:\laragon\www\pertecPagina\resources\views/layouts/app.blade.php ENDPATH**/ ?>