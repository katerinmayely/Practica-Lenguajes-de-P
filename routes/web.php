<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;

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
    return view('inicio');
});

Route::get('/productos/crear/formulario', [ProductoController::class, 'create']); //Muestra el formulario.
Route::post('/productos/crear/guardar', [ProductoController::class, 'store'])->name('producto.guardar');
Route::get('/productos', [ProductoController::class, 'index'])->name('productos.mostrar');

Route::get('/ventas/crear/formulario', [VentaController::class, 'create']); //Muestra el formulario.
Route::post('/ventas/crear/guardar', [VentaController::class, 'store'])->name('venta.guardar');
