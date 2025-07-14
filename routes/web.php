<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuoteController;
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

Route::middleware('user-access')->group(function (){
    Route::view('app/dashboard', 'admin.dashboard')->name('dashboard');

    Route::get('app/admin/quote/create', [QuoteController::class, 'showAdminQuote'])->name('admin.quote.create');

    Route::post('app/admin/quote/store', [QuoteController::class, 'adminStore'])->name('admin.quote.store');

    Route::post('app/quote/{user}/store', [QuoteController::class, 'store'])->name('quote.store');

    Route::view('app/quote/create', 'home')->name('quote.create');

    Route::get('app/admin/quotes', [QuoteController::class, 'index'])->name('admin.quote.index');
});