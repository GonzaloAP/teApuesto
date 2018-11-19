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

Route::get('/home', 'HomeController@index')->name('home');


//Usuario (Inicio)
Route::get('guardarUsuario/{ci}/{nombre}/{apellido}/{correo}/{alias}/{password}', 'UsuarioController@StoreUsuario');
Route::get('hola/', 'UsuarioController@Hola');
//Usuario (Fin)