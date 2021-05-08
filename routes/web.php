<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataSiswaController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::resource('data-siswa', DataSiswaController::class)->except(['create', 'show']);

Route::get('/admin', [AdminController::class, 'admin']);

Route::get("login", [AuthController::class, 'login']);
Route::post("login", [AuthController::class, 'authenticate']);

Route::post("register", [AuthController::class, 'createAccount']);
Route::get("register", [AuthController::class, 'register']);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
