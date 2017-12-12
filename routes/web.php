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

Route::get('/', 'BaseController@getIndex');
Route::get('/products', 'ProductController@getAll');
Route::get('/product/{id}', 'ProductController@getOne');

//Route::get('/catalog/(id)', 'ProductController@getCatalog');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/home', 'HomeController@postIndex');

Route::group(["middleware"=>["admin"]], function(){
	Route::get('admin/index', 'AdminController@getIndex');
});
