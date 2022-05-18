<header id="navbar-spy" class="full-header header-3 style-2">
	<nav id="primary-menu" class="navbar navbar-fixed-top affix" style="display: revert !important;" >
		<div class="row">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
                {{-- style="margin-left: 100px;" --}}
				<div class="navbar-header" >
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="logo" href="/">
						<img src="../assets/images/favicon/Logotipo.png" alt="PERTEC" style="height: -webkit-fill-available;" >
					</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1" >
					<ul class="nav navbar-nav navbar-left" style="display: unset !important;" >
						<li class="has-dropdown active">
							<a href="/" >Inicio</a>
						</li>
						<!-- li end -->
						<li class="has-dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle my-menu-link" name="sectionAboutUs">¿Quiénes Somos?</a>
                            <ul class="dropdown-menu" style="border-radius: 10px;">
								<li>
									<a href="/aboutUs">Nuestra Historia</a>
								</li>
							</ul>
						</li>
                        <li class="has-dropdown">
							<a href="#" data-toggle="dropdown" name="sectionProducts" class="dropdown-toggle my-menu-link">Productos</a>
							<ul class="dropdown-menu" style="border-radius: 10px;">
								<li>
									<a href="/fullProducts">Catálogo</a>
								</li>
								<li>
									<a href="/fullProdPromo">Promociones</a>
								</li>
								<li>
									<a href="/fullProdNoved">Novedades</a>
								</li>
                                <li>
									<a href="#">Cotización</a>
								</li>
							</ul>
						</li>
						<!-- li end -->
						<li class="has-dropdown">
							<a href="#" data-toggle="dropdown" class="dropdown-toggle my-menu-link" name="sectionStores">Oficinas y Tiendas</a>
                            <ul class="dropdown-menu" style="border-radius: 10px;">
								<li>
									<a href="/sucursales">Oficinas y tiendas</a>
								</li>
							</ul>
						</li>
						<li class="has-dropdown pull-left">
							<a href="/contacto">Contacto</a>
						</li>
					</ul>


                    @if (!auth()->guest())
                    <div class="module module-search pull-left">
                        <div class="search-icon">
                            <img src="../assets/images/favicon/LUPA.png" width="20px;">
                            <span class="title">Buscar</span>
                        </div>
                        <div class="search-box">
                            <form class="search-form">
                                <div class="input-group" style="width: 89%;">
                                    <input type="text" class="form-control" placeholder="Buscar">
                                    <span class="input-group-btn">
                                    <button class="btn" type="button" style="position: absolute;"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="module module-search pull-right">
                        <div class="search-icon user-icon-margin">
                            <img src="../assets/images/favicon/USER.png" width="40px;">
                            <span class="title">Iniciar Sesión</span>
                        </div>
                        <div class="search-box navbar-nav" style="height: auto; width: 165px; padding-top: 10px; padding-left: 20px;">
                            <ul class="list-unstyled user-menu">
                                <li>
                                    <a href="#" style="color: #A6A69B;">Mi perfil</a>
                                </li>
                                <li>
                                    <a href="/pedidos" style="color: #A6A69B;">Mis pedidos</a>
                                </li>
                                <li >
                                    <a href="/facturas" style="color: #A6A69B;">Mis facturas</a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"
                                        style="color: #A6A69B;">Cerrar sesión
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>

                        </div>
                    </div>
                    @else
                    <div class="module module-search pull-left">
                        <div class="search-icon">
                            <img src="../assets/images/favicon/LUPA.png" width="20px;">
                            <span class="title">Buscar</span>
                        </div>
                        <div class="search-box">
                            <form class="search-form">
                                <div class="input-group" style="width: 89%;">
                                    <input type="text" class="form-control" placeholder="Buscar">
                                    <span class="input-group-btn">
                                    <button class="btn" type="button" style="position: absolute;"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="module module-cart pull-right">
                        <div class="cart-icon">
                            <img src="../assets/images/favicon/USER.png" width="40px;">
                            <span class="title">Iniciar Sesión</span>
                        </div>
                    </div>
                    @endif
				</div>
			</div>
		</div>
	</nav>
</header>


<script>
    $(function () {
  $(document).scroll(function () {
	  var $nav = $(".navbar-fixed-top");
	  $nav.toggleClass('affix-scrooll', $(this).scrollTop() > $nav.height());
	});
});

</script>
