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

Route::get('penghuni', function () {
    return view('penghuni');
});

Route::get('rumah', function () {
    return view('datarumah');
});

Route::get('pembayaran', function () {
    return view('pembayaran');
});

Route::get('tambah-rumah', function () {
    return view('add_House');
});

Route::get('tambah-penghuni', function () {
    return view('add_Penghuni');
});

Route::get('tambah-pembayaran', function () {
    return view('add_pembayaran');
});

Route::get('admin_manage', function () {
    return view('add_admin');
});

Route::get('login', function () {
    return view('login');
});