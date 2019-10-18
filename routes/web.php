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

Route::get('/', function () {
    return view('user');
});

Auth::routes();

Route::middleware(['admin'])->group(function () {

      Route::resource('inventarios','InventarioController');

      Route::resource('personas','PersonaController');

      Route::get('/search','SearchController@show');




});

Route::resource('prestaciones','PrestacionController');


Route::get('/home', 'HomeController@index')->name('home');
