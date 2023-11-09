<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\pages\Page2;
use App\Http\Controllers\pages\MiscError;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\VolunteerController;

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

// Main Page Route

// TODO: ADD MIDDLEWARE
Route::get('/', [LoginController::class, 'index'])->name('login');
// middleware('auth')->
Route::middleware('auth')->name('backend.')->group(function () {
    // Route for Dashboard page
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/volunteer', [VolunteerController::class, 'index'])->name('volunteer');
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
