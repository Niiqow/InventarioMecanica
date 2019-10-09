<?php


Route::get('/', function () {
    return view('welcome');
});


Route::resource('inventarios','InventarioController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
