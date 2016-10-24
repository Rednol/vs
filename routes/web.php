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


Route::get('/leereenheden', 'LeereenhedenController@index');
Route::post('/leereenheden/toevoegen','LeereenhedenController@insert');

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', 'AdminController@index');
Route::post('admin', 'AdminController@store');

