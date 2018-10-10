<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|----------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
	return view('welcome');
});


Route::get('/brands', 'BrandController@index');

Route::get('/brands/create', 'BrandController@create');

Route::post('/brands', 'BrandController@store');

Route::get('/brands/{brand}', 'BrandController@show');						

Route::get('/brands/{brand}/edit', 'BrandController@edit');						

Route::patch('/brands/{brand}', 'BrandController@update');								

Route::delete('/brands/{brand}', 'BrandController@destroy');						


Route::get('/products', 'ProductController@index');

Route::get('/products/create', 'ProductController@create');

Route::post('/products', 'ProductController@store');

Route::get('/products/{product}', 'ProductController@show');

Route::get('/products/{product}/edit', 'ProductController@edit');

Route::patch('/products/{product}', 'ProductController@update');

Route::delete('/products/{product}', 'ProductController@destroy');


Route::get('/clients', 'ClientController@index');

Route::get('/clients/create', 'ClientController@create');

Route::post('/clients', 'ClientController@store');

Route::get('/clients/{client}', 'ClientController@show');	

Route::get('/clients/{client}/edit', 'ClientController@edit');	

Route::patch('/clients/{client}', 'ClientController@update');

Route::delete('/clients/{client}', 'ClientController@destroy');	


Route::get('/buys', 'BuyController@index');

Route::get('/buys/create', 'BuyController@create');

Route::post('/buys', 'BuyController@store');

Route::get('/buys/{buy}', 'BuyController@show');

Route::get('/buys/{buy}/edit', 'BuyController@edit');

Route::patch('/buys/{buy}', 'BuyController@update');

Route::get('/buys/{buy}/delete', 'BuyController@showDelete');		

Route::delete('/buys/{buy}', 'BuyController@destroy');	

