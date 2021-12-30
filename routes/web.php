<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DetalleCompraController;
use App\Http\Controllers\OrdenCompraController;
use App\Http\Controllers\ProductoController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::get('/categorias/create', [CategoriaController::class, 'create'])->name('categorias.create');
Route::get('/categorias/{categoria}', [CategoriaController::class, 'show'])->name('categorias.show');
Route::get('/categorias/{categoria}/edit', [CategoriaController::class, 'edit'])->name('categorias.edit');
Route::post('/categorias', [CategoriaController::class, 'store'])->name('categorias.store');
Route::put('/categorias/{categoria}', [CategoriaController::class, 'update'])->name('categorias.update');
Route::delete('/categorias/{categoria}', [CategoriaController::class, 'destroy'])->name('categorias.destroy');

Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('/productos/create', [ProductoController::class, 'create'])->name('productos.create');
Route::get('/productos/{producto}', [ProductoController::class, 'show'])->name('productos.show');
Route::get('/productos/{producto}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
Route::post('/productos', [ProductoController::class, 'store'])->name('productos.store');
Route::put('/productos/{producto}', [ProductoController::class, 'update'])->name('productos.update');
Route::delete('/productos/{producto}', [ProductoController::class, 'destroy'])->name('productos.destroy');


Route::get('/ordenes', [OrdenCompraController::class, 'index'])->name('ordenes.index');
Route::get('/ordenes/create', [OrdenCompraController::class, 'create'])->name('ordenes.create');
Route::get('/ordenes/{orden}', [OrdenCompraController::class, 'show'])->name('ordenes.show');
Route::get('/ordenes/{orden}/edit', [OrdenCompraController::class, 'edit'])->name('ordenes.edit');
Route::post('/ordenes', [OrdenCompraController::class, 'store'])->name('ordenes.store');
Route::put('/ordenes/{orden}', [OrdenCompraController::class, 'update'])->name('ordenes.update');
Route::delete('/ordenes/{orden}', [OrdenCompraController::class, 'destroy'])->name('ordenes.destroy');


Route::get('/detalles', [DetalleCompraController::class, 'index'])->name('detalles.index');
Route::get('/detalles/create', [DetalleCompraController::class, 'create'])->name('detalles.create');
Route::get('/detalles/{ordenCompra}', [DetalleCompraController::class, 'show'])->name('detalles.show');
Route::get('/detalles/{ordenCompra}/edit', [DetalleCompraController::class, 'edit'])->name('detalles.edit');
Route::post('/detalles', [DetalleCompraController::class, 'store'])->name('detalles.store');
Route::put('/detalles/{ordenCompra}', [DetalleCompraController::class, 'update'])->name('detalles.update');
Route::delete('/detalles/{ordenCompra}', [DetalleCompraController::class, 'destroy'])->name('detalles.destroy');
