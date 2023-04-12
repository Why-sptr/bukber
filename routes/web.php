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
    return view('homepage');
});
Route::get('/homepage', function () {
    return view('homepage');
});
Route::get('/product', function () {
    return view('product');
});
Route::get('/detailproduct', function () {
    return view('detailproduct');
});
Route::get('/owner', function () {
    return view('owner');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/datagenerasi', [App\Http\Controllers\DataGenerasiController::class, 'data'])->name('product');
Route::get('/tambahdata', [App\Http\Controllers\DataGenerasiController::class, 'tambahdata']);
Route::post('/insertdata', [App\Http\Controllers\DataGenerasiController::class, 'insertdata']);
Route::get('/exportpdf', [App\Http\Controllers\DataGenerasiController::class, 'exportpdf'])->name('exportpdf');

Route::get('/tampilkandata/{id}', [App\Http\Controllers\DataGenerasiController::class, 'tampil'])->name('admin/tampilkandata');
Route::post('/updatedata/{id}', [App\Http\Controllers\DataGenerasiController::class, 'updatedata'])->name('admin/updatedata');

Route::delete('/deletedata/{id}', [App\Http\Controllers\DataGenerasiController::class, 'delete'])->name('admin/deletedata');
Route::get('/trashdata', [App\Http\Controllers\DataGenerasiController::class, 'trash'])->name('admin/trashdata');
Route::get('/restoredata/{id}', [App\Http\Controllers\DataGenerasiController::class, 'restore'])->name('admin/restoredata');
Route::get('/restoredataall', [App\Http\Controllers\DataGenerasiController::class, 'restoreall'])->name('admin/restoredataall');
Route::get('/hapuspermanendata/{id}', [App\Http\Controllers\DataGenerasiController::class, 'hapuspermanen'])->name('hapuspermanendata');
Route::get('/hapuspermanensemuadata', [App\Http\Controllers\DataGenerasiController::class, 'hapuspermanenall'])->name('hapuspermanensemuadata');

Route::get('/bukber/{id}', [DataGenerasiController::class, 'getDataById']);
Route::get('/datagenerasi1', [App\Http\Controllers\DataGenerasiController::class, 'generasi1']);
Route::get('/datagenerasi2', [App\Http\Controllers\DataGenerasiController::class, 'generasi2']);
Route::get('/datagenerasi3', [App\Http\Controllers\DataGenerasiController::class, 'generasi3']);
Route::get('/datagenerasi4', [App\Http\Controllers\DataGenerasiController::class, 'generasi4']);
Route::get('/datagenerasi5', [App\Http\Controllers\DataGenerasiController::class, 'generasi5']);
Route::get('/datagenerasi6', [App\Http\Controllers\DataGenerasiController::class, 'generasi6']);
Route::get('/datagenerasi7', [App\Http\Controllers\DataGenerasiController::class, 'generasi7']);
Route::get('/datagenerasi8', [App\Http\Controllers\DataGenerasiController::class, 'generasi8']);
Route::get('/datagenerasi9', [App\Http\Controllers\DataGenerasiController::class, 'generasi9']);
Route::get('/datagenerasi10', [App\Http\Controllers\DataGenerasiController::class, 'generasi10']);
Route::get('/datagenerasi11', [App\Http\Controllers\DataGenerasiController::class, 'generasi11']);
Route::get('/datagenerasi12', [App\Http\Controllers\DataGenerasiController::class, 'generasi12']);

// Catatan
Route::get('/datacatatan', [App\Http\Controllers\CatatanController::class, 'data'])->name('aboutus');
Route::get('/tambahcatatan', [App\Http\Controllers\CatatanController::class, 'tambahdata']);
Route::post('/insertcatatan', [App\Http\Controllers\CatatanController::class, 'insertdata']);

Route::get('/tampilkancatatan/{id}', [App\Http\Controllers\CatatanController::class, 'tampil'])->name('admin/tampilkancatatan');
Route::post('/updatecatatan/{id}', [App\Http\Controllers\CatatanController::class, 'updatedata'])->name('admin/updatecatatan');

Route::delete('/deletecatatan/{id}', [App\Http\Controllers\CatatanController::class, 'delete'])->name('admin/deletecatatan');
Route::get('/trashcatatan', [App\Http\Controllers\CatatanController::class, 'trash'])->name('admin/trashcatatan');
Route::get('/restorecatatan/{id}', [App\Http\Controllers\CatatanController::class, 'restore'])->name('admin/restorecatatan');
Route::get('/restorecatatanall', [App\Http\Controllers\CatatanController::class, 'restoreall'])->name('admin/restorecatatanall');
Route::get('/hapuspermanencatatan/{id}', [App\Http\Controllers\CatatanController::class, 'hapuspermanen'])->name('hapuspermanencatatan');
Route::get('/hapuspermanensemuacatatan', [App\Http\Controllers\CatatanController::class, 'hapuspermanenall'])->name('hapuspermanensemuacatatan');

Route::get('/catatan/{id}', [CatatanController::class, 'getDataById']);

Route::get('/datajumlah', [App\Http\Controllers\JumlahController::class, 'jumlah'])->name('jumlah');

// Owner
Route::get('/dataowner', [App\Http\Controllers\JumlahController::class, 'data'])->name('owner');