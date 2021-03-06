<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProductoController;
use App\Http\Controllers\Admin\TiendaController;
use App\Http\Controllers\Admin\CaruselController;
use App\Http\Controllers\Admin\VendedorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getUsers', [UserController::class, 'getUsers']);
Route::get('getProducts', [ProductoController::class, 'getProducts']);
Route::get('getStores', [TiendaController::class, 'getStores']);
Route::get('getStoresId/{id}', [TiendaController::class, 'getStoresId']);
Route::get('getStoresLPZ', [TiendaController::class, 'getStoresLPZ']);
Route::get('getStoresCBBA', [TiendaController::class, 'getStoresCBBA']);
Route::get('getStoresSTCZ', [TiendaController::class, 'getStoresSTCZ']);

Route::get('getProductsLessSales', [ProductoController::class, 'getProductsLessSales']);
Route::get('getProductsStagnat', [ProductoController::class, 'getProductsStagnat']);
Route::get('getProductsPromotion', [ProductoController::class, 'getProductsPromotion']);
Route::get('getProductsNovelty', [ProductoController::class, 'getProductsNovelty']);
Route::get('getProductsId/{id}', [ProductoController::class, 'getProductsId']);
Route::get('getCaruselImage', [CaruselController::class, 'getCaruselImage']);
Route::get('getSalesman', [VendedorController::class, 'getSalesman']);
