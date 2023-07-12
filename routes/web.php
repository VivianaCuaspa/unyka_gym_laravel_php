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


Route::resource('socios', App\Http\Controllers\SociosController::class);
Route::get('socios_search', 'App\Http\Controllers\SociosController@searchSocios')->name('socios.search');





Route::resource('tipoSuscripciones', App\Http\Controllers\TipoSuscripcionesController::class);
Route::get('tipo_suscripciones_search', 'App\Http\Controllers\TipoSuscripcionesController@searchTipoSuscripciones')->name('tipo_suscripciones.search');






Route::resource('suscripcions', App\Http\Controllers\SuscripcionController::class);
