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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//rutas para documentos
Route::resource('documentos/clientes', ClienteController::class)
->names('documentos.clientes');
Route::resource('documentos/documentos', DocumentoController::class)
->names('documentos.documentos');
Route::resource('documentos/movimientos', MovimientoController::class)
->names('documentos.movimientos');
Route::resource('tdocumentos/', TdocumentoController::class)
->names('documentos.tdocumentos');

//rutas para oficinas
Route::resource('oficinas/oficinas', OficinaController::class)
->names('oficinas.oficinas');
Route::resource('oficinas/usuarios', User::class)
->names('oficinas.usuarios');