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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/importar-datos-json', 'HomeController@importjson')->name('importjson');
Route::post('/importar-datos-json', 'HomeController@handleJSON2Database')->name('handleJSON2Database');
Route::get('/step3-datos-json/{id}', 'HomeController@handleJson')->name('handleJSONMGLImporter');
//Route::get('/importardatos', 'HomeController@importer')->name('importer');
Route::get('/verdatos', 'HomeController@show')->name('show');
Route::get('/importardatos', 'HomeController@importer')->name('importer');
Route::post('/importardatos', 'HomeController@handleImporter')->name('handleImporter');
Route::get('/exportardatos', 'HomeController@exporter')->name('exporter');
/* Route::get('/exportardatos', 'HomeController@exporter')->name('exporter'); */
Route::get('/exportar-a-csv', 'HomeController@export')->name('export2csv');

Route::get('/buscador', 'HomeController@find')->name('buscador');

Route::get('/hacer-backup', function () {
    Artisan::call('backup:run');
    session()->flash('notif','Backup Realizado!');
    return redirect()->route('exporter');
});
