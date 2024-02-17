<?php

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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('register');
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
Route::get('/admin/user/edit', function () {
    return view('admin.edit_user');
});
Route::get('/peminjam/daftar_buku', function () {
    return view('peminjam.daftar_buku');
});
Route::get('/peminjam/buku_peminjam', function () {
    return view('peminjam.buku_peminjam');
});
Route::get('/peminjam/dashboard', function () {
    return view('peminjam.dashboard');
});
