<?php

use Illuminate\Support\Facades\Route;

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





Auth::routes();
Route::get('/', 'FrontendController@home');
Route::get('/home', 'FrontendController@home')->name('home');

Route::get('/materi', 'FrontendController@materi')->name('materi');
Route::get('/materi/detail/{slug}', 'FrontendController@materi_detail')->name('materi.detail');

Route::get('/uji', 'FrontendController@uji')->name('uji');

Route::get('/klasifikasi', 'FrontendController@daftar_anggota')->name('klasifikasi');
Route::post('/klasifikasi/proses', 'KlasifikasiController@store')->name('klasifikasi.proses');

Route::get('/hasil', 'FrontendController@hasil_daftar')->name('hasil');



// Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/backend/materi', 'MateriController@index')->name('backend.materi');
    Route::get('/backend/materi/add', 'MateriController@add')->name('add.materi');
    Route::post('/backend/materi/store', 'MateriController@store')->name('store.materi');
    Route::get('/backend/materi/edit/{id}', 'MateriController@edit')->name('edit.materi');
    Route::post('/backend/materi/update/{id}', 'MateriController@update')->name('update.materi');
    Route::get('/backend/materi/destroy/{id}', 'MateriController@destroy')->name('destroy.materi');

    Route::get('/backend/question', 'QuestionController@index')->name('backend.question');
    Route::get('/backend/question/add', 'QuestionController@add')->name('add.question');
    Route::post('/backend/question/store', 'QuestionController@store')->name('store.question');
    Route::get('/backend/question/edit/{id}', 'QuestionController@edit')->name('edit.question');
    Route::post('/backend/question/update/{id}', 'QuestionController@update')->name('update.question');
    Route::get('/backend/question/destroy/{id}', 'QuestionController@destroy')->name('destroy.question');
});
