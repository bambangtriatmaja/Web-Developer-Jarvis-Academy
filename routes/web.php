<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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
//     return view('welcome');
// });

/**
 * Routing untuk halaman home
 * Menggunakan file HomeController method index
 */
Route::get('/', [HomeController::class, 'index']);

/**
 * Routing untuk halaman form register
 * Menggunakan file AuthController method register
 */
Route::get('/register', [AuthController::class, 'register']);

/**
 * Routing untuk halaman welcome
 * Menggunakan file AuthController method welcome
 */
Route::post('/welcome', [AuthController::class, 'welcome'])->name('welcome');