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

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticate']);

Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'createAccount']);

Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'guest:admin'], function () {
        Route::get('login', [AuthController::class, 'loginAdmin']);
        Route::post('login', [AuthController::class, 'authenticateAdmin']);
    });

    Route::group(['middleware' => 'auth:admin'], function () {
        Route::resource('data-siswa', DataSiswaController::class);
    });
});
