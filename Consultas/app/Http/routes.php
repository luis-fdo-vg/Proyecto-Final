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

Route::get('proyecto-final/consultas/public/Inicio', function () 
{
    return view('welcome');
});

Route::get('proyecto-final/consultas/public/Ubicacion', function () 
{
    return view('vistaUbicacion');
});
Route::get('proyecto-final/consultas/public/Registro', function () 
{

    return view('registracion');
});
Route::get('proyecto-final/consultas/public/contacto', function () 
{

    return view('contactos');
});

