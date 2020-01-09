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



route::get('home','VoitureController@home');
route::get('index','VoitureController@index');
route::get('show','VoitureController@show');
route::post('store','VoitureController@store');
route::get('create','VoitureController@create');
route::put('update/{id}','VoitureController@update');
route::get('edit/{id}','VoitureController@edit');
route::delete('delete/{id}','VoitureController@delete');
route::get('booking/{id?}','VoitureController@booking');