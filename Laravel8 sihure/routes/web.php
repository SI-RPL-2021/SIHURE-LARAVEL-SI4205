<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\karyawanController;
use App\Http\Controllers\hrController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\penggajianController;


Route::get('/', [HomeController::class, 'index']);

//karyawan
Route::get('/karyawan/absensi',  'App\Http\Controllers\karyawanController@absensi')->name('absensi');
Route::get('/karyawan/cuti', 'App\Http\Controllers\karyawanController@cuti')->name('cuti');
Route::get('/karyawan/lembur', [karyawanController::class, 'lembur'])->name('lembur');
Route::post('/karyawan/lembur/insert', [karyawanController::class, 'lemburinsert']);
Route::get('/karyawan/karyawan', [karyawanController::class, 'karyawan']);
Route::get('/karyawan/gaji', [karyawanController::class, 'gaji']);
Route::get('/karyawan/viewgaji', [karyawanController::class, 'viewgaji']);
Route::post('/karyawan/todo', [karyawanController::class, 'todo']);
Route::get('/karyawan/absenpulang', [karyawanController::class, 'absenPulang']);
Route::post('/karyawan/tabel', [karyawanController::class, 'buattabel']);

//hr
Route::get('/hr/absensi', [hrController::class, 'absensi']);
Route::get('/hr/cuti', [hrController::class, 'cuti'])->name('hrcuti');
Route::get('/hr/karyawan', [hrController::class, 'karyawan'])->name('addkaryawan');
Route::get('/hr/addKaryawan', [hrController::class, 'addKaryawan']);
Route::get('/hr/editkaryawan/{id}', [hrController::class, 'editkaryawan']);
Route::get('/hr/karyawan/cari', [hrController::class, 'cari']);
Route::get('/hr/lembur', [hrController::class, 'lembur']);
Route::get('/hr/lembur/{id}', [hrController::class, 'lembur_id']);
Route::get('/hr/penggajian', [hrController::class, 'penggajian'])->name('viewgaji');
Route::get('/hr/editGaji/{id}', [hrController::class, 'editGaji']);
Route::get('/hr/masterdataGaji', [hrController::class, 'masterdataGaji'])->name('hrgaji');;
Route::get('/hr/EditmasterdataGaji', [hrController::class, 'EditmasterdataGaji']);
Route::post('/hr/approvecuti', [hrController::class, 'approve']);
Route::get('/hr/jatahcuti', [hrController::class, 'jatahcuti'])->name('jatahcuti');
Route::post('/hr/jatahcuti/{id}', [hrController::class, 'jatahcutiupdate']);
Route::get('/hr/viewGaji/{id}', [hrController::class, 'viewGaji']);
Route::get('/hr/viewGajiupdate', [hrController::class, 'viewgajiupdate']);
Route::post('/hr/addKaryawan/input', [hrController::class, 'addKaryawaninput']);
Route::post('/hr/addKaryawan/update', [hrController::class, 'addKaryawanupdate']);

//admin
Route::get('/admin/profile', [adminController::class, 'profile']);
Route::get('/admin/cuti', [adminController::class, 'cuti'])->name('admincuti');
Route::get('/admin/lembur', [adminController::class, 'lembur'])->name('adminlembur');
Route::get('/admin/karyawan', [karyawanController::class, 'karyawan']);
Route::post('/admin/approve/lembur', [adminController::class, 'approve']);
Route::post('/admin/lembur/insert', [adminController::class, 'lemburinsert']);
Route::get('/admin/lembur/lihat', [adminController::class, 'lemburlihat']);
Route::post('/admin/approvecuti', [adminController::class, 'approvecuti']);

Route::get('/profile', [karyawanController::class, 'profile'])->name('profile');
Route::post('/profile/todo', [karyawanController::class, 'profiletodo']);
Route::get('/start', [karyawanController::class, 'starter']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/pegawai',[pegawaiController::class, 'index']);
Route::get('/pegawai/cari',[pegawaiController::class, 'cari']);


//penggajian
Route::get('/hr/EditmasterdataGaji/gaji', [penggajianController::class,'gajian']);

//register
Route::post('/daftar', [HomeController::class, 'daftar']);
Route::get('/divisi', [HomeController::class, 'divisi']);
