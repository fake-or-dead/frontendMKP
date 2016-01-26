<?php

// use Cache ;
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


Route::group(['middleware' => ['bannertoolcheckpermission']], function () {
	Route::group(['prefix' => 'admin'], function () {
    Route::resource('/groupuser', 'Admin\GroupuserController', ['except' => ['show']]);
		Route::resource('/user', 'Admin\UserController', ['except' => ['show']]);
		Route::resource('/location', 'Admin\LocationController', ['except' => ['show']]);
		Route::resource('/login', 'Admin\LoginController', ['only'=>['index', 'store']]);
		Route::resource('/dashboard', 'Admin\DashboardController', ['only'=>'index']);
		Route::resource('/banner', 'Admin\BannerController');

		Route::get('/logout', 'Admin\LoginController@logout');
		Route::get('/changelang', 'Admin\LoginController@lang');
	});
});


Route::group(['middleware' => ['frontend']], function () {




});
