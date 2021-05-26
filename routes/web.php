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

Route::get('/', function () {
    return view('welcome');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/backend/materi', 'MateriController@index')->name('backend.materi');
    Route::get('/backend/materi/add', 'MateriController@add')->name('add.materi');
    Route::post('/backend/materi/store', 'MateriController@store')->name('store.materi');
    Route::get('/backend/materi/edit/{id}', 'MateriController@edit')->name('edit.materi');
});
