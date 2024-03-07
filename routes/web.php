<?php

use App\Models\Buku;
use App\Http\Controllers\BerandaAdminController;
use App\Http\Controllers\BerandaPeminjamController;
use App\Http\Controllers\BerandaPetugasController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BukuController;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('home', function () {
    return view('index');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/admin/profile', function () {
    return view('admin.profile');
});
Route::get('/admin/user/create', function () {
    return view('admin.create_user');
});

Route::get('/admin/buku_peminjam', function () {
    return view('admin.buku_peminjam');
});
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/admin/edit/user', function () {
    return view('admin.edit_user');
});
Route::get('/admin/buku', function () {
    return view('admin.data_buku');
});
Route::get('/admin/buku/create', function () {
    return view('admin.create_data_buku');
});

Route::get('/admin/peminjam', function () {
    return view('admin.data_peminjam');
});
Route::get('/admin/peminjam/create', function () {
    return view('admin.create_data_peminjam');
});
Route::get('/admin/pengembalian', function () {
    return view('admin.data_pengembalian');
});
Route::get('/admin/pengembalian/create', function () {
    return view('admin.create_data_pengembalian');
});
Route::prefix('admin')->middleware(['auth', 'auth.admin'])->group(function () {
    Route::resource('user', UserController::class);
    Route::get('beranda', [BerandaAdminController::class, 'index'])->name('admin.beranda');
    Route::resource('kategori', KategoriController::class);
    Route::resource('buku', BukuController::class);
});
Route::prefix('petugas')->middleware(['auth', 'auth.petugas'])->group(function () {
    Route::get('beranda', [BerandaPetugasController::class, 'index'])->name('petugas.beranda');
});
Route::prefix('peminjam')->middleware(['auth', 'auth.peminjam'])->group(function () {
    Route::get('beranda', [BerandaPeminjamController::class, 'index'])->name('peminjam.beranda');
});

Route::get('logout', function () {

    Auth::logout();

    return redirect()->route('login');

});

Route::resource('buku', BukuController::class);
Route::resource('kategori', KategoriController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
