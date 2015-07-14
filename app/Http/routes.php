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

Route::get('/', function () 
{
    return view('welcome');
});

Route::get('auth/login', function(){
	return view('welcome');
});

Route::get('proyecto-final/public/Inicio', function () 
{
    return view('welcome');
});

Route::get('proyecto-final/public/Ubicacion', function () 
{
    return view('vistaUbicacion');
});

Route::get('home', function()
	{
		return view('welcome');
	});

Route::get('proyecto-final/public/auth/login', 'Auth\AuthController@getLogin');
Route::post('proyecto-final/public/auth/login', 'Auth\AuthController@postLogin');
Route::get('proyecto-final/public/auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('proyecto-final/public/auth/register', 'Auth\AuthController@getRegister');
Route::post('proyecto-final/public/auth/register', 'Auth\AuthController@postRegister');

