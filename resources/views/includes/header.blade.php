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
							<a href="#" class="my-menu-link" name="sectionAboutUs">¿Quiénes Somos?</a>
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
							<a href="#" class="my-menu-link" name="sectionStores">Oficinas y Tiendas</a>
						</li>
						<!-- li end -->
                        <li class="has-dropdown pull-left">
							<a href="/contacto">Facturas</a>
						</li>
						<li class="has-dropdown pull-left">
							<a href="/contacto">Contacto</a>
						</li>
					</ul>
                    <div class="module module-search pull-left">
                        <div class="search-icon" style="width: 40px;">
                            <img src="../assets/images/favicon/LUPA.png" width="20px;">
                            <span class="title">search</span>
                        </div>
                        <div class="search-box">
                            <form class="search-form">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Buscar">
                                    <span class="input-group-btn">
                                    <button class="btn" type="button"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                            </form>
                        </div>
                    </div>
                    <!-- Mod-->
                    <div class="module module-cart pull-right">
                        <div class="cart-icon">
                            <img src="../assets/images/favicon/USER.png" width="40px;">
                            <span class="title">search</span>
                        </div>
                    </div>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
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
