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

Route::get('/', function () {
    return view('welcome');
});
Route::apiResource('apiMascota','MascotaController');
Route::apiResource('apiEspecie','EspecieController');
Route::apiResource('apiPropietario','PropietarioController');
Route::apiResource('apiRaza','RazaController');
