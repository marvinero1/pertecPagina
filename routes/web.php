<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/**
 * Auth routes
 */
Route::middleware(['auth'] )->group(function () {
    Route::get('profileUser/{id}', 'Admin\UserController@profileUser')->name('users.showFront');
    Route::get('invoices', 'HomeController@getInvoices')->name('invoices');
    Route::get('mis_pedidos', 'HomeController@getPedidos')->name('mis_pedidos');
    Route::put('changeMatrix/{id}', 'Admin\ProductoController@changeMatrix')->name('changeMatrix');
    Route::put('usersUpdate/{id}', 'Admin\UserController@update')->name('users.update');
});

Route::post('sendemail', 'HomeController@sendemail')->name('sendemail');
Route::group(['namespace' => 'Auth'], function () {
    // Authentication Routes...
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');
    Route::get('logout', 'LoginController@logout')->name('logout');

    // Registration Routes...
    if (config('auth.users.registration')) {
        Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
        Route::post('register', 'RegisterController@register');
    }

    // Password Reset Routes...
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset');

    // Confirmation Routes...
    if (config('auth.users.confirm_email')){
        Route::get('confirm/{user_by_code}', 'ConfirmController@confirm')->name('confirm');
        Route::get('confirm/resend/{user_by_email}', 'ConfirmController@sendEmail')->name('confirm.send');
    }

    // Social Authentication Routes...
    Route::get('social/redirect/{provider}', 'SocialLoginController@redirect')->name('social.redirect');
    Route::get('social/login/{provider}', 'SocialLoginController@login')->name('social.login');
});

/**
 * Backend routes
 */
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => 'admin'], function () {

    // Dashboard
    Route::get('/', 'DashboardController@index')->name('dashboard');

    //Users
    Route::get('users', 'UserController@index')->name('users')->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');
    Route::get('users/restore', 'UserController@restore')->name('users.restore')->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');
    Route::get('users/{id}/restore', 'UserController@restoreUser')->name('users.restore-user')->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');
    Route::get('users/{id}', 'UserController@show')->name('users.show')->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');
    Route::put('users/{user}', 'UserController@update')->name('users.update')->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');
    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');
    Route::put('usersConfirmed/{id}','UserController@confirmedUsuario')->name('users.confirmedUsuario')->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');
    Route::any('users/{id}/destroy', 'UserController@destroy')->name('users.destroy')->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');
    Route::get('permissions', 'PermissionController@index')->name('permissions')->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');
    Route::get('permissions/{user}/repeat', 'PermissionController@repeat')->name('permissions.repeat')->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');
    Route::get('dashboard/log-chart', 'DashboardController@getLogChartData')->name('dashboard.log.chart')->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');
    Route::get('dashboard/registration-chart', 'DashboardController@getRegistrationChartData')->name('dashboard.registration.chart')->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');

    // Administrable
    Route::get('productosPromocion', 'ProductoController@productosPromocion')->name('productosPromocion')->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');
    Route::get('productosNovedad', 'ProductoController@productosNovedad')->name('productosNovedad')->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');
    Route::get('boucherConfirmado', 'BoucherController@boucherConfirmado')->name('boucherConfirmado')->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');
    Route::put('productoPromocion/{id}/','ProductoController@productoPromocion')->name('productos.productoPromocion')->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');
    Route::put('productoNovedad/{id}/','ProductoController@productoNovedad')->name('productos.productoNovedad')->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');
    Route::put('productoMatriz/{id}/','ProductoController@productoMatriz')->name('productos.productoMatriz')->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');

    Route::resource('producto', ProductoController::class)->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');
    Route::resource('tienda', TiendaController::class)->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');
    Route::resource('vendedor', VendedorController::class)->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');
    Route::resource('pedido', PedidoController::class)->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');
    Route::resource('boucher', BoucherController::class)->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');
    Route::resource('carusel', CaruselController::class)->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');
    Route::resource('pop-up', ModalPopupController::class)->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');

});

    // Secciones
    Route::get('/', 'HomeController@index');
    Route::get('historia', 'HomeController@historia')->name('historia');
    Route::get('contactanos', 'HomeController@contactanos')->name('contactanos');
    Route::get('cotizacion', 'HomeController@cotizacion')->name('cotizacion');
    Route::get('productos', 'Admin\ProductoController@productsFront')->name('productos');
    Route::get('prom_products', 'Admin\ProductoController@prom_products')->name('prom_products');
    Route::get('nov_products', 'Admin\ProductoController@nov_products')->name('nov_products');
    Route::get('producto/{id}', 'Admin\ProductoController@showFrontend')->name('producto.showFrontEnd');
    Route::get('showTienda/{id}', 'Admin\TiendaController@showTienda')->name('tiendasPertec');
    Route::get('ofinasPertec', 'Admin\TiendaController@showOficina')->name('ofinasPertec');
    Route::get('consultasDigitales', 'Admin\FacturaController@index')->name('consultasDigitales');
    // Route::get('viewPDF\{factura}', 'Admin\FacturaController@viewPDF')->name('viewPDF');
    Route::get('viewPDF/{id}', 'Admin\FacturaController@viewPDF')->name('viewPDF');
    Route::get('pruebaRollo/{id}', 'Admin\FacturaController@pruebaRollo')->name('pruebaRollo');
    Route::get('facturaVista', 'Admin\FacturaController@facturaVista')->name('facturaVista');
    Route::get('postDataPDF/{id}', 'Admin\FacturaController@postDataPDF')->name('postDataPDF');
    Route::get('viewFactura/{id}', 'Admin\FacturaController@show')->name('viewFactura');

    
/**
* Membership
*/

Route::group(['as' => 'protection.'], function () {
    Route::get('membership', 'MembershipController@index')->name('membership')->middleware('protection:' . config('protection.membership.product_module_number') . ',protection.membership.failed');
    Route::get('membership/access-denied', 'MembershipController@failed')->name('membership.failed');
    Route::get('membership/clear-cache/', 'MembershipController@clearValidationCache')->name('membership.clear_validation_cache');
});
