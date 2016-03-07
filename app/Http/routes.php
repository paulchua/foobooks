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



Route::group(['middleware' => ['web']], function () {

	Route::get('/', function () {
		//return view('welcome');
		return 'Hello welcome to my Laravel application!';
	});
	
	Route::get('/books', 'BookController@getIndex');
	Route::get('/book/create', 'BookController@getCreate');		
	Route::post('/book/create/', 'BookController@postCreate');
	Route::get('/book/{id}', 'BookController@getShow');
	
	Route::get('/practice', function() {
		
		echo 'app.url: '.config('app.url');
		echo '<br>app.env: '.config('app.env');
		
		return '';
		
	});
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
