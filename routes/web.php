<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamController;
use Illuminate\Support\Facades\DB;
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




Route::get('/login', function () {
    return view('auth.login');
});
// Route::get('/login', [LoginController::class, 'auth.login'])->name('login');
Route::post('/login-proses', [LoginController::class, 'loginProses']);

Route::get('/register', function () {
    return view('auth.register');
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
//route resource
Route::resource('/kategori',\App\Http\Controllers\KategoriController::class);
Route::resource('/buku',\App\Http\Controllers\BukuController::class);

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
Route::prefix('petugas')->middleware(['auth','auth.petugas'])->group(function () {
    //ini route khusus untuk petugas
});
Route::prefix('peminjam')->middleware(['auth','auth.peminjam'])->group(function () {
    //ini route khusus untuk peminjam
});

//route buku
Route::resource('buku', 'App\Http\Controllers\BukuController');



Route::get('logout',function(){

   Auth::logout();

});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
