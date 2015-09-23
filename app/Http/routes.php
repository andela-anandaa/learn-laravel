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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', 'TestController@index');
Route::get('/temp', 'TestController@temp');
Route::get('/home', function () {
	return view('test.home');
});
Route::get('user/{name}', ['as' => 'profile', function ($name) {
	return view('test.profile', array('name' => $name));
}]);

Route::resource('photo', 'PhotoController',
				['only' => ['index', 'show']]);


// fall-back
Route::get('/{any?}', function ($any = 'any') {
	return view('test.home');
});