<?php

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

Route::get('/', function () {
    return view('login', [
        'title' => 'Login'
    ]);
});

Route::get('/home', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::get('/register', function () {
    return view('register', [
        'title' => 'Register'
    ]);
});

Route::get('/pasien', function () {
    return view('pasien', [
        'title' => 'Pasien'
    ]);
});

Route::get('/pasienri', function () {
    return view('pri', [
        'title' => 'Pasien Rawat Inap'
    ]);
});

Route::get('/pasienrj', function () {
    return view('prj', [
        'title' => 'Pasien Rawat Jalan'
    ]);
});
