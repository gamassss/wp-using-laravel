<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PriController;
use App\Http\Controllers\PrjController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPasienController;
use App\Http\Controllers\DashboardPriController;
use App\Http\Controllers\DashboardPrjController;


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

// Route::get('/', [LoginController::class, 'index']);
Route::get('/', [LandingController::class, 'index']);

Route::get('/content', function() {
  return view('content');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/pasien', [PasienController::class, 'index']);
Route::post('/pasien/tambah', [PasienController::class, 'tambah']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

// Route::get('/dashboard/pri', [PriController::class, 'index']);

// Route::get('/dashboard/prj', [PrjController::class, 'index']);

Route::resource('/dashboard/pasien', DashboardPasienController::class)->middleware('auth');


Route::resource('/dashboard/pri', DashboardPriController::class)->middleware('auth');

Route::resource('/dashboard/prj', DashboardPrjController::class)->middleware('auth');


