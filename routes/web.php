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


Route::get('/leereenheden', 'LeereenhedenController@index');
Route::post('/leereenheden/toevoegen','LeereenhedenController@insert');

Route::get('/', function () {
    return view('home');
});

*/

Route::get('/', 'DashboardController@index');
Route::get('/dashboard', 'DashboardController@index'); 
Route::get('/opdrachten', 'OpdrachtenController@index');
Route::post('/opdrachten/toevoegen','OpdrachtenController@insert');
Route::get('admin', 'AdminController@index');
Route::post('admin', 'AdminController@store');

