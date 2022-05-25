<header id="navbar-spy" class="full-header header-3 style-2">
	<nav id="primary-menu" class="navbar navbar-fixed-top affix" style="display: revert !important;" >
		<div class="row">
			<div class="container" style="padding-right: 0px !important;padding-left: 0px; !important">
				<!-- Brand and toggle get grouped for better mobile display -->
                
				<div class="navbar-header" style="margin-left: 0px !important;">
                    <a class="logo" href="/">
						<img src="assets/images/icon.png" alt="Pertec S.R.L &copy;" style="height: -webkit-fill-available; float: left;" >
					</a>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"
                    style="float: right;margin-right: 35px;">
					    <span class="sr-only">Toggle navigation</span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					    <span class="icon-bar"></span>
					</button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse pull-right collapse in" id="bs-example-navbar-collapse-1" style="padding-right: 0% !important">
					<ul class="nav navbar-nav navbar-left" style="display: unset !important;" >
						<li class="has-dropdown active">
							<a href="/" >Inicio</a>
						</li>
						<!-- li end -->
						<li class="has-dropdown">
							<a href="#" class="my-menu-link" name="sectionAboutUs">¿Quiénes Somos?</a>
						</li>
                        <li class="has-dropdown">
							<a href="#" data-toggle="dropdown" name="sectionProducts" class="dropdown-toggle my-menu-link">Productos</a>
							<ul class="dropdown-menu" style="border-radius: 10px;">
								<li>
									<a href="/productos">Catálogo</a>
								</li>
								<li>
									<a href="/prom_products">Promociones</a>
								</li>
								<li>
									<a href="/nov_products">Novedades</a>
								</li>
                                <li>
									<a href="/contactanos">Cotización</a>
								</li>
							</ul>
						</li>
						<!-- li end -->
						<li class="has-dropdown">
							<a href="#" class="my-menu-link" name="sectionStores">Oficinas y Tiendas</a>
						</li>
						<li class="has-dropdown pull-left">
							<a href="/contactanos">Contacto</a>
						</li>
					</ul>
                    <?php if(!auth()->guest()): ?>
                    <div class="module module-search pull-left" style="margin-right: 25px;">
                        <div class="search-icon">
                           <strong  style="color: white; width: 20px;font-size: 1.8rem;">|
                             <i class="fa fa-search" style="font-size: 1.8rem;"></i></strong>
                        </div>

                        <div class="search-box">
                            <form class="search-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder=" &nbsp; Buscar">
                                    <span class="input-group-addon" style="border-radius: 20px;background: #093070;color: white;">
                                        <i class="fa fa-search"></i></span>
                                    </div>
                            </form>
                        </div>
                    </div>

                    <div class="module module-search" style="padding-top: 5px;">
                        <div class="search-icon user-icon-margin">
                            <i class="fa fa-user-circle" style="font-size: 1.8rem;padding-left: 0px !important;padding-right: 0px !important;"></i>
                        </div>
                        <div class="search-box navbar-nav" style="height: auto; width: 165px; padding-top: 10px; padding-left: 20px;">
                            <div class="cart-icon">
                                <ul class="list-unstyled user-menu">
                                    <?php if(Auth::user()->name == "Admin"): ?>
                                        <li>
                                            <a href="/admin" style="color: #A6A69B;">Panel Administrativo</a>
                                        </li>
                                    <?php endif; ?>
                                    <hr>
                                    <li>
                                        <a href="<?php echo e(route('users.showFront', Auth::user()->id)); ?>" style="color: #A6A69B;">Mi perfil</a>
                                    </li>
                                    <li>
                                        <a href="mis_pedidos" style="color: #A6A69B;">Mis pedidos</a>
                                    </li>
                                    <li >
                                        <a href="invoices" style="color: #A6A69B;">Mis facturas</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>">
                                            <i class="fa fa-sign-out pull-right"></i> <?php echo e(__('views.backend.section.header.menu_0')); ?>

                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php else: ?>
                    <div class="module module-search pull-left" style="margin-right: 25px;">
                        <div class="search-icon">
                            <strong  style="color: white; width: 20px;font-size: 1.8rem;">| </strong>
                        </div>
                    </div>

                    <div class="module module-cart pull-right" style="padding-top: 5px;">
                        <div class="cart-icon">
                            <i class="fa fa-user-circle" style="font-size: 1.8rem;" data-toggle="modal" data-target="#myModal"></i>
                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog-login">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title text-center">PERTEC S.R.L &copy;</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="login_content">
                                                <?php echo e(Form::open(['route' => 'login'])); ?>

                                                    <h1 class="text-center"><?php echo e(__('views.auth.login.header')); ?></h1>
                                                    <div>
                                                        <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>"
                                                               placeholder="<?php echo e(__('views.auth.login.input_0')); ?>" required autofocus>
                                                    </div>
                                                    <div>
                                                        <input id="password" type="password" class="form-control" name="password"
                                                               placeholder="<?php echo e(__('views.auth.login.input_1')); ?>" required>
                                                    </div>
                                                    <div class="checkbox al_left ">
                                                        <label style="color: black;">
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
                                                    <?php endif; ?>

                                                    <div style="text-align: center;">
                                                        <button class="btn btn-primary submit btn-lg btn-block p-2" type="submit"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;
                                                            Ingresar</button>
                                                        <a class="btn btn-link btn-sm" href="<?php echo e(route('password.request')); ?>" style="background-color: #ffc527;
                                                        color: #093070;">
                                                            <i class="fa fa-question-circle" aria-hidden="true"></i>&nbsp; <?php echo e(__('views.auth.login.action_1')); ?>

                                                        </a>
                                                    </div>

                                                    <div class="clearfix"></div>
                                                <?php echo e(Form::close()); ?>

                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
				</div>
			</div>
		</div>
	</nav>
</header>
<style>
    .modal-dialog-login{
        margin-top: 90px;
        width: 525px;
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
    .checkbox input{
        color: #093070;
        position:inherit !important;
    }
    .checkbox, .radio {
    /* position: relative; */
    display: inherit;
    /* margin-top: 10px; */
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