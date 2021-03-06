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
    return view('welcome');
});

Auth::routes();

Route::get('ExportParticipantes','ExcelController@ExportParticipantes');
Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function()
{
	Route::resource('inscripcion', 'InscripcionController');
	Route::resource('colegio', 'ColegioController');
	Route::resource('participante', 'ParticipanteController');
// monitorear
	Route::resource('evento', 'EventoController');
	Route::get('api/evento', 'EventoController@apiEvento')->name('api.evento');
	Route::resource('area', 'AreaController');
	Route::resource('actividad', 'ActividadController');

	Route::resource('evaluacion', 'EvaluacionController');
	Route::resource('puntajeextra', 'PuntajeExtraController');
	Route::resource('puntajetotal', 'PuntajeTotalController');

	Route::group(['prefix' => 'db'], function(){
        Route::get('participante/', 'ParticipanteController@imexport')->name('participante.imexport');
        Route::post('participante/import', 'ParticipanteController@importParticipante')->name('participante.import');
        Route::get('participante/export', 'ParticipanteController@exportParticipante')->name('participante.export');
    });
});
		