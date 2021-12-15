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
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/detail/{id}','PegawaiController@view');

Route::get('/mutasi','MutasiController@index');
Route::get('/mutasi/tambah','MutasiController@tambah');
Route::post('/mutasi/store','MutasiController@store');
Route::get('/mutasi/edit/{id}','MutasiController@edit');
Route::post('/mutasi/update','MutasiController@update');
Route::get('/mutasi/hapus/{id}','MutasiController@hapus');
Route::get('/mutasi/detail/{id}','MutasiController@view');

Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/detail/{id}','AbsenController@view');

Route::get('/tas','TasController@index');
Route::get('/tas/tambah','TasController@tambah');
Route::post('/tas/store','TasController@store');
Route::get('/tas/edit/{kodetas}','TasController@edit');
Route::post('/tas/update','TasController@update');
Route::get('/tas/hapus/{kodetas}','TasController@hapus');
Route::get('/tas/cari','TasController@cari');
Route::get('/tas/detail/{kodetas}','TasController@view');

Route::get('/keranjangbelanja','KeranjangBelanjaController@index');
Route::get('/keranjangbelanja/tambah','KeranjangBelanjaController@tambah');
Route::post('/keranjangbelanja/store','KeranjangBelanjaController@store');
Route::get('/keranjangbelanja/edit/{id}','KeranjangBelanjaController@edit');
Route::post('/keranjangbelanja/update','KeranjangBelanjaController@update');
Route::get('/keranjangbelanja/hapus/{id}','KeranjangBelanjaController@hapus');
Route::get('/keranjangbelanja/cari','KeranjangBelanjaController@cari');
Route::get('/keranjangbelanja/detail/{id}','KeranjangBelanjaController@view');
