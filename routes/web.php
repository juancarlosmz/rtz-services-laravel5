<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
// servicios servicio
Route::get('servicio','ServicioController@servicio');

Route::get('proyecto','ProyectosController@proyecto');

Route::get('unproyecto/{titulo}','ProyectosController@unproyecto');

/*
Route::post('servicio','ServicioController@store');
Route::put('servicio/{id}','ServicioController@update');
Route::delete('servicio/{id}','ServicioController@destroy');
*/
Route::get('/', function () {
    return view('welcome');
});
