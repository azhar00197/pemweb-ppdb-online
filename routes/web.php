<?php

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

Route::get('/data-siswa', [DataSiswaController::class, 'index']);
Route::post('/data-siswa/create', [DataSiswaController::class, 'create']);
Route::get('/data-siswa/{id}/edit', [DataSiswaController::class, 'edit']);
Route::post('/data-siswa/{id}/update', [DataSiswaController::class, 'update']);
Route::get('/data-siswa/{id}/delete', [DataSiswaController::class, 'destroy']);

// Route::get('/login', [App\Http\Controllers\AdminController::class, 'login']);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
