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



Route::get('/', 'WelcomeController@index')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
Route::get('/mahasiswa/create', 'MahasiswaController@create')->name('mahasiswa.create');
Route::post('/mahasiswa', 'MahasiswaController@store')->name('mahasiswa.store');
Route::get('/mahasiswa/{id}/edit', 'MahasiswaController@edit')->name('mahasiswa.edit');
Route::put('/mahasiswa/{id}', 'MahasiswaController@update')->name('mahasiswa.update');
Route::delete('/mahasiswa/{id}', 'MahasiswaController@destroy')->name('mahasiswa.destroy');

Route::get('/slider', 'SliderController@index')->name('slider');
Route::get('/slider/create', 'SliderController@create')->name('slider.create');
Route::post('/slider', 'SliderController@store')->name('slider.store');
Route::get('/slider/{id}/edit', 'SliderController@edit')->name('slider.edit');
Route::put('/slider/{id}', 'SliderController@update')->name('slider.update');
Route::delete('/slider/{id}', 'SliderController@destroy')->name('slider.destroy');

Route::get('/slider/cetak', 'SliderController@cetak')->name('slider.cetak');