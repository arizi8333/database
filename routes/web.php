<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\KartuKeluargaController;
use App\Http\Controllers\LaporanController;
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


Route::get('/', [PendudukController::class, 'index']);

Route::get('nagari', [LaporanController::class, 'nagari'])->name('Laporan.nagari');
Route::post('nagari', [LaporanController::class, 'nagari_show'])->name('Laporan.searchN');

Route::get('umur', [LaporanController::class, 'umur'])->name('Laporan.umur');

Route::get('pendidikan', [LaporanController::class, 'pendidikan'])->name('Laporan.pendidikan');

Route::resource('Laporan', LaporanController::class);

Route::resource('Penduduk', PendudukController::class);

Route::resource('KartuKeluarga', KartuKeluargaController::class);