

<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="title_left" style="text-align: center;">
            <h3><?php echo e(__('views.admin.tiends.index.title')); ?> </h3>
        </div><br>

        <?php if(Session::has('message')): ?>
            <div class="alert alert-info"><?php echo e(Session::get('message')); ?></div>
        <?php endif; ?>

        <?php if(Session::has('danger')): ?>
            <div class="alert alert-danger"><?php echo e(Session::get('danger')); ?></div>
        <?php endif; ?>
        <div class="row"><br>
            <div class="col-xs-5">
                <div>
                    <a href="<?php echo e(route('admin.tienda.create')); ?>" type="button btn btn-primary" style="color: black">
                        <button class="btn btn-primary"> <i class="fa fa-shopping-bag" aria-hidden="true"></i> Crear
                            Tienda / Oficina</button></a>
                </div>
            </div>
            <div class="col-xs-7">
                <div class="title_right">
                    <form
                        style="display: contents !important;margin-top: 0em !important;margin-block-end: 0em !important">
                        <div class="form-group pull-right top_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Buscar Por Codigo/Nombre" name="buscarpor"
                                    style="border: 1px #093070 solid;">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button" style="border: 1px #093070 solid;">
                                        <i class="fa fa-search"></i> Buscar</button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <div class="clearfix"></div>
    <div class="row" style="display: block;">
        <div class="col-md col-sm">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Tabla de Tiendas</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                            </div>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                <div class="clearfix"></div>
                </div>
                
                <div class="x_content table-responsive">
                    <table class="table" >
                        <thead>
                            <tr>
                                <th>Codigo</th>
                                <th>Teléfono</th>
                                <th>Celular</th>
                                <th>Imagen</th>
                                <th>Imagen Portada</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php $__currentLoopData = $tienda; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tiends): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td scope="row"><?php echo e($tiends->nombre_tienda); ?></td>
                                <td scope="row"><?php echo e($tiends->telefono); ?></td>
                                <td scope="row"><?php echo e($tiends->celular); ?></td>
                                <td scope="row" id='listimages'> <img src="/<?php echo e($tiends->imagen); ?>" class="img-responsive imgprod" id='listimages'
                                    alt="<?php echo e($tiends->nombre_tienda); ?>" style="display: block;margin: auto;">
                                </td>
                                <?php if(!is_null($tiends->imagen_portada)): ?>
                                    <td scope="row" id='listimages'> <img src="/<?php echo e($tiends->imagen_portada); ?>" class="img-responsive imgprod" id='listimages'
                                        alt="<?php echo e($tiends->nombre_tienda); ?>" style="display: block;margin: auto;">
                                    </td>
                                <?php else: ?>
                                <td></td>
                                <?php endif; ?>
                                

                                <td scope="row" style="text-align:center;">
                                    <a href="<?php echo e(route('admin.tienda.show', $hash->encodeHex($tiends->id) )); ?>" style="color: black">
                                        <button class="btn btn-gray"><i class="fa fa-eye" aria-hidden="true"></i>
                                            Ver</button></a>  

                                    <a href="<?php echo e(route('admin.tienda.edit', $hash->encodeHex($tiends->id) )); ?>" style="color: black">
                                        <button class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i>
                                            Editar</button></a>                                    

                                    <form action="<?php echo e(route('admin.tienda.destroy', $tiends->id )); ?>" method="POST"
                                        accept-charset="UTF-8" style="display:inline">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete Image"
                                            onclick="return confirm(&quot;¿Desea eliminar?&quot;)"><i
                                                class="fa fas fa-trash" aria-hidden="true"></i> Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div style="text-align: center;">
                <?php echo e($tienda->links()); ?>

            </div>
        </div>
    </div>
   
</div>
<!--div para el fondo de pantalla-->
<div id='background'></div>
<!--div para visualizar la imagen grande con el boton cerrar-->
<div id='preview'><div id='close'></div><div id='content'></div></div>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>

$(document).ready(function(){
    // Funcion que se ejecuta al hacer click sobre una imagen
    $("#listimages img").click(function(){
        // Posicionamos las capas
        $('#background').css('height',$(document).height());
        // $('#preview').css('top',(($(window).height()/2) - ($('#preview').height()/2) + $(document).scrollTop()));
        // $('#preview').css('left', ($(document).width()/2) - ($('#preview').width()/2));
        // Cargamos la imagen en la capa grande
        $('#content').html("<img src='"+$(this).attr("src")+"'>");
        // Mostramos las capas
        $('#preview').fadeIn();
        $('#background').fadeIn();
    });
    
    // Cerramos las capas al pulsar sobre el fondo
    $("#background").click(function(){
        $('#background').fadeOut();
        $('#preview').fadeOut();
    });
    // Cerramos las capas al pulsar sobre la cruz
    $("#close").click(function(){
        $('#background').fadeOut();
        $('#preview').fadeOut();
    });
});
</script>
<style>
    th,td,h4,.modal-header {
        text-align: center;
    }
    /*Estilo para el listado de imagenes*/
    #listimages img {width:200px;height:130px;}

    /*Estilo para el fondo de pantalla cuando estamos mostrando la imagen grande*/
    #background {
        display:none;
        position: absolute;
        top:0px;left:0px;width:100%;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
        filter: alpha(opacity=80);
        -moz-opacity: 0.8;
        -khtml-opacity: 0.8;
        opacity: 0.8;
        background-color: #093070;
        z-index: 1;
    }

    /*Estilo para la capa que contendra la imagen grande y la cruz de cerrar*/
    #preview {
        /* display: none; */
        margin: auto;
        /* left: 150px !important; */
        position: absolute;
        left: auto !important;
        top: 220px;
        box-shadow: 1px 1px 5px #DDD;
        z-index: 2;
    }

    /*Estilo para el contenedor de la imagen grande*/
    #content {
        width:100%;
        height:100%;
    }
    #content img{
        width: 500px !important;
    }  

    /*Estilo para el boton cerrar*/
    #close {
        position: absolute;
        border:0px solid;
        width:16px;
        height:16px;
        right:2px;
        top:2px;
        background:url('/images/system/close.png');
    }

    .url {text-align:center;margin-top:20px;}
</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\pertecPagina\resources\views/admin/tiends/index.blade.php ENDPATH**/ ?>