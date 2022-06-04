<header id="navbar-spy" class="full-header header-3 style-2">
	<nav id="primary-menu" class="navbar navbar-fixed-top affix" style="display: revert !important;" >
		<div class="row">
			<div class="container" style="padding-right: 0px !important;padding-left: 0px; !important">
				<!-- Brand and toggle get grouped for better mobile display -->
                {{-- style="margin-left: 100px;" --}}
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

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse pull-right collapse" id="bs-example-navbar-collapse-1" style="padding-right: 0% !important">
					<ul class="nav navbar-nav navbar-left">
						<li class="has-dropdown active">
							<a href="/" >Inicio</a>
						</li>
						<!-- li end -->
						<li class="has-dropdown">
							<a class="my-menu-link" name="sectionAboutUs">¿Quiénes Somos?</a>
						</li>
                        <li class="has-dropdown">
							<a href="#" data-toggle="dropdown" name="sectionProducts" class="dropdown-toggle my-menu-link">Productos</a>
							<ul class="dropdown-menu" style="border-radius: 10px;">
								<li>
									<a href="/productos">Catálogo <i class="fa fa-angle-right icon-margin" style="float: right;" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="/prom_products">Promociones <i class="fa fa-angle-right icon-margin" style="float: right;" aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="/nov_products">Novedades <i class="fa fa-angle-right icon-margin" style="float: right;" aria-hidden="true"></i></a>
								</li>
                                <li>
									<a href="/contactanos">Cotización <i class="fa fa-angle-right icon-margin" style="float: right;" aria-hidden="true"></i></a>
								</li>
							</ul>
						</li>
						<!-- li end -->
						<li class="has-dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle my-menu-link" name="sectionStores">Oficinas y Tiendas</a>
                            <ul class="dropdown-menu" style="border-radius: 10px;">
								<li>
									<a href="/">Oficinas y tiendas</a>
								</li>
							</ul>
						</li>
                        <li class="has-dropdown">
							<a href="/consultasDigitales" target="_blank">Facturas</a>
                            {{-- <ul class="dropdown-menu" style="border-radius: 10px;">
								<li>
									<a href="#">Imprime tu factura</a>
								</li>
							</ul> --}}
						</li>
						<li class="has-dropdown pull-left">
							<a href="/contactanos">Contacto</a>
						</li>
					</ul>
                    @if (!auth()->guest())
                        <div class="module module-search pull-left" style="margin-right: 5px;">
                            <div class="search-icon">
                            <strong class="text-white" style="width: 20px;font-size: 1.8rem;">|
                                <i class="fa fa-search" style="font-size: 1.8rem;"></i></strong>
                            </div>

                            <div class="search-box">
                                <form class="search-form">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder=" &nbsp; Buscar">
                                        <span class="input-group-addon bg-blue text-white" style="border-radius: 20px;">
                                            <i class="fa fa-search"></i></span>
                                        </div>
                                </form>
                            </div>
                        </div>

                        <div class="module module-search pull-left" style="padding-top: 5px;">
                            <div class="search-icon user-icon-margin">
                                <i class="fa fa-user-circle" style="font-size: 1.8rem; padding-left: 0px !important;padding-right: 0px !important;"></i>
                            </div>
                            <div class="search-box navbar-nav" style="height: auto; padding-top: 10px; padding-left: 20px; padding-right: 20px;">
                                <div class="cart-icon">
                                    <ul class="list-unstyled user-menu">
                                        @if (Auth::user()->name == "Admin")
                                            <li>
                                                <a href="/admin" style="color: #A6A69B;">Panel Administrativo</a>
                                            </li>
                                        @endif<hr>
                                        <li>
                                            <a href="{{ route('users.showFront', Auth::user()->id) }}" style="color: #A6A69B;">Mi perfil</a>
                                        </li>
                                        <li>
                                            <a href="/mis_pedidos" style="color: #A6A69B;">Mis pedidos</a>
                                        </li>
                                        <li >
                                            <a href="/invoices" style="color: #A6A69B;">Mis facturas</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}">
                                                <i class="fa fa-sign-out pull-right" style="margin-top: 25px;"></i> {{ __('views.backend.section.header.menu_0') }}
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="module module-search pull-left" style="margin-right: 25px;">
                            <div class="search-icon">
                                <strong class="text-white" style="width: 20px;font-size: 1.8rem;">| </strong>
                            </div>
                        </div>
                        <div class="module module-cart pull-right" style="padding-top: 5px;">
                            <div class="cart-icon">
                                <i class="fa fa-user-circle" style="font-size: 1.8rem;" data-toggle="modal" data-target="#myModal"></i>
                        </div>
                    @endif
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
                    {{ Form::open(['route' => 'login']) }}
                        <h1 class="text-center font-frank-demi color-blue" style="font-weight: 100;">{{ __('views.auth.login.header') }}</h1>
                        <div style="padding: 12px 20px 12px 10px;">
                            <div class="body-details">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                    placeholder="{{ __('views.auth.login.input_0') }}" required autofocus>
                            </div>
                            <div class="body-details">
                                <input id="password" type="password" class="form-control" name="password"
                                    placeholder="{{ __('views.auth.login.input_1') }}" required>
                            </div>
                            <div class="checkbox al_left ">
                                <label class="color-black">
                                    <input type="checkbox" class="checkbox"
                                        name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('views.auth.login.input_2') }}
                                </label>
                            </div>

                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            @if (!$errors->isEmpty())
                                <div class="alert alert-danger" role="alert">
                                    {!! $errors->first() !!}
                                </div>
                            @endif<br><br>

                            <div style="text-align: center;">
                                <button type="submit" class="btn btn-default btn-lg btn-block bg-blue color-white"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;
                                    Ingresar
                                </button>
                                <button type="button" class="btn btn-default btn-lg btn-block bg-yellow color-blue" data-toggle="modal" data-target="#myModalRegister"
                                style="word-break: normal;">
                                    <p class="color-blue" style="margin-bottom: 0px !important;text-align: center;">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        Aún no tienes cuenta, ¡Registrate!
                                    </p>
                                </button>
                            </div>
                        </div>
                    <div class="clearfix"></div>
                    {{ Form::close() }}
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
                        {{ Form::open(['route' => 'register']) }}
                            <h1 class="font-frank-demi" style="font-weight: 100;">{{ __('views.auth.register.header') }}</h1>
                            <div>
                                <input type="text" name="name" class="form-control"
                                        placeholder="{{ __('views.auth.register.input_0') }}"
                                        value="{{ old('name') }}" required autofocus/>
                            </div>
                            <div>
                                <input type="text" name="apellido" class="form-control"
                                        placeholder="{{ __('views.auth.register.input_4') }}"
                                        value="{{ old('apellido') }}" required autofocus/>
                            </div>
                            <div>
                                <label for="{{ __('views.auth.register.input_5') }}">{{ __('views.auth.register.input_5') }}</label>
                                <select id="{{ __('views.auth.register.input_5') }}" name="ciudad" class="form-control form-group"
                                    value="{{ old('ciudad') }}" required autofocus>
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
                                        placeholder="{{ __('views.auth.register.input_6') }}"
                                        value="{{ old('celular') }}" required autofocus/>
                            </div>
                            <div>
                                <input type="text" name="nit" class="form-control"
                                        placeholder="{{ __('views.auth.register.input_7') }}"
                                        value="{{ old('nit') }}" required autofocus/>
                            </div>
                            <div>
                                <input type="email" name="email" class="form-control"
                                        placeholder="{{ __('views.auth.register.input_1') }}"
                                        required/>
                            </div>
                            <div>
                                <input type="password" name="password" class="form-control"
                                        placeholder="{{ __('views.auth.register.input_2') }}"
                                        required=""/>
                            </div>
                            <div>
                                <input type="password" name="password_confirmation" class="form-control"
                                        placeholder="{{ __('views.auth.register.input_3') }}" required/>
                            </div>
                            <div>
                                <input type="text" name="confirmed" value="0" hidden="true">
                                <input type="text" name="rol" value="usuario" hidden="true">
                            </div>

                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            @if (!$errors->isEmpty())
                                <div class="alert alert-danger" role="alert">
                                    {!! $errors->first() !!}
                                </div>
                            @endif

                            @if(config('auth.captcha.registration'))
                                @captcha()
                            @endif
                            <div>
                                <button type="submit" class = "btn btn-default btn-lg btn-block text-white bg-blue"><i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;
                                    {{ __('views.auth.register.action_3') }}
                                </button>
                            </div>
                            <div class="clearfix"></div>
                        {{ Form::close() }}
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
