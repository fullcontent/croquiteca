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






Route::get('pesquisar', 'HomePageController@pesquisar');
Route::post('pesquisar', 'HomePageController@pesquisar');



//Mapa

Route::get('/listLocais', 'MapController@listLocais');