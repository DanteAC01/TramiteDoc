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
})->middleware('auth');
Route::resource('movimientos', MovimientoController::class)
->names('movimientos');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name ('home');


//rutas para documentos
Route::resource('documentos/clientes', ClienteController::class)
->names('documentos.clientes');
Route::resource('documentos/documentos', DocumentoController::class)
->names('documentos.documentos');
Route::resource('documentos/tdocumentos', TdocumentoController::class)
->names('documentos.tdocumentos');



//rutas para oficinas
Route::resource('oficinas/oficinas', OficinaController::class)
->names('oficinas.oficinas');
Route::resource('oficinas/usuarios', UserController::class)
->names('oficinas.usuarios');
//ruta para movimientos