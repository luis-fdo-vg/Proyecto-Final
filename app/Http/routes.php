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
    return view('vistaBienvenido');
});


Route::get('proyecto-final/public/Inicio', function () 
{
    return view('vistaBienvenido');
});

Route::get('proyecto-final/public/Ubicacion', function () 
{
    return view('vistaUbicacion');
});

Route::get('proyecto-final/public/publicacion', function () 
{
    return view('vistaPublicacion');
});

Route::get('proyecto-final/public/productos', 'ConsumiblesController@productos');

Route::get('proyecto-final/public/ananir/{id}', 'ConsumiblesController@anadirventa');

Route::get('proyecto-final/public/Cotizar', 'PdfController@Cotizar');

Route::get('proyecto-final/public/categoria/{id}','ConsumiblesController@categorias');