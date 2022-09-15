<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PriController;
use App\Http\Controllers\PrjController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\RegisterController;


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

Route::get('/', [LoginController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);

Route::get('/pasien', [PasienController::class, 'index']);

Route::get('/pasienri', [PriController::class, 'index']);

Route::get('/pasienrj', [PrjController::class, 'index']);

Route::get('/lpage', [LandingController::class, 'index']);


