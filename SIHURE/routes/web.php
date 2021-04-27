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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin
Route::get('/admin', function () {
    return view('admin.HomeAdmin');
});
Route::get('/admin/absen', function () {
    return view('admin.AbsenAdmin');
});
Route::get('/admin/jatah_cuti', function () {
    return view('admin.JatahCutiAdmin');
});
Route::get('/admin/approval_cuti', function () {
    return view('admin.ApprovalCuti');
});
Route::get('/admin/approval_cuti/edit', function () {
    return view('admin.EditApproval');
});
Route::get('/admin/approval_cuti/edit', function () {
    return view('admin.EditApproval');
});
Route::get('/admin/approval_lembur', function () {
    return view('admin.ApprovalLembur');
});
Route::get('/admin/approval_lembur/edit', function () {
    return view('admin.EditApprovalLembur');
});
Route::get('/admin/approval_lembur/edit', function () {
    return view('admin.EditApprovalLembur');
});
Route::get('/admin/pengajuan_lembur', function () {
    return view('admin.PengajuanLembur');
});

