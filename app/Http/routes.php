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
Route::get('/', 'WelcomeController@index');
Route::get('/admin', function(){
	 return redirect('/admin/home');
});


//Route::get('home', 'HomeController@index');

Route::group(array('prefix' => '/','namespace'=>'Frontend'), function()
{
	Route::resource('contacto','MessageController');
	Route::get('Productos/{tipo}','ProductosController@productosPorTipo');
	Route::resource('Productos','ProductosController@productos');
	Route::resource('showProduct','ProductosController@showProduct');
	Route::resource('Servicios','ServiciosController@index');
	Route::resource('acerca','AcercaController@index');
	Route::resource('listOptions','ProductosController@listOptions');
	Route::resource('showService/{id}','ServiciosController@show');

});

Route::group(array('prefix' => 'admin','namespace'=>'Backend'), function()
{
	 Route::resource('home','AdminController');
	 Route::resource('products','ProductController');
	 Route::resource('services','ServiceController');
	 Route::resource('types','TypeController');
	 Route::resource('messages','AdminController@message');
	 Route::resource('messages3','AdminController@readMore');
	 Route::resource('messages2','AdminController@messageAnswer');
	 Route::get('products/{id}/destroy',[
	 'uses' => 'ProductController@destroy',
	 'as' => 'Backend.products.destroy'
	 ]);
	 Route::get('types/{id}/destroy',[
	 'uses' => 'TypeController@destroy',
	 'as' => 'Backend.types.destroy'
		]);
		Route::get('services/{id}/destroy',[
 	 'uses' => 'ServiceController@destroy',
 	 'as' => 'Backend.services.destroy'
 		]);


});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
