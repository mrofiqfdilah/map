<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\KabupatenController;
use App\Http\Controllers\PlacedetailController;
use App\Http\Controllers\PlacesController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\UserfeatureController;
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
    return view('welcome');
});

// Auth Routes
Route::get('register_page', [AuthController::class, 'register_page'])->name('register_page');
Route::post('register_store', [AuthController::class, 'register_store'])->name('register_store');
Route::get('login_page', [AuthController::class, 'login_page'])->name('login_page');
Route::post('login_store', [AuthController::class, 'login_store'])->name('login_store');

// Resources Route
Route::resource('dataprovinsi', ProvinsiController::class);
Route::resource('datakabupaten', KabupatenController::class);
Route::resource('datakategori', CategoryController::class);
Route::resource('dataplace', PlacesController::class);
Route::resource('dataplacedetail', PlacedetailController::class);

// User Routes
Route::get('pilihprovinsi', [UserfeatureController::class, 'pilihprovinsi'])->name('pilihprovinsi');
Route::get('pilihkabupaten/{idprovinsi}', [UserfeatureController::class, 'pilihkabupaten'])->name('pilihkabupaten');
Route::get('pilihkategori/{idkabupaten}', [UserfeatureController::class, 'pilihkategori'])->name('pilihkategori');
Route::get('pilihplace/{idkab}', [UserfeatureController::class, 'pilihplace'])->name('pilihplace');
Route::get('placedetail/{idplace}', [UserfeatureController::class, 'placedetail'])->name('placedetail');