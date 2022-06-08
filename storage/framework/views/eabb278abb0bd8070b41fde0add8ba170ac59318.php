<?php $__env->startSection('content'); ?>
<section class="bg-overlay bg-overlay-gradient pb-0 bgPageCover"
    style="background-image: url(../assets/images/page-title/backgroundProd.jpg);">
    <div class="bgImgCoverPages"></div>
    <div class="container" style="margin-top: -540px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="page-title title-1 text-center texto-borde">
                    <div><h2> Mis Facturas </h2></div>
                    <ol class="breadcrumb" style="display: unset !important;">
                        <li><a href="/">Inicio</a></li>
                        <li class="active">Facturas</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="sectionAboutUs" class="shotcode-1 about-home-2 text-center-xs text-center-sm"
    style="background-color: white;">
    <div class="content section-content">
        <div class="row">
            <?php if(empty($buscardorEmpty)): ?>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-4">
                    <div class="heading-right">
                        <p class="mb-0">Verificar Facturas</p>
                        <h2>Mis Facturas</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6" style="float: right;">
                    <form
                        style="display: contents !important;margin-top: 0em !important;margin-block-end: 0em !important">
                        <div class="form-group pull-right top_search">
                            <div class="input-group" style="width: 390px;">
                                <input class="form-control font-frank-book"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                type = "text" maxlength="13" minlength="5" placeholder="Ingrese su C.I o NIT" name="buscarpor"
                                style="border: 1px #093070 solid; height: 40px; padding-left: 12px; font-size: 1.3rem; color: #5a5a5ab8;">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit" style="border: 1px #093070 solid; font-size: 1.3rem;width:100px">
                                        <i class="fa fa-search"></i> Buscar</button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <?php else: ?>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="heading heading-4">
                    <div class="heading-right">
                        <p class="mb-0">Verificar Facturas</p>
                        <h2>Mis Facturas</h2>
                        <div style="float: right;">
                            <form
                                style="display: contents !important;margin-top: 0em !important;margin-block-end: 0em !important">
                                <div class="form-group pull-right top_search">
                                    <div class="input-group">
                                        <input type="hidden" class="form-control font-frank-book"
                                            placeholder="Ingrese su C.I o NIT" name="buscarpor" value=" "
                                            style="border: 1px #093070 solid; height: 40px; padding-left: 12px; font-size: 1.3rem; color: #5a5a5ab8;">
                                        <button class="btn btn-danger btn-lg" type="submit">
                                            <i class="fa fa-times-circle"></i> Limpiar
                                        </button>
                                    </div>
                                </div>
                            </form>

                        </div><br>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 shop-content">
                <div class="product-content">
                    <div class="product-tabs mb-50">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#details" aria-controls="details" role="tab" data-toggle="tab">
                                    Facturas
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="details">
                                <table class="table table-striped table-respon">
                                    <tbody>
                                        <thead>
                                            <th>Código de Factura</th>
                                            <th>Lugar Fecha</th>
                                            <th>Nom/Razon Social</th>
                                            <th>Acciones</th>
                                        </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>3</td>
                                            <td>
                                                <a href="<?php echo e(route('facturaVista')); ?>" style="color: black">
                                                    <button class="btn btn-primary"><i class="fa fa-eye"
                                                            aria-hidden="true"></i> Ver</button>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><br>
            <?php endif; ?>
        </div>
    </div>
</section>
<style>
    th,td{
        text-align: center;
    }
</style>
<script>
    $(document).ready(function() {
        function disableBack() {
            window.history.forward()
        }
        window.onload = disableBack();
        window.onpageshow = function(e) {
            if (e.persisted)
                disableBack();
        }
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('page.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\repoCompletoPertec\pertecPagina\resources\views/page/sections/facturas/index.blade.php ENDPATH**/ ?>