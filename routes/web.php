<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', 'HomePageController@Index');
Route::get('api', function() {
    return view('api');
});

Route::get('/loadJS', 'HomePageController@loadJS');

Route::get('listaVias/{location_id}', 'HomePageController@listaVias');