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

Route::get('halaman/tambah', 'jannah@tambah');
Route::resource('halaman','jannah');

Route::resource('mahasiswa', 'Mahasiswa');
Route::resource('user', 'User');
Route::resource('view', 'View');
Route::resource('file', 'file');
