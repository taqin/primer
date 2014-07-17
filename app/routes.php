<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


//Authentication layer 
Route::get('login','SessionsController@create');
Route::get('logout','SessionsController@destroy');
Route::get('goodbye','PagesController@goodbye');
Route::resource ('sessions', 'SessionsController');

// Route::get('/', function()
// {
// 	return View::make('wall');

// });

Route::get('/', 'WallController@index');
Route::resource('/blasts', 'BlastController');

// Here are the Admin Routes for the application
Route::group(array('prefix' => 'admin', 'before' => 'auth'), function() {
	
	Route::get('/', 'AdminController@index')->before('auth');
	//Wall Section
	Route::get('/walls', 'WallController@index')->before('auth');
	Route::resource ('/walls', 'WallController');

	//Tweets Section
	Route::get('/blasts', 'BlastController@index')->before('auth');
	Route::resource ('/blasts', 'BlastController');


});