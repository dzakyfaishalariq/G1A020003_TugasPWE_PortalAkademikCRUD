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
    return view('mulai', ['title' => 'Home']);
});
Route::get('/tabel', function () {
    return view('tabel', ['title' => 'Tabel']);
});
Route::get('/mahasiwa', function () {
    return view('mahasiswa', ['title' => 'Form-Mahasiswa']);
});
