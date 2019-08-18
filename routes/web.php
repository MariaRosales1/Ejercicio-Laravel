<?php

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


Route::get('Zona-Inicio/{codigo}','RestriccionController@index');
Route::get('vehiculos','VehiculoController@create');
Route::post('vehiculos','VehiculoController@store');
Route::get('vehiculos-lista','VehiculoController@index');
Route::get('estadisticas','VehiculoController@estadistica');