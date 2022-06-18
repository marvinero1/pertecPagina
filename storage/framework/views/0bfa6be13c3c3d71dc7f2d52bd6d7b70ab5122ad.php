<footer id="footer" class="footer-1">
	<!-- Contact Bar
	============================================= -->
	<!-- .container end -->
	<!-- Widget Section
	============================================= -->
	<div class="content" style="padding-right: 11px;">
		<div class="row" style="margin-right: 11px;">
			<div class="col-xs-12 col-sm-12 col-md-12 widgets-links info-footer">
				<div class="col-xs-12 col-sm-12 col-md-4 widget-links text-center-xs mb-30-xs">
                    <div class="widget-about-logo pull-left pull-none-xs" style="padding-block-end: 10px;">
						<img src="../assets/images/icon.png" alt="logo" width="80px"/>
					</div>
					<div class="widget-about-info ini-footer">
						<h4 class="text-capitalize text-white p-subtitle">PERTEC S.R.L.</h4>
						<p class="mb-0 text-white p-texto">
						Somos una empresa dedicada a la venta de elementos de sujeción aportando al crecimiento de nuestro país desde 1985.</p>
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-3 widget-links text-center-xs mb-30-xs">
					<div class="widget-about-info">
						<div class="row">
							<h4 class="text-capitalize text-white p-subtitle">Mapa del sitio</h4>
							<ul class="list-unstyled">
								<li>
									<a href="/"> Inicio</a>
								</li>
								<li>
									<a href="#" class="my-menu-link" name="sectionAboutUs"> ¿Quiénes Somos?</a>
								</li>
								<li>
									<a href="#" class="my-menu-link" name="sectionStores"> Oficinas y tiendas</a>
								</li>
								<li>
									<a href="/productos"> Productos</a>
								</li>
								
								<li>
									<a href="/contactanos"> Contacto</a>
								</li>
								<li>
									<a href="/contactanos"> Trabaja con nosotros</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

                <div class="col-xs-12 col-sm-12 col-md-2 widget-links text-center-xs mb-30-xs">
					<div class="widget-about-info">
                        <div class="row">
							<h4 class="text-capitalize text-white p-subtitle">Legal</h4>
							<ul class="list-unstyled">
								<li>
									<a data-toggle="modal" data-target="#ModalTerminos"> Términos y Condiciones.</a>
								</li>
								<li>
									<a data-toggle="modal" data-target="#ModalPolitica"> Política de privacidad.</a>
								</li>
								<li>
									<a data-toggle="modal" data-target="#ModalReglas"> Reglas de contenido.</a>
								</li>
							</ul>
					    </div>
					</div>
				</div>
                <div class="col-xs-12 col-sm-12 col-md-3 widget-links text-center-xs mb-30-xs">
					<div class="widget-about-info time-attention">
						<h4 class="text-capitalize text-white p-subtitle">Horarios de atención</h4>
						<p class="mb-0">De Lunes a Viernes</p>
                        <p class="mb-0" style="margin-top: 2px;">Mañana 08:00 a 12:00 hrs.</p>
                        <p class="mb-0" style="margin-top: 2px;">Tarde 14:00 a 18:30 hrs.</p>
                        <br>
                        <p class="mb-0">Sábado</p>
                        <p class="mb-0" style="margin-top: 2px;">Mañana 08:15 a 12:30 hrs.</p>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- Copyrights
	============================================= -->
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 copyrights text-center label1" style="color: white; font-size: 1.2rem;">
                <label class="font-frank-medium label1"> PERTEC SRL </label>
                <label class="font-frank-book label1">Copyright &copy; </label>
                <label id="yearcopy" class="font-frank-book label1">. </label>
                <label class="font-frank-book label1"> Todos los derechos reservados.</label>
			</div>
		</div>
	</div>






    <style>
        @media (min-width: 768px) {
            .ini-footer h4, .ini-footer p {
                text-align: justify !important;padding: 0px 125px 0px 99px;
            }
        }
        @media (max-width: 767px) {
            .ini-footer h4, .ini-footer p {
                text-align: center !important;
            }
            .time-attention p {
                text-align: center !important;
            }
        }
        @media (max-width: 600px) {
            .ini-footer h4, .ini-footer p {
                padding: 0px 25px 0px 35px;
            }
        }

    </style>
</footer>
<?php echo $__env->make('page.sections.terminos.politica', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('page.sections.terminos.reglas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('page.sections.terminos.terminos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style>
	.label1{
		cursor: none;
	}
</style>
<script>
    var y = new Date().getFullYear();
    document.getElementById("yearcopy").innerHTML = y;
</script>
<?php /**PATH C:\laragon\www\repoCompletoPertec\pertecPagina\resources\views/page/layouts/footer.blade.php ENDPATH**/ ?>