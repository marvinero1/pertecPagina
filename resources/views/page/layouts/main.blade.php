<!DOCTYPE html>
<html dir="ltr" lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="wplly" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="construction html5 template">

	{{--CSRF Token--}}
	<meta name="csrf-token" content="{{ csrf_token() }}">

	{{--Title and Meta--}}
	<title>{{ config('app.name') }}</title>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://fonts.cdnfonts.com/css/franklin-gothic-demi-2" rel="stylesheet">
	
	{{ Html::style(mix('assets/page/css/app_page.css')) }}
	{{ Html::script(mix('assets/page/js/app_page.js')) }} 

	<script type="text/javascript" src="../assets/page/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
	<script type="text/javascript" src="../assets/page/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
	
</head>

<body>

	{{-- <div class="preloader">
		<div class="spinner">
			<div class="bounce1">
			</div>
			<div class="bounce2">
			</div>
			<div class="bounce3">
			</div>
		</div>
	</div>   --}}

	@include('page.layouts.header')
	@yield('content')
	@include('page.layouts.footer')

    <div>
		<a href="#" class="btn_Face_float" target="_blank">
			<i class="fa fa-facebook btn_Inf_float_my-float"></i>
		</a>
		<a href="https://www.google.com.bo/maps/search/pertec+srl/@-17.4937283,-66.5821199,7.42z?hl=es" class="btn_Map_float" target="_blank">
			<i class="fa fa-map-marker btn_Inf_float_my-float"></i>
		</a>
    </div>
    <a href="https://wa.me/+59172221032/?text=Hola%20Pertec%20Quisiera%20Cotizar%20Sus%20Productos" class="btn_Whats_float" target="_blank">
        <i class="fa fa-whatsapp btn_Inf_float_my-float" style="margin-top: 2px; font-size: 1.5rem;"></i>
        <label style="position: relative; top: -4px; font-weight: 1 !important;">Ayuda</label>
    </a>

    
	<script type='text/javascript'>
        document.oncontextmenu = function(){return false}
    </script>

	<script type="text/javascript">
	jQuery(document).ready(function() {
	jQuery("#slider1").revolution({
		sliderType:"standard",
		sliderLayout:"auto",
		delay:6000,
		disableProgressBar:"on",
		spinner:"off",
		navigation: {
			keyboardNavigation:"off",
			keyboard_direction: "horizontal",
			mouseScrollNavigation:"off",
			onHoverStop:"off",
			arrows: {
				style:"arrow",
				enable:true,
				hide_onmobile:false,
				hide_onleave:false,
				tmp:'',
				left: {
					h_align:"left",
					v_align:"bottom",
					h_offset:110,
					v_offset:35
				},
				right: {
					h_align:"left",
					v_align:"bottom",
					h_offset:150,
					v_offset:35
				}
			}
		},
		gridwidth:1230,
		gridheight:800 ,

		});
	});
	</script>

<script>
    $("a.my-menu-link").click(function(){
        console.log($(this).attr("name"));
        $("html, body").animate({
            scrollTop: $("#"+ $(this).attr("name")).offset().top
        }, 500)
    });
</script>

</body>
</html>
