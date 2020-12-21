<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UnidadController;
use App\Http\Controllers\CorreoController;
use App\Http\Controllers\TemaController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//listar Unidades
Route::get('unidades/list', [UnidadController::class, 'listUnidad'])->name('unidades.list');

//mostrar Informacion
Route::get('unidades/information/{id}', [UnidadController::class, 'informationUnidad'])->name('unidades.information');

//crear Unidad
Route::get('unidades/create', [UnidadController::class, 'createUnidad'])->name('unidades.create');

Route::post('unidades', [UnidadController::class, 'store'])->name('unidades.store');

//modificar Unidad
Route::get('unidades/information/{unidad}/modify', [UnidadController::class, 'modifyUnidad'])->name('unidades.modify');

Route::put('unidades/information/{unidad}',[UnidadController::class, 'update'])->name('unidades.update');

//eliminar Unidad
Route::delete('unidades/information/{unidad}',[UnidadController::class, 'destroy'])->name('unidades.destroy');

//Enviar Correo
Route::get('correo', [CorreoController::class, 'index'])->name('correo.index');

Route::post('correo', [CorreoController::class, 'store'])->name('correo.store');

//Crear Temas
Route::get('temas/createTemas', [TemaController::class, 'createTema'])->name('temas.create');

Route::post('temas', [TemaController::class, 'store'])->name('temas.store');

//Listar Temas
Route::get('temas/lisTemas', [TemaController::class, 'listarTemas'])->name('temas.list');

//Informacion Tema
Route::get('temas/information/{id}', [TemaController::class, 'informacionTema'])->name('temas.information');
