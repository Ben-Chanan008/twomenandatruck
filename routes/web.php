<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::prefix('services')->group(function () {
    Route::view('moving', 'services.moving')->name('moving');
});

Route::view('who-we-are', 'about')->name('us');

Route::view('app/signup', 'onboarding')->name('signup.view')->middleware('guest');
Route::view('app/signin', 'login')->name('signin.view')->middleware('guest');

Route::get('app/signout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::post('app/onboarding', [AuthController::class, 'onboarding'])->name('sign-up');
Route::post('app/login', [AuthController::class, 'auth'])->name('sign-in');

Route::view('app/dashboard', 'dashboard')->name('dashboard')->middleware('user-access');

// Route::resource('app/user', AuthController::class);
