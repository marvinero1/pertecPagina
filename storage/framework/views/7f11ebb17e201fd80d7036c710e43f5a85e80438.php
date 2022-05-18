<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- Meta title & meta -->
    <?php print app('meta')->render(); ?>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Franklin Gothic Demi', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .footer {
            position: fixed;
            width: 100%;
            height: 20px;
            padding: 5px;
            bottom: 0px;
            font-size: smaller;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>

    <!-- Laravel variables for js -->
    <script> window.Laravel = {"locale":"en"}</script>
</head>

<body>
    <div class="flex-center position-ref full-height">

        <div class="top-right links">
            <a href="<?php echo e(route('protection.membership')); ?>"><?php echo e(__('views.welcome.member_area')); ?></a>

            <?php if(Route::has('login')): ?>
                <?php if(!Auth::check()): ?>
                    <?php if(config('auth.users.registration')): ?>
                        <a href="<?php echo e(url('/register')); ?>"><?php echo e(__('views.welcome.register')); ?></a>
                        <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                        data-target="#myModal"><?php echo e(__('views.welcome.register.Modal')); ?></button>
                    <?php endif; ?>
                    <a href="<?php echo e(url('/login')); ?>"><?php echo e(__('views.welcome.login')); ?></a>
                <?php else: ?>
                    <?php if(auth()->user()->hasRole('administrator')): ?>
                    <a href="<?php echo e(url('/admin')); ?>"><?php echo e(__('views.welcome.admin')); ?></a>
                    <?php endif; ?>
                <a href="<?php echo e(url('/logout')); ?>"><?php echo e(__('views.welcome.logout')); ?></a>
                <?php endif; ?>
            <?php endif; ?>
        </div>


        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Modal Header</h4>
                    </div>
                    <div class="modal-body">
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

        <div class="content">
            <?php echo $__env->yieldContent('content'); ?>
            <div class="footer">
                
            </div>
            <script type='text/javascript'>
                document.oncontextmenu = function () {
                    return false
                }
            </script>
        </div>

    </div>
</body>

</html><?php /**PATH C:\laragon\www\pertecPagina\resources\views/layouts/welcome.blade.php ENDPATH**/ ?>