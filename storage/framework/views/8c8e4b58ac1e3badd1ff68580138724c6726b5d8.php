<div class="col-md-3 left_col pt-2">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;padding-top: 5px;">
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="site_title">
                <img src="<?php echo e(url('/assets/images/icon.png')); ?>" alt="Logo" width="45px;" height="45px;">
                <span> Pertec S.R.L &copy;</span>
            </a>
        </div><br><br><br>

        <div class="clearfix"></div><br>
        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="<?php echo e(auth()->user()->avatar); ?>" alt="perfil" class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <h2><?php echo e(auth()->user()->name); ?></h2>
            </div>
        </div><br/>
        <!-- /menu profile quick info -->

        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3><?php echo e(__('views.backend.section.navigation.sub_header_0')); ?></h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="<?php echo e(route('admin.dashboard')); ?>">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <?php echo e(__('views.backend.section.navigation.menu_0_1')); ?>

                        </a>
                    </li>
                </ul>
            </div>
            <div class="menu_section">
                <h3><?php echo e(__('views.backend.section.navigation.sub_header_1')); ?></h3>
                <ul class="nav side-menu">

                    <li><a><i class="fa fa-inbox"></i> Boucheres <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li>
                                <a href="<?php echo e(route('admin.boucher.index')); ?>">
                                    <i class="fa fa-inbox" aria-hidden="true"></i>
                                    <?php echo e(__('views.admin.bouchers_pendients.index.title')); ?>

                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('admin.boucherConfirmado')); ?>">
                                    <i class="fa fa-inbox" aria-hidden="true"></i>
                                    <?php echo e(__('views.admin.bouchers_confirmado.index.title')); ?>

                                </a>
                            </li>
                        </ul>
                    </li>
           
                    <li><a><i class="fa fa-cubes"></i> Productos <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="<?php echo e(route('admin.producto.index')); ?>">
                                <i class="fa fa-cubes" aria-hidden="true"></i>
                                <?php echo e(__('views.backend.section.navigation.menu_1_4')); ?>

                            </a></li>
                            <li><a href="<?php echo e(route('admin.productosPromocion')); ?>">
                                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                                <?php echo e(__('views.backend.section.navigation.menu_1_6')); ?>

                            </a></li>
                            <li><a href="<?php echo e(route('admin.productosNovedad')); ?>">
                                <i class="fa fa-diamond" aria-hidden="true"></i>
                                <?php echo e(__('views.backend.section.navigation.menu_1_7')); ?>

                            </a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="<?php echo e(route('admin.pedido.index')); ?>">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            <?php echo e(__('views.backend.section.navigation.menu_1_11')); ?>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.tienda.index')); ?>">
                            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            <?php echo e(__('views.backend.section.navigation.menu_1_10')); ?>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.vendedor.index')); ?>">
                            <i class="fa fa-address-card" aria-hidden="true"></i>
                            <?php echo e(__('views.backend.section.navigation.menu_1_5')); ?>

                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('admin.users')); ?>">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <?php echo e(__('views.backend.section.navigation.menu_1_1')); ?>

                        </a>
                    </li>
                </ul>
            </div>

           <div class="menu_section">
                <h3><?php echo e(__('views.backend.section.navigation.sub_header_3')); ?></h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="https://pertec.com.bo" target="_blank" title="Sitio Web Pertec S.R.L"><i class="fa fa-external-link" aria-hidden="true"></i>Sitio Web Pertec S.R.L</a>
                    </li>
                    <hr style="border-top: 1px solid transparent !important;">
                    <li>
                        <a href="<?php echo e(route('logout')); ?>">
                            <i class="fa fa-sign-out" aria-hidden="true"></i>
                            <?php echo e(__('views.backend.section.header.menu_0')); ?>

                        </a>
                    </li>
                </ul>
            </div> 
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\pertecPagina\resources\views/admin/sections/navigation.blade.php ENDPATH**/ ?>