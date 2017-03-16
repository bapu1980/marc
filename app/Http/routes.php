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

Route::resource('blog','BlogController');

Route::get('show_all','BlogController@show_all');

Route::resource('gallery','GalleryController');

Route::get('gallery2','GalleryController@index');

Route::get('show_all_gallery','GalleryController@show_all_gallery');

Route::get('contact','ContactController@getForm');
Route::post('contact','ContactController@postForm');

Route::get('commentaire','CommentaireController@getForm');
Route::post('commentaire','CommentaireController@postForm');