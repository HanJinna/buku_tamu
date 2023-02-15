<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardcontroller;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\data_pengunjungcontroller;
use App\Http\Controllers\cicontroller;
use App\Http\Controllers\cocontroller;
use App\Http\Controllers\exportcontroller;
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

Route::get('/home', function () {
    return view('halaman_utama.home');
});

// dashboard
Route::resource('Dashboard', dashboardcontroller::class);

// data pengunjung
Route::resource('Data_Pengunjung', data_pengunjungcontroller::class);
Route::get('Data_Pengunjung/{id}/hapus', [data_pengunjungcontroller::class, 'hapus'])->name('Data_Pengunjung.hapus');


// export data
Route::resource('export_data', exportcontroller::class);

// check in
Route::resource('check_in', cicontroller::class);
Route::get('/check_in', function () {
    return view('check_in.check_in');
});

// check out
Route::resource('check_out', cocontroller::class);

// login
Route::get('/login', function () {
    return view('login.login');
});

