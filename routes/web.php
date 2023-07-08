<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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

Route::get( '/', [HomeController::class, 'home']);


Route::get( '/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post( '/login', [LoginController::class, 'authenticate']);
Route::post( '/logout', [LoginController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get( '/dashboard', [DashboardController::class, 'dashboard']);
    Route::get( '/register', [RegisterController::class, 'register']);
});

// Route::get( '/register', [RegisterController::class, 'register'])->middleware('guest');
Route::post( '/register', [RegisterController::class, 'store']);

// Route::get( '/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth');


Route::get('/', function () {
    return view('home' , [
        "title" => "Home"
    ]);
});
Route::get('/tutorial', function () {
    return view('tutor', [
        "title" => "Home"
    ]);
});