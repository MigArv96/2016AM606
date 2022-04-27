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
    return view('welcome');
});

Route::get('/dashboard', function () 
{
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/productos', [ProductosController::class, 'index'])->name('productos');
Route::get('/productos/create', [ProductosController::class, 'create'])->name('create');
Route::post('create', [ProductosController::class, 'store'])->name('store');
Route::delete('/productos/{id}', [ProductosController::class, 'destroy'])->name('destroy');
//Route::get('/productos/{id}/edit', [ProductosController::class, 'edit'])->name('edit');
Route::put('/productos/update', [ProductosController::class, 'update'])->name('update');

require __DIR__.'/auth.php';
