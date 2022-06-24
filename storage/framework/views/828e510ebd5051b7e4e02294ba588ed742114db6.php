<header id="navbar-spy" class="full-header header-3 style-2">
	<nav id="primary-menu" class="navbar navbar-fixed-top affix" style="display: revert !important;" >
		<div class="row">
			<div class="container" style="padding-right: 0px !important;padding-left: 0px !important; margin: 0 4% 0 4%; width: -webkit-fill-available;">
				<div class="navbar-header">
                    <a class="logo" href="/">
						<img src="../assets/images/icon.png" alt="Pertec S.R.L &copy;" style="height: -webkit-fill-available; float: left;" >
					</a>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"
                    style="float: right;margin-right: 35px;">
					    <span class="sr-only">Toggle navigation</span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse pull-right collapse" id="bs-example-navbar-collapse-1" style="padding-right: 0% !important">
					<ul class="nav navbar-nav navbar-left">
						<li class="has-dropdown active tama-font-nav">
							<a href="/" >Inicio</a>
						</li>
						<!-- li end -->
						<li class="has-dropdown tama-font-nav">
							<a class="my-menu-link" name="sectionAboutUs">¿Quiénes Somos?</a>
						</li>
                        <li class="has-dropdown tama-font-nav">
							<a href="#" data-toggle="dropdown" name="sectionProducts" class="dropdown-toggle my-menu-link">Productos</a>
							<ul class="dropdown-menu tam-rep-submenu" style="border-radius: 10px;">
								<li>
									<a href="/productos" class="op-prod-1">Catálogo <i class="fa fa-angle-right icon-margin" style="float: right;" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="/prom_products" class="op-prod-2">Promociones <i class="fa fa-angle-right icon-margin" style="float: right;" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="/nov_products" class="op-prod-3">Novedades <i class="fa fa-angle-right icon-margin" style="float: right;" aria-hidden="true"></i></a>
								</li>
                                <li>
									<a href="/contactanos" class="op-prod-4">Cotización <i class="fa fa-angle-right icon-margin" style="float: right;" aria-hidden="true"></i></a>
								</li>
							</ul>
						</li>
						<!-- li end -->
						<li class="has-dropdown tama-font-nav">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle my-menu-link" name="sectionStores">Oficinas y Tiendas</a>
                            <ul class="dropdown-menu tam-rep-submenu" style="border-radius: 10px; height: auto !important;width: auto;">
								<li>
									<a href="/">Oficinas y tiendas</a>
								</li>
							</ul>
						</li>
                        <li class="has-dropdown tama-font-nav">
							<a href="/consultasDigitales" target="_blank">Facturas</a>
                            
						</li>
						<li class="has-dropdown pull-left tama-font-nav">
							<a href="/contactanos">Contacto</a>
						</li>
					</ul>
                    <?php if(!auth()->guest()): ?>
                        <div class="module module-search pull-left tama-div" style="margin-right: 5px;">
                            <div class="search-icon" style="height: 100%;">
                                <strong class="text-white icon-tama-resp" style="width: 20px;font-size: 1.8rem;">|
                                <i class="fa fa-search icon-tama-resp" style="font-size: 1.8rem;"></i></strong>
                            </div>

                            <div class="search-box poss-seting-nav">
                                <form class="search-form">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder=" &nbsp; Buscar" name="buscarpor">
                                        <span type="button" class="input-group-addon bg-blue text-white" style="border-radius: 20px;">
                                            <i class="fa fa-search"></i></span>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="module module-search pull-left tama-div" style="padding-top: 5px;">
                            <div class="search-icon user-icon-margin" style="height: 100%;">
                                <i class="fa fa-user-circle icon-tama-resp" style="font-size: 1.8rem; padding-left: 0px !important;padding-right: 0px !important;"></i>
                            </div>

                            <div class="search-box navbar-nav poss-seting-nav" style="height: auto; padding-top: 10px; padding-left: 20px; padding-right: 20px;">
                                <div class="cart-icon">
                                    <ul class="list-unstyled user-menu tama-font-nav">
                                        <?php if(Auth::user()->name == "Admin"): ?>
                                            <li>
                                                <a href="/admin" style="color: #A6A69B;">Panel Administrativo</a>
                                            </li>
                                        <?php endif; ?><hr>
                                        <li>
                                            <a href="<?php echo e(route('users.showFront', Auth::user()->id)); ?>" style="color: #A6A69B;">Mi perfil</a>
                                        </li>
                                        <li>
                                            <a href="/mis_pedidos" style="color: #A6A69B;">Mis pedidos</a>
                                        </li>
                                        <li >
                                            <a href="/invoices" style="color: #A6A69B;">Mis facturas</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo e(route('logout')); ?>">
                                                <i class="fa fa-sign-out pull-right" style="margin-top: 25px;"></i> <?php echo e(__('views.backend.section.header.menu_0')); ?>

                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="module module-search pull-left tama-div" style="margin-right: 5px;">
                            <div class="search-icon" style="height: 100%;">
                            <strong class="text-white icon-tama-resp" style="width: 20px;font-size: 1.8rem;">|
                                <i class="fa fa-search icon-tama-resp" style="font-size: 1.8rem;"></i></strong>
                            </div>

                            <div class="search-box poss-seting-nav">
                                <form class="search-form">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder=" &nbsp; Buscar" name="buscarpor">
                                        <span type="button" class="input-group-addon bg-blue text-white" style="border-radius: 20px;">
                                            <i class="fa fa-search"></i></span>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="module module-cart pull-right tama-div" style="padding-top: 5px;">
                            <div class="cart-icon poss-seting-nav search-icon" style="height: 100%;">
                                <i class="fa fa-user-circle icon-tama-resp" style="font-size: 1.8rem; padding-left: 0px !important;padding-right: 0px !important;" data-toggle="modal" data-target="#myModal"></i>
                        </div>
                    <?php endif; ?>
				</div>
			</div>
		</div>
	</nav>
</header>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog-login">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center font-frank-demi color-blue" style="font-weight: 100;">PERTEC S.R.L &copy;</h4>
            </div>
            <div class="modal-body" style="margin-top: 5px !important;margin-bottom: 5px !important;">
                <div class="login_content">
                    <?php echo e(Form::open(['route' => 'login'])); ?>

                        <h1 class="text-center font-frank-demi color-blue" style="font-weight: 100;"><?php echo e(__('views.auth.login.header')); ?></h1>
                        <div style="padding: 12px 20px 12px 10px;">
                            <div class="body-details">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>"
                                    placeholder="<?php echo e(__('views.auth.login.input_0')); ?>" required autofocus>
                            </div>
                            <div class="body-details">
                                <input id="password" type="password" class="form-control" name="password"
                                    placeholder="<?php echo e(__('views.auth.login.input_1')); ?>" required>
                            </div>
                            <div class="checkbox al_left ">
                                <label class="color-black">
                                    <input type="checkbox" class="checkbox"
                                        name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> <?php echo e(__('views.auth.login.input_2')); ?>

                                </label>
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
                            <?php endif; ?><br><br>

                            <div style="text-align: center;">
                                <button type="submit" class="btn btn-default btn-lg btn-block bg-blue color-white"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;
                                    Ingresar
                                </button>
                                <button type="button" class="btn btn-default btn-lg btn-block bg-yellow color-blue" data-toggle="modal" data-target="#myModalRegister"
                                style="word-break: normal; white-space: normal;">
                                    <p class="color-blue" style="margin-bottom: 0px !important;text-align: center;">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        Aún no tienes cuenta, ¡Registrate!
                                    </p>
                                </button>
                            </div>
                        </div>
                    <div class="clearfix"></div>
                    <?php echo e(Form::close()); ?>

                </div>
            </div>
        </div>
    </div>
</div>

 <!-- ModalRegister -->
 <div id="myModalRegister" class="modal fade" role="dialog">
    <div class="modal-dialog-register">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title text-center font-frank-demi" style="font-weight: 100;">Registrate</h4>
            </div>
            <div class="modal-body" style="padding: 0px 45px 0px !important; margin-top: 27px;">
                <div class="login_wrapper">
                    <div class="animate form body-details" style="padding: 0px 0px 54px 0px !important;">
                        <?php echo e(Form::open(['route' => 'register'])); ?>

                            <h1 class="font-frank-demi" style="font-weight: 100;"><?php echo e(__('views.auth.register.header')); ?></h1>
                            <div>
                                <input type="text" name="name" class="form-control"
                                        placeholder="<?php echo e(__('views.auth.register.input_0')); ?>"
                                        value="<?php echo e(old('name')); ?>" required autofocus/>
                            </div>
                            <div>
                                <input type="text" name="apellido" class="form-control"
                                        placeholder="<?php echo e(__('views.auth.register.input_4')); ?>"
                                        value="<?php echo e(old('apellido')); ?>" required autofocus/>
                            </div>
                            <div>
                                <label for="<?php echo e(__('views.auth.register.input_5')); ?>"><?php echo e(__('views.auth.register.input_5')); ?></label>
                                <select id="<?php echo e(__('views.auth.register.input_5')); ?>" name="ciudad" class="form-control form-group"
                                    value="<?php echo e(old('ciudad')); ?>" required autofocus>
                                    <option>Elige</option>
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
                                        placeholder="<?php echo e(__('views.auth.register.input_6')); ?>"
                                        value="<?php echo e(old('celular')); ?>" required autofocus/>
                            </div>
                            <div>
                                <input type="text" name="nit" class="form-control"
                                        placeholder="<?php echo e(__('views.auth.register.input_7')); ?>"
                                        value="<?php echo e(old('nit')); ?>" required autofocus/>
                            </div>
                            <div>
                                <input type="email" name="email" class="form-control"
                                        placeholder="<?php echo e(__('views.auth.register.input_1')); ?>"
                                        required/>
                            </div>
                            <div>
                                <input type="password" name="password" class="form-control"
                                        placeholder="<?php echo e(__('views.auth.register.input_2')); ?>"
                                        required=""/>
                            </div>
                            <div>
                                <input type="password" name="password_confirmation" class="form-control"
                                        placeholder="<?php echo e(__('views.auth.register.input_3')); ?>" required/>
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
                                <button type="submit" class = "btn btn-default btn-lg btn-block text-white bg-blue"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;
                                    <?php echo e(__('views.auth.register.action_3')); ?>

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


    .modal-dialog-login{
        margin-top: 90px;
        width: auto;
    }
    .modal-dialog-register{
        margin-top: 90px;
        width: auto;
    }
    .modal-open .modal{
        background-color: rgb(9, 48, 106, 0.6) !important;
    }
    .modal-header{
        border-bottom: none;
        background-color: #FBD800;
        padding: 20px;
    }
    @media (min-width:768px) {
        .modal-dialog-login {
            width: 600px;
            margin: 90px auto;
        }
    }
    @media (min-width:768px) {
        .modal-dialog-register {
            width: 620px;
            margin: 40px auto;
        }
    }
    .checkbox input{
        color: #093070;
        position:inherit !important;
    }
    .checkbox, .radio {
        display: inherit;
        margin-bottom: 10px
    }
    .modal-body{
        padding: 30px 45px 20px;
    }
    .btn-primary {
        background-color: #093070;
        color: #fff;
        border: 1px solid #ffc527;
    }
</style>

<script>
    $(function () {
    $(document).scroll(function () {
        var $nav = $(".navbar-fixed-top");
        $nav.toggleClass('affix-scrooll', $(this).scrollTop() > $nav.height());
        });
    });
</script>
<?php /**PATH C:\laragon\www\pertecPagina\resources\views/page/layouts/header.blade.php ENDPATH**/ ?>