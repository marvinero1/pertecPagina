<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<!-- Document Meta
	============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--IE Compatibility Meta-->
	<meta name="author" content="wplly" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="construction html5 template">
	<link href="../assets/images/favicon/icon.png" rel="icon">

	<!-- Fonts
	============================================= -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CRaleway:100,200,300,400,500,600,700,800%7CDroid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <script src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript" src="../assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
	<script type="text/javascript" src="../assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>


	<!-- Document Title
	    ============================================= -->
	<title>PERTEC S.R.L © | Maestros en Pernos</title>
</head>

<body>

	<div class="preloader">
		<div class="spinner">
			<div class="bounce1">
			</div>
			<div class="bounce2">
			</div>
			<div class="bounce3">
			</div>
		</div>
	</div>

	@include('includes.header')
	@yield('content')
	@include('includes.footer')

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
