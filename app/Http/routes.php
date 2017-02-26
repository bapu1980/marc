<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
//	return view('welcome');
//});

Route::get('/','WelcomeController@index');

Route::get('media', [ 'as' => 'image.create', 'uses' => 'ImageController@create']);
Route::post('media', [ 'as' => 'image.store', 'uses' => 'ImageController@save']);
Route::get('media/show', [ 'as' => 'image.resized', 'uses' => 'ImageController@show']);

Route::resource('blog','BlogController');

Route::get('show_all','BlogController@show_all');

Route::resource('gallery','GalleryController');