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

Route::get('/', 'ConsumiblesController@index');



Route::get('proyecto-final/public/Inicio', 'ConsumiblesController@index');

Route::get('proyecto-final/public/Ubicacion', 'ConsumiblesController@mapa');

Route::get('proyecto-final/public/publicacion', 'ConsumiblesController@publicacion');

Route::get('proyecto-final/public/productos', 'ConsumiblesController@productos');

Route::get('proyecto-final/public/ananir/{id}', 'ConsumiblesController@anadirventa');

Route::get('proyecto-final/public/Cotizar', 'PdfController@Cotizar');

Route::get('proyecto-final/public/categoria/{id}','ConsumiblesController@categorias');

Route::get('proyecto-final/public/borrar/{id}/{idpro}','ConsumiblesController@borrar');