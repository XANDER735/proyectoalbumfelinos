<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FelinoController;
//use App\Http\Controllers\HomeController;
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
//Route::get('/', HomeController::class);

Route::get('/', function () {
    return redirect('/felinos');
  });

Route::get('felinos', [FelinoController::class, 'index'])->name('felinos.index');
Route::get('felinos/crear', [FelinoController::class, 'crear'])->name('felinos.crear');
//Guardar 
Route::post('felinos', [FelinoController::class, 'guardar'])->name('felinos.guardar');
//editar
Route::get('felinos/{felino}/editar', [FelinoController::class, 'editar'])->name('felinos.editar');
//actualizar
Route::patch('felinos/{felino}', [FelinoController::class, 'actualizar'])->name('felinos.actualizar');
//ver
Route::get('felinos/{felino}', [FelinoController::class, 'ver'])->name('felinos.ver');
//eliminar
Route::delete('felino/{felino}', [FelinoController::class, 'eliminar'])->name('felinos.eliminar'); 
