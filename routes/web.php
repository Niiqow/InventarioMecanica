<?php


Route::get('/', function () {
    return view('welcome');
});


Route::resource('inventarios','InventarioController');

Route::resource('prestaciones', 'PrestacionController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
