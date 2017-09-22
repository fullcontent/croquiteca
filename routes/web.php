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

Route::get('/mapa', 'HomePageController@Mapa');
Route::get('/local/{id?}', 'HomePageController@Local');
Route::get('/local/{id?}/setores', 'HomePageController@LocalSetores');
Route::get('/locais/{id?}', 'HomePageController@Locais');


Route::get('/via/{id?}', 'HomePageController@Via');





Route::get('pesquisar', 'HomePageController@pesquisar');
Route::post('pesquisar', 'HomePageController@pesquisar');



//Mapa

Route::get('/listLocais', 'MapController@listLocais');