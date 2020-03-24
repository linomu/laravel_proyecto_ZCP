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

Route::resource('/pollster','PollsterController');

Route::get('/home', 'HomeController@index')->name('home');

//Rutas Juano
Route::resource('/survey','SurveyController');
Route::post('/crear', 'SurveyController@crear')->name('survey.crear');
Route::get('/listar', 'SurveyController@listarEncuestas')->name('surveys_list');
//Eliminar una encuesta en particular
Route::delete('/survey/{id}','SurveyController@destroy')->name('survey.destroy');
//Editar una encuesta en particular
Route::get('/survey/{id}/edit', 'SurveyController@edit')->name('survey.edit');
//Actualizar una encuesta en particular
Route::put('/survey/{id}','SurveyController@update')->name('survey.update');

//Rutas usadas por Lino
Route::get('/prueba',function(){
    return view ('evaluator.newUserEmail');
});

Route::get('/statistics/{id?}','SurveyController@showStatistics')->name('survey.statistics');

Route::get('/enviarEncuesta','SurveyController@organizarEncuesta')->name('pag_env_encuesta');
Route::post('/survey/email','SurveyController@enviarEncuesta')->name('survey.send');

//Route::get('/SUS/{id?}', 'SurveyController@prueba' );


//Route::post('/survey/email','SurveyController@is_valid_email')->name('survey.is_valid_email');


//Route::resource('/admin','AdminController');

//Mostrar todos los administradores
Route::get('/admin','AdminController@index')->name('admin.index');
//Mostrar el formulario para crear un nuevo usuario
Route::get('/admin/create','AdminController@create')->name('admin.create');
//Guardar un nuevo administrador
Route::post('/admin', 'AdminController@store')->name('admin.store');
// Mostrar un administrador en particular
Route::get('/admin/{id?}','AdminController@show')->name('admin.show');
//Editar un administrador en particular
Route::get('/admin/{id}/edit', 'AdminController@edit')->name('admin.edit');
//Actualizar un administrador en particular
Route::put('/admin/{id}','AdminController@update')->name('admin.update');
//Eliminar un administrador en particular
Route::delete('/admin/{id}','AdminController@destroy')->name('admin.destroy');


//Lo primero sera crear el formulario

//Ruta usada por isabella
Route::get('/SUS/{id?}','SusController@index')->name('sus.index');
Route::post('/SUS','SusController@send_answers')->name('sus.send_answers');
