<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function(){
	
	Route::resource('categorias','CategoriasController');

	Route::resource('conductores','ConductoresController');

	Route::resource('dias','DiasController');

	Route::resource('horarios','HorariosController');

	Route::resource('productores','ProductoresController');

	Route::resource('programas','ProgramasController');

	Route::resource('tags','TagsControlles');



});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
