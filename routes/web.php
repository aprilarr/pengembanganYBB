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
    $nama = 'Selamat Datang Di Web SMP Yayasan Budi Bakti';
    return view('welcome', ['nama' => $nama]);
});

Route::get('/ekskul', function () {
    $nama = 'EKSTRAKULIKULER';
    return view('ekskul', ['nama' => $nama]);
});

Route::get('/galeri', function () {
    $nama = 'GALERI SMP YBB';
    return view('galeri', ['nama' => $nama]);
});

Route::get('/portal', function () {
    $nama = 'PORTAL BERITA SMP YBB';
    return view('portal', ['nama' => $nama]);
});

Route::get('/profil', function () {
    $nama = 'PROFIL SMP YBB';
    return view('profil', ['nama' => $nama]);
});

Route::get('/organigram', function () {
    $nama = 'STRUKTUR ORGANISASI SMP YBB';
    return view('organigram', ['nama' => $nama]);
});

Route::get('/kontak', 'KontakController@index');
Route::post('/kontak/send', 'KontakController@send');

// Route::get('/teachers', 'TeachersController@index');
Route::resource('teachers', 'TeachersController');