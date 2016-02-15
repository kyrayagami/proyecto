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

// rutas para el panel de administracion

Route::get('/', function () {
    return view('validacion');
});

/*Route::get('/admin', function () {
    return view('welcome');
});*/

Route::group(['prefix'=> 'admin','middleware' => 'admin:123456'], function(){

Route::get('/', function () {
    return view('welcome');
});
	Route::resource('categorias', 'CategoriasController');
	Route::get('categorias/{id}/destroy',[
		'uses' 	=> 'CategoriasController@destroy',
		'as'	=> 'admin.categorias.destroy'
		]);
	Route::resource('conductores', 'ConductoresController');
	Route::get('conductores/{id}/destroy',[
		'uses' 	=> 'ConductoresController@destroy',
		'as'	=> 'admin.conductores.destroy'
		]);
	Route::resource('productores', 'ProductoresController');
	Route::get('productores/{id}/destroy',[
		'uses' 	=> 'ProductoresController@destroy',
		'as'	=> 'admin.productores.destroy'
		]);
	Route::resource('programas', 'ProgramasController');
	Route::get('programas/{id}/destroy',[
		'uses' 	=> 'ProgramasController@destroy',
		'as'	=> 'admin.programas.destroy'
		]); 
	Route::resource('horarios', 'HorariosController');
	Route::get('horarios/{id}/destroy',[
		'uses' 	=> 'HorariosController@destroy',
		'as'	=> 'admin.horarios.destroy'
		]);
	Route::resource('tags', 'TagsController');
	Route::get('tags/{id}/destroy',[
		'uses' => 'TagsController@destroy',
		'as'   => 'admin.tags.destroy'
		]);
	Route::resource('horario_pdf', 'HorarioPDFController');

	Route::resource('parrilla', 'ParrillaController');
	Route::resource('lunes', 'LunesController');
	Route::resource('martes', 'MartesController');
	Route::resource('miercoles', 'MiercolesController');
	Route::resource('jueves', 'JuevesController');
	Route::resource('viernes', 'ViernesController');
	Route::resource('sabado', 'SabadoController');
	Route::resource('domingo', 'DomingoController');
	//Route::get('parrilla', 'ParrillaController');	
	Route::resource('impresion', 'ImpresionController');
});
