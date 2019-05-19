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
    return view('index');
});

Route::resource('accpengajuan','AccpengajuanController');
Route::resource('hasiltest','HasiltestController');
Route::resource('requestpengajuan','RequestpengajuanController');
Route::resource('suratlamaran','SuratlamaranController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
