<?php

use Carbon\Carbon;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\SampleMasukController;
use App\Http\Controllers\SampleKeluarController;
use App\Http\Controllers\FormLaboratController;
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

// Route::get('/', function () {
//         return view('layouts.main',['title'=>'dashboard']);
// })->middleware('auth');

// Route::get('/dashboard', function () {
//     return view('layouts.main');
// });

Route::get('/claim', function () {
    return view('claim.csa');
})->middleware('auth');


Route::get('/', [DashboardController::class, 'index'])->middleware('auth');
// Route::get('/', [DashboardController::class, 'grafikkaryawan'])->middleware('auth');

// Route::get('/karyawan', [KaryawanController::class, 'index']);
// Route::get('/karyawan/create', [KaryawanController::class, 'create']);
// Route::post('/karyawan/store', [KaryawanController::class, 'store']);
// Route::get('/karyawan/{id}/edit', [KaryawanController::class, 'edit']);



//Route Karyawan
Route::resource('/karyawan', KaryawanController::class)->middleware('auth');
//Route Sample Masuk
Route::resource('/samplemasuk', SampleMasukController::class)->middleware('auth');
//Route Sample Keluar
Route::resource('/samplekeluar', SampleKeluarController::class)->middleware('auth');
//Route Form Laborat
Route::resource('/laborat', FormLaboratController::class)->except('show')->middleware('auth');

//Export Excel
Route::get('/samplemasukexport', [DashboardController::class, 'exporsamplemasuk']);
Route::get('/samplekeluarexport', [DashboardController::class, 'exporsamplekeluar']);
Route::get('/laboratexport', [DashboardController::class, 'exporsamplelaborat']);



//Route Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/logout', [LoginController::class, 'logout']);
//Route Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('auth');
Route::post('/register', [RegisterController::class, 'store'])->middleware('auth');


// Route Khusus Admin
Route::resource('/pengguna', AdminController::class)->except('show')->middleware('role_admin');
