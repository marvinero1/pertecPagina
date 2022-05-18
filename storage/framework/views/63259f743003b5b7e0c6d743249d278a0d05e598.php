<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

	
	<title><?php echo e(config('app.name')); ?></title>
	<script type='text/javascript'>
		document.oncontextmenu = function(){return false}
	</script>

	<link rel="stylesheet" href="/resources/assets/admin/css/font-awesome.min.css">
	<!-- Fonts
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
	
    <link href="<?php echo e(asset('assets/page/css/app_page.css')); ?>" rel="stylesheet">
    <script src="<?php echo e(asset('assets/page/js/app_page.js')); ?>"></script>

	<script type="text/javascript" src="../assets/page/revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
	<script type="text/javascript" src="../assets/page/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>

</head>

<body>

	

	<?php echo $__env->make('page.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php echo $__env->yieldContent('content'); ?>
	<?php echo $__env->make('page.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
<?php /**PATH C:\laragon\www\pertecPagina\resources\views/page/layouts/main.blade.php ENDPATH**/ ?>