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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('saludo/{nombre?}', function($nombre=null){
	if($nombre){
		return "Hola $nombre, la peticion te saluda.";
	}else{
		return "Hola desconocido, la peticion te saluda.";
	}
});