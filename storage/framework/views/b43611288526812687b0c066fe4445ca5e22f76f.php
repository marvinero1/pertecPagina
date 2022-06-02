

<?php $__env->startSection('content'); ?>



<section class="section about-section gray-bg" id="about" style="padding-top: 240px">
    <div class="content section-content">
        <div class="row align-items-center flex-row-reverse" style="margin-left: 40px;">
            <div class="col-lg-8">
                <div class="about-text go-to">
                    <h3 class="dark-color font-frank-demi">Mi Perfil</h3>
                    <?php if($user_id->confirmed != 1): ?>
                        <h6 class="theme-color lead font-frank-demi">Usuario No Verificado <i class="fa fa-times-circle-o" aria-hidden="true"></i></h6>
                    <?php else: ?>
                    <h6 class="lead font-frank-demi" style="color: green">Usuario Verificado <i class="fa fa-check-circle-o" aria-hidden="true"></i></h6>
                    <?php endif; ?>
                        <div class="row about-list">
                            <div class="col-md-6">
                                <div class="media">
                                    <label>Código de Usuario</label>
                                    <p><?php echo e($user_id->id); ?></p>
                                </div>
                                <div class="media">
                                    <label>Nombres</label>
                                    <p><?php echo e($user_id->name); ?></p>
                                </div>
                                <div class="media">
                                    <label>Apellidos</label>
                                    <p><?php echo e($user_id->apellido); ?></p>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="media">
                                    <label>Ciudad</label>
                                    <p><?php echo e($user_id->ciudad); ?></p>
                                </div>
                                <div class="media">
                                    <label>Celular</label>
                                    <p><?php echo e($user_id->celular); ?></p>
                                </div>
                                <div class="media">
                                    <label>NIT/CI</label>
                                    <p><?php echo e($user_id->nit); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="row about-list">
                            <div class="col-md-12">
                                <div class="media">
                                    <label>Correo</label>
                                    <p><?php echo e($user_id->email); ?></p>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-lg-4" style="text-align: center; margin-left: -5%;">
                <div class="about-avatar">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" title="" alt="">
                </div><br>
                <div class="row">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#myModalUpdate" style="height: 35px; font-size: 1.5rem;">Actualizar Datos</button>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="counter">
            <div class="row">
                <div class="col-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="500" data-speed="500">500</h6>
                        <p class="m-0px font-w-600">Pedidos Realizados</p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="150" data-speed="150">150</h6>
                        <p class="m-0px font-w-600">Facturaciones Completas</p>
                    </div>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-4">
                    <div class="count-data text-center">
                        <h6 class="count h2" data-to="850" data-speed="850">850</h6>
                        <p class="m-0px font-w-600">Total de Productos</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


 <!-- ModalUpdate -->
 <div id="myModalUpdate" class="modal fade" role="dialog">
    <div class="modal-dialog-register">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center font-title-user-mod" style="font-size: 2rem;">Actualiza tus Datos</h4>
            </div>
            <div class="modal-body" style="padding: 0px 45px 0px !important; margin-top: 27px;">
                <div class="login_wrapper">
                    <div class="animate form body-details" style="padding: 0px 0px 54px 0px !important;">
                        <?php echo e(Form::open(['route' => 'register'])); ?>

                            <h1 class="font-title-user-mod"><?php echo e(__('views.auth.update.header')); ?></h1>
                            <div>
                                <input type="text" name="name" class="form-control body-details"
                                        placeholder="<?php echo e(__('views.auth.update.input_0')); ?>"
                                        value="<?php echo e($user_id->name); ?>" required autofocus/>
                            </div>
                            <div>
                                <input type="text" name="apellido" class="form-control"
                                        placeholder="<?php echo e(__('views.auth.update.input_4')); ?>"
                                        value="<?php echo e($user_id->apellido); ?>" required autofocus/>
                            </div>
                            <div>
                                <label for="<?php echo e(__('views.auth.update.input_5')); ?>"><?php echo e(__('views.auth.update.input_5')); ?></label>
                                <select id="<?php echo e(__('views.auth.update.input_5')); ?>" name="ciudad" class="form-control form-group"
                                    value="<?php echo e($user_id->ciudad); ?>" required autofocus>
                                    <option><?php echo e($user_id->ciudad); ?></option>
                                    <option value="La Paz">La Paz</option>
                                    <option value="Oruro">Oruro</option>
                                    <option value="Potosi">Potosi</option>
                                    <option value="Cochabamba">Cochabamba</option>
                                    <option value="Sucre">Sucre</option>
                                    <option value="Tarija">Tarija</option>
                                    <option value="Santa Cruz">Santa Cruz</option>
                                    <option value="Beni">Beni</option>
                                    <option value="Pando">Pando</option>
                                </select>
                            </div>
                            <div>
                                <input type="text" name="celular" class="form-control"
                                        placeholder="<?php echo e(__('views.auth.update.input_6')); ?>"
                                        value="<?php echo e($user_id->celular); ?>" required autofocus/>
                            </div>
                            <div>
                                <input type="text" name="nit" class="form-control"
                                        placeholder="<?php echo e(__('views.auth.update.input_7')); ?>"
                                        value="<?php echo e($user_id->nit); ?>" required autofocus/>
                            </div>
                            <div>
                                <input type="email" name="email" class="form-control"
                                        placeholder="<?php echo e(__('views.auth.update.input_1')); ?>"
                                        value="<?php echo e($user_id->email); ?>" required/>
                            </div>
                            <div>
                                <input type="password" name="password" class="form-control"
                                        placeholder="<?php echo e(__('views.auth.update.input_2')); ?>"
                                        required=""/>
                            </div>
                            <div>
                                <input type="password" name="password_confirmation" class="form-control"
                                        placeholder="<?php echo e(__('views.auth.update.input_3')); ?>" required/>
                            </div>
                            <div>
                                <input type="text" name="confirmed" value="0" hidden="true">
                                <input type="text" name="rol" value="usuario" hidden="true">
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

                            <?php if(config('auth.captcha.registration')): ?>
                                <?php echo app('captcha')->renderCaptcha(); ?>
                            <?php endif; ?>
                            <div>
                                <button type="submit" class = "btn btn-default btn-lg btn-block" style="background-color: #093070;color:#fff"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;
                                    <?php echo e(__('views.auth.update.action_3')); ?>

                                </button>
                            </div>
                            <div class="clearfix"></div>
                        <?php echo e(Form::close()); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<style>
    .section {
        padding: 100px 0;
        position: relative;
    }

    .gray-bg, br {
        background-color: #f5f5f5;
    }

    img {
        max-width: 100%;
    }

    img {
        vertical-align: middle;
        border-style: none;
    }

    /* About Me
---------------------*/
    .about-text h3 {
        font-size: 4.5rem;
        font-weight: 100;
        margin: 0 0 6px;
    }

    @media (max-width: 767px) {
        .about-text h3 {
            font-size: 35px;
        }
    }

    .about-text h6 {
        margin-bottom: 15px;
        font-size: 1.6rem;
    }

    @media (max-width: 767px) {
        .about-text h6 {
            font-size: 18px;
        }
    }

    .about-text p {
        font-size: 18px;
        max-width: 450px;
    }

    .about-text p mark {
        font-weight: 600;
        color: #093070;
    }

    .about-list {
        padding-top: 10px;
    }

    .about-list .media {
        padding: 5px 0;
    }

    .about-list label {
        color: #093070;
        font-weight: 600;
        font-size: 1.4rem;
        width: 180px;
        margin: 0;
        position: relative;
    }

    .about-list label:after {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        right: 11px;
        width: 1px;
        height: 12px;
        background: #093070;
        -moz-transform: rotate(15deg);
        -o-transform: rotate(15deg);
        -ms-transform: rotate(15deg);
        -webkit-transform: rotate(15deg);
        transform: rotate(15deg);
        margin: auto;
        opacity: 0.5;
    }

    .about-list p {
        margin: 0;
        font-size: 1.3rem;
    }

    @media (max-width: 991px) {
        .about-avatar {
            margin-top: 30px;
        }
    }

    .about-section .counter {
        padding: 22px 20px;
        background: #ffffff;
        border-radius: 10px;
        box-shadow: 0 0 30px rgba(31, 45, 61, 0.125);
    }

    .about-section .counter .count-data {
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .about-section .counter .count {
        font-weight: 700;
        color: #093070;
        margin: 0 0 5px;
    }

    .about-section .counter p {
        font-weight: 600;
        font-size: 1.3rem;
        margin: 0;
    }

    mark {
        background-image: linear-gradient(rgba(252, 83, 86, 0.6), rgba(252, 83, 86, 0.6));
        background-size: 100% 3px;
        background-repeat: no-repeat;
        background-position: 0 bottom;
        background-color: transparent;
        padding: 0;
        color: currentColor;
    }

    .theme-color {
        color: #fc5356;
    }

    .dark-color {
        color: #093070;
    }

</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('page.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pertecPagina\resources\views/page/sections/usuario/profile.blade.php ENDPATH**/ ?>