<?php

use App\Models\Service;
use App\Mail\QuoteStored;
use App\Mail\AssignedWork;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\AssignJobController;

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

    Route::post('app/quote/{user}/store', [QuoteController::class, 'store'])->name('quote.store')->withoutMiddleware('user-access');

    Route::view('app/quote/create', 'quote', [
        'services' => Service::all()
    ])->name('quote.create');

    Route::get('app/admin/quotes', [QuoteController::class, 'index'])->name('admin.quote.index');

    Route::get('app/admin/assign-jobs/create', [AssignJobController::class, 'create'])->name('assign-jobs.create');

    Route::get('app/admin/assign-jobs/jobs', [AssignJobController::class, 'index'])->name('assign-jobs.index');
    
    Route::post('app/admin/assign-jobs/store', [AssignJobController::class, 'store'])
        ->name('assign-jobs.store')
        ->withoutMiddleware('user-access');
});

Route::get(uri: 'test', action: function () {
    $users = User::withCount(['roles' => fn ($query) => $query->where(['role' => 'admin'])])->get()->toArray();

    $counts = [];
    foreach($users as $model)
        $counts[] = $model['roles_count'];    
    $sum = array_sum($counts);
    dd($sum);

});