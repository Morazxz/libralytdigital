<?php
use Illuminate\Support\Facades\DB;
use illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\BerandaAdminController;
use App\Http\Controllers\BerandaPetugasController;
use App\Http\Controllers\BerandaPeminjamController;



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
    return view('login');
});


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/admin/profile', function () {
    return view('admin.profile');
});
Route::get('/admin/user', function () {
    return view('admin.index_user');
});
Route::get('/admin/user/create', function () {
    return view('admin.create_user');
});
Route::get('/admin/data_buku', function () {
    return view('admin.data_buku');
});
Route::get('/admin/buku_peminjam', function () {
    return view('admin.buku_peminjam');
});
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});
Route::get('/admin/user/edit', function () {
    return view('admin.user_edit');
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
Route::prefix('admin')->middleware(['auth','auth.admin'])->group(function () {
    Route::get('beranda', [BerandaAdminController::class, 'index'])->name('admin.beranda');
});
Route::prefix('petugas')->middleware(['auth','auth.petugas'])->group(function () {
    Route::get('beranda', [BerandaPetugasController::class, 'index'])->name('petugas.beranda');
});
Route::prefix('peminjam')->middleware(['auth','auth.peminjam'])->group(function () {
    Route::get('beranda', [BerandaPeminjamController::class, 'index'])->name('peminjam.beranda');
});




Route::get('logout',function(){

   Auth::logout();

   return redirect()->route('login');

});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

