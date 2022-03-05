<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;

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

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/home', function () {
    return redirect('admin/productos');
});
Route::get('admin/productos',[ProductosController::class, 'index']) ->name('productos');
Route::get('admin/crear-producto',[ProductosController::class, 'create']) ->name('crearProductoVista');
Route::POST('deleteProducto/{id}',[ProductosController::class, 'destroy']) ->name('deleteProducto');
Route::POST('crearProducto',[ProductosController::class, 'store']) ->name('crearProducto');
Route::POST('admin/consultarProducto',[ProductosController::class, 'show']) ;



