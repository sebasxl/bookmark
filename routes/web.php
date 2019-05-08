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
Route::get('/api/json', 'ApiController@getJson')->name('json');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/importar-datos-megustaleer', 'HomeController@importjsonmegustaleer')->name('importjsonmegustaleer');
Route::post('/step2-datos-megustaleer', 'HomeController@handleJSONImporter')->name('handleJSONImporter');
//Route::get('/importardatos', 'HomeController@importer')->name('importer');
Route::get('/verdatos', 'HomeController@show')->name('show');
Route::get('/importardatos', 'HomeController@importer')->name('importer');
Route::post('/importardatos', 'HomeController@handleImporter')->name('handleImporter');
Route::get('/exportardatos', 'HomeController@exporter')->name('exporter');
