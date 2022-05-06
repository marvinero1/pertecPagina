@extends('includes.main')

@section('content')

<section id="hero" class="hero hero-4">
	
	<!-- START REVOLUTION SLIDER 5.0 -->
	<div class="rev_slider_wrapper">
		<div id="slider1" class="rev_slider"  data-version="5.0">
			<ul>
				
				<!-- slide 1 -->
				<li data-transition="3dcurtain-vertical" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" style="background-color: rgba(34, 34, 34, 0.3);">
					<!-- MAIN IMAGE -->
					<img src="assets/images/sliders/2.jpg"  alt="Background"  width="1920" height="1280">
					<!-- LAYER NR. 1 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="-120" 
						data-whitespace="nowrap"
						data-width="['80','70','70','100']"
						data-height="['80','70','70','100']"
						data-transform_idle="o:1;"
						data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
						data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
						data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
						data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
						data-start="3000" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on"
						data-lineheight="['80','100','100','100']"
						style="font-family: raleway;background-color: rgba(255, 255, 255, 0.2); text-align:center">
						<img src="assets/images/sliders/icons/hook.png" alt="hook"/>
					</div>
					
					<!-- LAYER NR. 2 -->
					<div class="tp-caption text-uppercase" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="0" 
						data-whitespace="nowrap"
						data-width="none"
						data-height="none"
						data-transform_idle="o:1;"
						data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
						data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
						data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
						data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
						data-start="3500" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on"
						data-fontsize="['75','17','15','15']"
						data-lineheight="['100','45','25','25']"
						data-fontweight="['700','500','600','300']"
						data-color="#ffc527" style="font-family: montserrat; "
						>
						We Are Yellow Hats
					</div>
					
					<!-- LAYER NR. 3 -->
					<div class="tp-caption text-uppercase" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="80" 
						data-width="none"
						data-height="none"
						data-transform_idle="o:1;"
						data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
						data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
						data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
						data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" 
						data-start="4000" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on"
						data-fontsize="['25','17','17','17']"
						data-lineheight="['50','26','25','25']"
						data-fontweight="['700','500','500','500']"
						data-color="#fff" style="font-family: raleway; text-align:center"
						>
						We Design, Innovate & Create
					</div>
				</li>
				
				<!-- slide 2 -->
				<li data-transition="fadefrombottom" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000">
					<!-- MAIN IMAGE -->
					<img src="assets/images/sliders/1.jpg"  alt=""  width="1920" height="1280">
					<!-- LAYER NR. 1 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="-120" 
						data-width="['80','70','70','100']"
						data-height="['80','70','70','100']"
						data-transform_idle="o:1;"
						data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power3.easeInOut;" 
						data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
						data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
						data-start="1000" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on"
						data-fontsize="['17','17','15','15']"
						data-lineheight="['80','100','100','100']"
						style="font-family: raleway;background-color: rgba(255, 255, 255, 0.2); text-align:center">
						<img src="assets/images/sliders/icons/brush.png" alt="brush"/>
					</div>
					
					<!-- LAYER NR. 2 -->
					<div class="tp-caption text-uppercase color-theme" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="0" 
						data-whitespace="nowrap"
						data-width="none"
						data-height="none"
						data-transform_idle="o:1;"
						data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
						data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
						data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
						data-start="2000" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on"
						data-fontsize="['75','17','15','15']"
						data-lineheight="['100','45','25','25']"
						data-fontweight="['700','500','600','300']"
						data-color="#ffc527" style="font-family: montserrat; ">
						Design & Build
					</div>
					
					<!-- LAYER NR. 3 -->
					<div class="tp-caption text-uppercase" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="80" 
						data-width="none"
						data-height="none"
						data-transform_idle="o:1;"
						data-transform_in="x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
						data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
						data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
						data-start="3000" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on"
						data-fontsize="['25','17','17','17']"
						data-lineheight="['26','26','25','25']"
						data-fontweight="['700','500','500','500']"
						data-color="#fff" style="font-family: raleway; text-align:center">
						a leading developer of A-grade commercial.
					</div>
				</li>
				
				<!-- slide 3 -->
				<li data-index='rs-367' data-transition='scaledownfromtop' data-slotamount='default' data-easein='default' data-easeout='default' data-masterspeed='default'>
					<!-- MAIN IMAGE -->
					<img src="assets/images/sliders/3.jpg"  alt=""  width="1920" height="1280">
					<!-- LAYER NR. 1 -->
					<div class="tp-caption" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="-120" 
						data-width="['80','70','70','100']"
						data-height="['80','70','70','100']"
						data-transform_idle="o:1;"
						data-transform_in="y:-30px;rX:70deg;opacity:0;s:2000;e:Power4.easeInOut;" 
						data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
						data-start="1000" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 
						data-lineheight="['80','100','100','100']"
						style="font-family: raleway;background-color: rgba(255, 255, 255, 0.2); text-align:center">
						<img src="assets/images/sliders/icons/shovel.png" alt="shovel"/>
					</div>
					
					<!-- LAYER NR. 2 -->
					<div class="tp-caption text-uppercase color-theme" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="0" 
						data-whitespace="nowrap"
						data-width="['auto','auto','auto','auto']"
						data-height="['auto','auto','auto','auto']"
						data-transform_idle="o:1;"
						data-transform_in="x:[-105%];z:0;rX:0deg;rY:0deg;rZ:-90deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" 
						data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
						data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
						data-start="1500" 
						data-splitin="chars" 
						data-splitout="none" 
						data-responsive_offset="on" 
						data-elementdelay="0.05" 
						data-fontsize="['75','17','15','15']"
						data-lineheight="['100','45','25','25']"
						data-fontweight="['700','500','600','300']"
						data-color="#ffc527" style="font-family: montserrat; ">
						WE Innovation
					</div>
					
					<!-- LAYER NR. 3 -->
					<div class="tp-caption text-uppercase" 
						data-x="center" data-hoffset="0" 
						data-y="center" data-voffset="80" 
						data-width="none"
						data-height="none"
						data-transform_idle="o:1;"
						data-transform_in="x:-50px;skX:100px;opacity:0;s:2000;e:Power4.easeInOut;" 
						data-transform_out="s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
						data-start="2500" 
						data-splitin="none" 
						data-splitout="none" 
						data-responsive_offset="on" 
						data-fontsize="['25','17','17','17']"
						data-lineheight="['26','26','25','25']"
						data-fontweight="['700','500','500','500']"
						data-color="#fff" style="font-family: raleway ;text-align:center">
						maximizing the result the project.
					</div>
				</li>
			</ul>
		</div>
		<!-- END REVOLUTION SLIDER -->
		
		<!-- Widget Bottom -->
		<div class="container widget-bottom widgets-contact hidden-xs">
			<div class="row">
				<ul class="list-inline">
					<li class="col-sm-4 col-md-3 col-md-offset-3 widget">
						<div class="widget-contact-icon pull-left">
							<i class="lnr lnr-envelope"></i>
						</div>
						<div class="widget-contact-info">
							<p class="text-capitalize">email us</p>
							<p class="font-heading text-white">7oroof@7oroof.com</p>
						</div>
					</li>
					<!-- .widget end -->
					
					<li class="col-sm-4 col-md-3 widget">
						<div class="widget-contact-icon pull-left">
							<i class="lnr lnr-phone"></i>
						</div>
						<div class="widget-contact-info">
							<p class="text-capitalize">call us</p>
							<p class="text-capitalize font-heading text-white">002 01065370701</p>
						</div>
					</li>
					<!-- .widget end -->
					
					<li class="col-sm-4 col-md-3 widget">
						<a class="btn btn-primary" href="#" data-toggle="modal" data-target="#model-quote" id="modelquote">Request A Quote</a>
						
						<!-- Modal -->
						<div class="modal fade model-quote" id="model-quote" tabindex="-1" role="dialog" aria-labelledby="modelquote">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
										</button>
										<div class="model-icon">
											<i class="lnr lnr-apartment"></i>
										</div>
										<div class="model-divider">
											<div class="model-title">
												<p>Don’t Hesitate To ask</p>
												<h6>rquest a quote</h6>
											</div>
										</div>
									</div>
									<!-- .model-header end -->
									<div class="modal-body">
										<form id="pop-quote-form" action="assets/php/sendpopquote.php" method="post">
											<input type="text" class="form-control" name="quote-name" id="name" placeholder="Your Name" required/>
											<input type="email" class="form-control" name="quote-email" id="email" placeholder="Email" required/>
											<input type="text" class="form-control" name="quote-telephone" id="telephone" placeholder="Telephone" required/>
											<textarea class="form-control" name="quote-message"  id="quote" placeholder="Quote Details" rows="2" required></textarea>
											<button type="submit" class="btn btn-primary btn-black btn-block">Submit Inquiry</button>
											<!--Alert Message-->
											<div id="pop-quote-result" class="mt-xs">
											</div>
										</form>
									</div>
									<!-- .model-body end -->
								</div>
							</div>
						</div>
						<!-- .model-quote end -->
					</li>
				</ul>
			</div>
		</div>
		<!-- .container end -->
	</div>
	<!-- END OF SLIDER WRAPPER -->
</section>

@endsection