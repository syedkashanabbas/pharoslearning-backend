<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Artisan;

// By default redirect to login if not authenticated
Route::get('/', function () {
    return redirect()->route('login');
});

// Authenticated routes
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/my-courses', [DashboardController::class, 'myCourses'])->name('dashboard.myCourses');
    Route::get('/learning-path', [DashboardController::class, 'learningPath'])->name('dashboard.learningPath');
    Route::get('/assignments', [DashboardController::class, 'assignments'])->name('dashboard.assignments');
    Route::get('/certificates', [DashboardController::class, 'certificates'])->name('dashboard.certificates');




});




Route::get('/clear-all-cache', function () {
    Artisan::call('optimize:clear');   // clears config, cache, routes, views
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');

    return "✅ All Laravel caches cleared!";
});