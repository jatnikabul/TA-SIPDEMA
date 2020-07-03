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
Route::get('/admin', function(){
    return view('admin');
})->name('adminpage');
Route::get('admin-login','Auth\LoginController@showLoginForm');
Route::post('admin-login', ['as' => 'admin-login', 'uses' => 'Auth\LoginController@login']);
Route::get('admin-register','Auth\LoginController@showRegisterPage');
Route::post('admin-register', 'Auth\LoginController@register')->name('admin.register');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    Route::resource('penduduk', 'PendudukController');
    Route::resource('register', 'RegisterController');
    Route::get('print/surat-register/cetak_pdf/{id}', 'RegisterController@cetak_pdf')->name('print-surat-register');
    Route::get('desa', 'DesaController@statistik')->name('desa-grafik');
    Route::group(['namespace' => 'Surat', 'prefix' => 'surat', 'as' => 'surat.'], function () {
        Route::get('print/surat-kematian/cetak_pdf/{id}', 'SuratKematianController@cetak_pdf')->name('print-kematian');
        Route::get('print/surat-keramaian/cetak_pdf/{id}', 'SuratKeramaianController@cetak_pdf')->name('print-keramaian');
        Route::get('print/surat-tidak-mampu/cetak_pdf/{id}', 'SuratTidakMampuController@cetak_pdf')->name('print-surat-tidak-mampu');
        Route::get('print/surat-usaha/cetak_pdf/{id}', 'SuratUsahaController@cetak_pdf')->name('print-surat-usaha');
        Route::get('print/surat-kelahiran/cetak_pdf/{id}', 'SuratKelahiranController@cetak_pdf')->name('print-surat-kelahiran');
        Route::get('print/surat-skck/cetak_pdf/{id}', 'SuratSKCKController@cetak_pdf')->name('print-surat-skck');
        Route::resource('surat-kematian', 'SuratKematianController');
        Route::resource('surat-skck', 'SuratSKCKController');
        Route::resource('surat-usaha', 'SuratUsahaController');
        Route::resource('surat-tidak-mampu', 'SuratTidakMampuController');
        Route::resource('surat-keramaian', 'SuratKeramaianController');
        Route::resource('surat-kelahiran', 'SuratKelahiranController');
    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
