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

/*Route::get('/politicos', function () {
	$politicos = simplexml_load_file("http://www.camara.gov.br/SitCamaraWS/Deputados.asmx/ObterDeputados");
	echo "<pre>";print_r($politicos);exit();
    return view('politicos', ['deputados' => $politicos]);
});*/

Auth::routes();

Route::get('/importar-politicos', 'PoliticoController@importar');
Route::get('/politicos', 'PoliticoController@index');
Route::get('/soap-test', 'SoapController@show');
Route::get('/home', 'HomeController@index');
