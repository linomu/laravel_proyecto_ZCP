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
    return view('landingpage');
})->name('landingpage');

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/listarEncuestas','encuestadorPaginas@listar')->name('pag_listar');

Route::get('/crearEncuesta','encuestadorPaginas@crear')->name('pag_crear');


//Mostrar todos los administradores
Route::get('/admin','AdminController@index')->name('admin.index');
//Mostrar el formulario para crear un nuevo usuario
Route::get('/admin/create','AdminController@create')->name('admin.create');
//Guardar un nuevo administrador
Route::post('/admin', 'AdminController@store')->name('admin.store');
// Mostrar un administrador en particular
Route::get('/admin/{id?}','AdminController@show')->name('admin.show');