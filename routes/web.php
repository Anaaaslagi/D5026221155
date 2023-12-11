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

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('halo2', function () {
	return "<marquee>Halo, Selamat datang di tutorial laravel www.malasngoding.com</marquee>";
});

Route::get('/validasi1', function () {
    return view('validasi1');
});

Route::get('/linktree',function() {
    return view('linktree');
});

Route::get('/latihan1',function() {
    return view('latihan1');
});

Route::get('/pertemuan1',function() {
    return view('pertemuan1');
});

Route::get('/js1',function() {
    return view('js1');
});

Route::get('/js2',function() {
    return view('js2');
});

Route::get('/style',function() {
    return view('style');
});

Route::get('/bs4-navbar',function() {
    return view('bs4-navbar');
});

Route::get('/uts',function() {
    return view('uts');
});

Route::get('/blog2',function() {
    return view('blog2');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('show' , 'App\Http\Controllers\DosenController@showBlog');

// Route::get('/pegawai/nama', 'App\Http\Controllers\DosenController@shownama');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

// route blog
Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

//Pertemuan 4 Desember 2023
Route::get('/nilaikuliah', 'App\Http\Controllers\LatihanEASController@index');
Route::get('/nilaikuliah/tambah', 'App\Http\Controllers\LatihanEASController@tambah');
Route::post('/nilaikuliah/store', 'App\Http\Controllers\LatihanEASController@store');

//Latihan Pra EAS
Route::get('/dvd','App\Http\Controllers\DvdController@index');
Route::get('/dvd/tambah','App\Http\Controllers\DvdController@tambah');
Route::post('/dvd/store','App\Http\Controllers\DvdController@store');
Route::get('/dvd/edit/{kode}','App\Http\Controllers\DvdController@edit');
Route::post('/dvd/update','App\Http\Controllers\DvdController@update');
Route::get('/dvd/hapus/{kode}','App\Http\Controllers\DvdController@hapus');
Route::get('/dvd/view/{kode}','App\Http\Controllers\DvdController@view');
Route::get('/dvd/cari','App\Http\Controllers\DvdController@cari');

//Latihan Mandiri Sebelum EAS
Route::get('/topi','App\Http\Controllers\topiController@index');
Route::get('/topi/tambah','App\Http\Controllers\topiController@tambah');
Route::post('/topi/store','App\Http\Controllers\topiController@store');
Route::get('/topi/edit/{kode}','App\Http\Controllers\topiController@edit');
Route::post('/topi/update','App\Http\Controllers\topiController@update');
Route::get('/topi/hapus/{kode}','App\Http\Controllers\topiController@hapus');
Route::get('/topi/view/{kode}','App\Http\Controllers\topiController@view');
Route::get('/topi/cari','App\Http\Controllers\topiController@cari');
