<?php



Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::middleware(['admin'])->group(function () {

      Route::resource('inventarios','InventarioController');


      Route::resource('personas','PersonaController');

      Route::resource('maquinarias','MaquinariaController');

      Route::resource('insumos','InsumoController');

      Route::resource('users','UserController');

      Route::resource('vidrios','VidrioController');

      Route::resource('plan_estudio','PlanEstudioController');

      Route::resource('ingMVS','ingMVSController');

      Route::resource('ingMVSEquiposA','ingMVSEquiposAController');

      Route::resource('ingMVSEquipos','ingMVSEquiposController');

      Route::resource('ingMVSFisica','ingMVSFisicaController');

      Route::resource('ingMVSInsumos','ingMVSInsumosController');

      Route::resource('ingMVSRelacion','ingMVSRelacionController');

});

Route::resource('prestaciones','PrestacionController');

Route::post('/configuracion', 'UserController@profileUpdate')->name('profile.update');

Route::get('/home', 'HomeController@index')->name('home');
