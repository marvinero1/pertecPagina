<header id="navbar-spy" class="full-header header-3 style-2">
	<nav id="primary-menu" class="navbar navbar-fixed-top affix" style="display: revert !important;" >
		<div class="row">
			<div class="container" style="padding-right: 0px !important;padding-left: 0px; !important">
				<!-- Brand and toggle get grouped for better mobile display -->
                {{-- style="margin-left: 100px;" --}}
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
							<a href="#" data-toggle="dropdown" class="dropdown-toggle my-menu-link" name="sectionAboutUs">¿Quiénes Somos?</a>
                            <ul class="dropdown-menu" style="border-radius: 10px;">
								<li>
									<a href="/historia">Nuestra Historia</a>
								</li>
							</ul>
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
							<a href="#" data-toggle="dropdown" class="dropdown-toggle my-menu-link" name="sectionStores">Oficinas y Tiendas</a>
                            <ul class="dropdown-menu" style="border-radius: 10px;">
								<li>
									<a href="/tiendasOfinasPertec">Oficinas y tiendas</a>
								</li>
							</ul>
						</li>
						<li class="has-dropdown pull-left">
							<a href="/contactanos">Contacto</a>
						</li>
					</ul>
                    @if (!auth()->guest())
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
                                    <li>
                                        <a href="/profileUser" style="color: #A6A69B;">Mi perfil</a>
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
                    </div>
                    @else
                    <div class="module module-search pull-left" style="margin-right: 25px;">
                        <div class="search-icon">
                            <strong  style="color: white; width: 20px;font-size: 1.8rem;">| </strong>
                        </div>
                    </div>

                    <div class="module module-cart pull-right" style="padding-top: 5px;">
                        <div class="cart-icon">
                            <i class="fa fa-user-circle" style="font-size: 1.8rem;" data-toggle="modal" data-target="#myModal"></i>
                            <div id="myModal" class="modal fade" role="dialog">
                                <div class="modal-dialog">
                            
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Modal Header</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Some text in the modal.</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
