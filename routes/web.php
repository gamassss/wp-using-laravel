<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\PriController;
use App\Http\Controllers\Admin\PrjController;
use App\Http\Controllers\FindDoctorController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\Staff\StaffController;
use App\Http\Controllers\Admin\PasienController;
use App\Http\Controllers\Doctor\DoctorController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AdminEditProfileController;
use App\Http\Controllers\DoctorEditProfileController;
use App\Http\Controllers\Admin\DashboardPriController;
use App\Http\Controllers\Admin\DashboardPrjController;
use App\Http\Controllers\Admin\DashboardUserController;
use App\Http\Controllers\Admin\DashboardDoctorController;
use App\Http\Controllers\Admin\DashboardPasienController;
use App\Http\Controllers\Doctor\DashboardRecipeController;
use App\Http\Controllers\Doctor\DashboardDoctorPrjController;


Route::get('/', [LandingController::class, 'index']);

Route::get('/content', function() {
  return view('content');
});

Route::post('/find-doctor', [FindDoctorController::class, 'store']);

Route::get('/find-doctor', [AppointmentController::class, 'index']);
Route::get('/find-doctor/{speciality}', [AppointmentController::class, 'getDoctors'])->name('get-doctor');

Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/register', [RegisterController::class, 'store']);

//Route untuk guest only, auth user tidak bisa akses
Route::group(['middleware' => 'guest'], function() {
  Route::get('/login', [LoginController::class, 'index'])->name('login');
  Route::get('/register', [RegisterController::class, 'index']);
});

//Route untuk yangg sudah login
Route::group(['middleware' => ['auth']], function() {

  //Route untuk semua auth
  Route::post('/logout', [LoginController::class, 'logout']);

  //Route untuk admin
  Route::group(['middleware' => 'cektipe:admin'], function() {
    Route::group(['prefix' => 'exportpasien'], function() {
      Route::get('/pasien', [PasienController::class, 'pasienExport']);
      Route::get('/pri', [PriController::class, 'pasienExport']);
      Route::get('/prj', [PrjController::class, 'pasienExport']);
    });

    Route::get('/exportdoctor', [DoctorController::class, 'doctorExport']);
    Route::get('/exportuser', [UserController::class, 'userExport']);

  
    Route::group(['prefix' => 'dashboard'], function() {
      Route::get('/', [DashboardController::class, 'index']);
      Route::resource('/pasien', DashboardPasienController::class);
      Route::resource('/pri', DashboardPriController::class);
      Route::resource('/prj', DashboardPrjController::class);
      Route::resource('/doctor', DashboardDoctorController::class);
      Route::resource('/user', DashboardUserController::class);
      Route::resource('/admin', AdminEditProfileController::class);
    });
  });

  //Route untuk dokter
  Route::group(['prefix' => 'doctor','middleware' => 'cektipe:doctor'], function() {
    // Route::get('/dashboard', [DoctorController::class, 'index']);
    Route::resource('/prj', DashboardDoctorPrjController::class);
    Route::resource('/doctor', DoctorEditProfileController::class);
    Route::get('/appointment', [DoctorController::class, 'appointment']);
    // Route::get('/resep', [DoctorController::class, 'resep']);
    Route::resource('/resep', DashboardRecipeController::class);
    //belum dispesifikasikan berdasarkan poli
    Route::get('/exportprj', [PrjController::class, 'pasienPrjExport']);
  });

  //Route untuk dokter
  Route::group(['prefix' => 'staff','middleware' => 'cektipe:staff'], function() {
    Route::get('/dashboard', [StaffController::class, 'index']);
  });
  
});


