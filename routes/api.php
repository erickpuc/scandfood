<?php

use App\Http\Controllers\CompraController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PeriodoPromocionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//productos

Route::get('products', [ProductoController::class,'listado']);
Route::get('product/{id}',[ProductoController::class,'obtenerProdcutoporId']);
Route::post('productoagregar',[ProductoController::class,'AgregarProducto']);
Route::delete('product/{id}', [ProductoController::class, 'eliminar']);
route::post('actualizarproduct/{id}',[ProductoController::class,'actualizar']);

//compras

Route::get('compras', [CompraController::class,'listado']);
Route::get('compra/{id}',[CompraController::class,'ObtenerCompraporId']);
Route::post('comprasagregar',[CompraController::class,'AgregarComprar']);
Route::delete('compra/{id}', [CompraController::class, 'eliminar']);
route::put('compra/{id}',[CompraController::class,'actualizar']);
 