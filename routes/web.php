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

Route::get('praktikum1', function () {
    return view('prak1web'); //kalau sudah konek model, cara ini tidak bisa
});

Route::get('tugas4', function () {
    return view('tugas4');
});

Route::get('praktikum2','ViewController@showPraktikum2');

Route::get('ets','ViewController@showEts');

Route::get('show','ViewController@showForm');
Route::post('energimekanik','ViewController@hitungEm');

//route CRUD
Route::get('/pegawai','PegawaiController@index');
