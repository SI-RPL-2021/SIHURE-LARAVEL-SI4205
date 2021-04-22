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

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [HomeController::class, 'index']);



// Route::get('/karyawan/absensi',  'App\Http\Controllers\karyawanController@absensi')->name('absensi');
// Route::get('/karyawan/cuti', 'App\Http\Controllers\karyawanController@cuti')->name('cuti');
// Route::get('/karyawan/lembur', [karyawanController::class, 'lembur']);
// Route::get('/karyawan/karyawan', [karyawanController::class, 'karyawan']);
// Route::get('/karyawan/gaji', [karyawanController::class, 'gaji']);
// Route::post('/karyawan/todo', [karyawanController::class, 'todo']);
// Route::get('/karyawan/absenpulang', [karyawanController::class, 'absenPulang']);
// Route::post('/karyawan/tabel', [karyawanController::class, 'buattabel']);

// Route::get('/hr/absensi', [hrController::class, 'absensi']);
// Route::get('/hr/cuti', [hrController::class, 'cuti'])->name('hrcuti');
// Route::get('/hr/karyawan', [hrController::class, 'karyawan']);
// Route::get('/hr/lembur', [hrController::class, 'lembur']);
// Route::get('/hr/penggajian', [hrController::class, 'penggajian']);
// Route::post('/hr/approvecuti', [hrController::class, 'approve']);
