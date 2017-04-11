<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/politicos', function () {
	$deputados = simplexml_load_file("http://www.camara.gov.br/SitCamaraWS/Deputados.asmx/ObterDeputados");
    return view('politicos', ['deputados' => $deputados]);
});

Auth::routes();

Route::get('/home', 'HomeController@index');
