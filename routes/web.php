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

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
// RUTAS PARA RESTABLECER CONTRASEÑA
Route::get('password/email', 'Auth\ForgotPasswordController@getEmail');
Route::post('password/email', 'Auth\ForgotPasswordController@postEmail');
