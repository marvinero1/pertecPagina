<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/loginHome', function () {
    return view('home');
});

// Route::get('/product', function () {
//     return view('pages.producto');
// });


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/errorPage404', function () {return view('pages.errorPage404');});
Route::middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'getHomeProductos'])->name('productosHome');
    Route::get('produc/{id}', [App\Http\Controllers\HomeController::class, 'oneProduct'])->name('oneProduc');
    Route::get('stores/{id}', [App\Http\Controllers\HomeController::class, 'getTiendas'])->name('store');
    Route::get('tienda/{id}', [App\Http\Controllers\HomeController::class, 'getstoreId'])->name('oneStore');
    Route::get('/fullProducts', [App\Http\Controllers\HomeController::class, 'getAllProductos'])->name('allProducts');
    Route::get('/fullProdPromo', [App\Http\Controllers\HomeController::class, 'getAllProdsPromo'])->name('allProdPromo');
    Route::get('/fullProdNoved', [App\Http\Controllers\HomeController::class, 'getAllProdsNovedad'])->name('allProdNoved');
    Route::get('/sucursales', [App\Http\Controllers\HomeController::class, 'getStores'])->name('sucursales');
    Route::get('ofice/{id}', [App\Http\Controllers\HomeController::class, 'getOfice'])->name('oneOfice');

    Route::get('/aboutUs', function () {return view('pages.quienesSomos');});
    Route::get('/contacto', function () {return view('pages.contactos');});
    Route::get('/pedidos', function () {return view('pages.pedidosEst');});
    Route::get('/facturas', function () {return view('pages.verFacturas');});
    Route::get('/depositos', function () {return view('pages.depositoBancario');});
    Route::get('/facturas', function () {return view('pages.verFacturas');});
    Route::get('/termCondi', function () {return view('pages.FooterTerminosCondiciones');});
    Route::get('/polPriv', function () {return view('pages.FooterPoliticaPrivacidad');});
    Route::get('/reglCont', function () {return view('pages.FooterReglasContenido');});
});
