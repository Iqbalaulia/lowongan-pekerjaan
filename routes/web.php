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
Route::resource('email-berkas-diterima','EmailBerkasController');
Route::resource('email-berkas-ditolak','EmailBerkasDitolakController');
Route::resource('email-test-diterima','EmailTestDiterimaController');
Route::resource('email-test-ditolak','EmailTestDitolakController');
Route::resource('dashboard','DashboardController');

Route::post('send/email-berkas-diterima','EmailBerkasController@sendmail');
Route::post('send/email-berkas-ditolak','EmailBerkasDitolakController@sendmail');
Route::post('send/email-test-diterima','EmailTestDiterimaController@sendmail');
Route::post('send/email-test-ditolak','EmailTestDitolakController@sendmail');

// Route::get('email-berkas-ditolak','EmailBerkasController@index');
// Route::get('email-berkas-diterima','EmailBerkasController@index');

// Route::get('email-hasil-test-ditolak','HasiltestController@mailHomeTolak');
// Route::get('email-hasil-test-diterima','HasiltestController@mailHomeTerima');

Route::get('/home', 'HomeController@index')->name('home');
