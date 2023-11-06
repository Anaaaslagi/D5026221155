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

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('show' , 'App\Http\Controllers\DosenController@showBlog');
