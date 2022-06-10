<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;

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
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/tambahmahasiswa', [MahasiswaController::class, 'tambahmahasiswa'])->name('tambahmahasiswa');
Route::post('/insertdata', [MahasiswaController::class, 'insertdata'])->name('insertdata');
Route::get('/tampilkandata/{id}', [MahasiswaController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}', [MahasiswaController::class, 'updatedata'])->name('updatedata');
Route::get('/delete/{id}', [MahasiswaController::class, 'delete'])->name('delete');
Route::get('/detaildata/{id}', [MahasiswaController::class, 'detaildata'])->name('detaildata');
Route::get('/exportpdf', [MahasiswaController::class, 'exportpdf'])->name('exportpdf');
