<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswaController;
use App\Models\studen;
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
    #tampilkan data dari database studen
    $studens = studen::all();
    return view(
        'tabel',
        [
            'title' => 'Tabel',
            'studens' => $studens
        ]
    );
});
Route::get('/mahasiswa', [mahasiswaController::class, 'index']);
Route::post('/mahasiswa/tambah', [mahasiswaController::class, 'create']);
Route::get('/mahasiswa/hapus/{id}', [mahasiswaController::class, 'delete']);
#Route::get('/mahasiswa/edit/{studen}', [mahasiswaController::class, 'show']);
Route::put('/mahasiswa/ubah/{studen}', [mahasiswaController::class, 'update']);
