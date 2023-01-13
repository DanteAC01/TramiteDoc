<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\MovimientoController;
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\TdocumentoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
Route::resource('Documentos/clientes', ClienteController::class)
->names('Documentos.clientes');
Route::resource('Documentos/documentos', DocumentoController::class)
->names('Documentos.documentos');
Route::resource('Documentos/tdocumentos', TdocumentoController::class)
->names('Documentos.tdocumentos');



//rutas para oficinas
Route::resource('Oficinas/oficinas', OficinaController::class)
->names('Oficinas.oficinas');
Route::resource('Oficinas/usuarios', UserController::class)
->names('Oficinas.usuarios');
//ruta para movimientos
Route::resource('Movimientos/', MovimientoController::class)
->names('Movimientos');