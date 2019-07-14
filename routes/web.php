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
Auth::routes();



Route::resource('accpengajuan','AccpengajuanController');
Route::resource('hasil-test','HasiltestController');
Route::resource('requestpengajuan','RequestpengajuanController');
Route::resource('suratlamaran','SuratlamaranController');
Route::resource('pelamar','PelamarController');
Route::resource('file', 'FileController');
Route::resource('persetujuan_pengajuan','PersetujuanPengajuanController');


Route::post('send/email','SuratlamaranController@sendmail');
Route::get('email-ditolak','SuratlamaranController@mailHome');

Route::get('/home', 'HomeController@index')->name('home');
