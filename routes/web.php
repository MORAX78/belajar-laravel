<?php

use Illuminate\Support\Facades\Route;

//get = melihat data atau menampilkannya
//post = mengirim data
//put/patch = merubah atau mengedit data
//delete = menghapus data
Route::get('navbar', function(){
    return view('inc.navbar');
});
//Tampilan form perhitungan
Route::get('perhitungan', function() {
    return view('perhitungan.index');
})->name('perhitungan.index');
//Tampilan form Luas Permukaan Kubus
Route::post('perhitungan',[App\Http\Controllers\PerhitunganController::class, 'store'])->name('perhitungan.store');

//Aksi Perhitungannya
Route::get('luaspermukaankubus', [App\Http\Controllers\PerhitunganController::class, 'index'])->name('luaspermukaankubus.index');
Route::post('luaspermukaankubus', [App\Http\Controllers\PerhitunganController::class, 'storeLpKubus'])->name('luaspermukaankubus.store');
//Aksi Perhitungan LP Kubus

Route::get('volumekubus', [App\Http\Controllers\PerhitunganController::class, 'volumek'])->name('volumekubus.volumek');
Route::post('volumekubus', [App\Http\Controllers\PerhitunganController::class, 'storeVolk'])->name('volumekubus.storeVolk');

Route::get('luaspermukaantabung', [App\Http\Controllers\PerhitunganController::class, 'luastabung'])->name('luaspermukaantabung.luastabung');
Route::post('luaspermukaantabung', [App\Http\Controllers\PerhitunganController::class, 'storeTabung'])->name('luaspermukaantabung.storeTabung');

Route::get('volumetabung', [App\Http\Controllers\PerhitunganController::class, 'voltabung'])->name('volumetabung.voltabung');
Route::post('volumetabung', [App\Http\Controllers\PerhitunganController::class, 'storeVolt'])->name('volumetabung.storeVolt');

Route::get('volumelimas', [App\Http\Controllers\VolumeLimasController::class, 'index'])->name('volumelimas.index');

// Route::get('volumelimas/create', [App\Http\Controllers\VolumeLimasController::class, 'create'])->name('volumelimas.create');
// Route::post('volumelimas/store', [App\Http\Controllers\VolumeLimasController::class, 'store'])->name('volumelimas.store');
// Route::get('volumelimas/edit/{id}', [App\Http\Controllers\VolumeLimasController::class, 'edit'])->name('volumelimas.edit');
// Route::put('volumelimas/update/{id}', [App\Http\Controllers\VolumeLimasController::class, 'update'])->name('volumelimas.update');
// Route::delete('volumelimas/delete/{id}', [App\Http\Controllers\VolumeLimasController::class, 'destroy'])->name('volumelimas.destroy');
Route::resource('volumelimas', App\Http\Controllers\VolumeLimasController::class);
Route::resource('pesertapelatihan', App\Http\Controllers\PesertaPelatihan::class);

Route::get('belajar-laravel' , [\App\Http\Controllers\BelajarController::class, 'index']);
Route::get('siswa', [\App\Http\Controllers\BelajarController::class, 'getSiswa']);

Route::get('create', [\App\Http\Controllers\BelajarController::class, 'create'])->name('siswa.create');
Route::post('store', [\App\Http\Controllers\BelajarController::class, 'store'])->name('siswa.store');

Route::get('/', [\App\Http\Controllers\LoginController::class, 'index']);
Route::post('action-login', [App\Http\Controllers\LoginController::class, 'actionLogin'])->name('action-login');
Route::post('logout', [App\Http\Controllers\LoginController::class, 'logout'])->name('logout');

Route::resource('user', App\Http\Controllers\UserController::class);
Route::resource('role', App\Http\Controllers\RoleController::class);
Route::resource('student', App\Http\Controllers\StudentController::class);
Route::resource('attendance', App\Http\Controllers\AttendanceController::class);
Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index']);
Route::get('auth/google', [\App\Http\Controllers\LoginController::class, 'redirect'])->name('google-auth');
Route::get('auth/google/call-back', [\App\Http\Controllers\LoginController::class, 'callbackGoogle']);

