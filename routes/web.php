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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::resource('penduduk', 'PendudukController');
    Route::group(['namespace' => 'Surat', 'prefix' => 'surat', 'as' => 'surat.'], function () {
        Route::resource('surat-kematian', 'SuratKematianController');
        Route::resource('surat-skck', 'SuratSKCKController');
        Route::resource('surat-usaha', 'SuratUsahaController');
        Route::resource('surat-tidak-mampu', 'SuratTidakMampuController');
        Route::resource('surat-keramaian', 'SuratKeramaianController');
        Route::resource('surat-kelahiran', 'SuratKelahiranController');
    });
    Route::group(['namespace' => 'Laporan', 'prefix' => 'laporan', 'as' => 'laporan.'], function () {
        Route::resource('surat-masuk', 'SuratMasukController');
    });
});
