<?php



Route::get('/', function () {
    return view('user');
});

Auth::routes();

Route::middleware(['admin'])->group(function () {

      Route::resource('inventarios','InventarioController');

      Route::resource('personas','PersonaController');
      
      Route::resource('users','UserController');

      Route::get('/search','SearchController@show');




});

Route::resource('prestaciones','PrestacionController');


Route::get('/home', 'HomeController@index')->name('home');
