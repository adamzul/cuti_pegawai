<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['prefix' => 'task'], function () {
    
	Route::get('/', 'TaskController@index');
	Route::post('/', 'TaskController@store');
	Route::post('/get_data', 'TaskController@getData');
	Route::get('/edit/{id}', 'TaskController@edit');
	Route::put('/', 'TaskController@update');
	Route::delete('/{id}','TaskController@delete');
});

Route::group(['prefix' => 'pegawai', 'middleware' => 'auth'], function () {
	Route::get('/', 'PegawaiController@index');
	Route::post('/', 'PegawaiController@store');
	Route::post('/get_data', 'PegawaiController@getData');
	Route::get('/edit/{id}', 'PegawaiController@edit');
	Route::put('/', 'PegawaiController@update');
	Route::delete('/{id}','PegawaiController@delete');
});

Route::group(['prefix' => 'divisi'], function () {
	Route::get('/', 'DivisiController@index');
	Route::post('/', 'DivisiController@store');
	Route::post('/get_data', 'DivisiController@getData');
	Route::get('/edit/{id}', 'DivisiController@edit');
	Route::put('/', 'DivisiController@update');
	Route::delete('/{id}','DivisiController@delete');
});

Route::group(['prefix' => 'jabatan'], function () {
	Route::get('/', 'JabatanController@index');
	Route::post('/', 'JabatanController@store');
	Route::post('/get_data', 'JabatanController@getData');
	Route::get('/edit/{id}', 'JabatanController@edit');
	Route::put('/', 'JabatanController@update');
	Route::delete('/{id}','JabatanController@delete');
});

Route::auth();



Route::get('/home', 'HomeController@index');
Route::get('/', function(){
	return redirect('/pegawai');
});
