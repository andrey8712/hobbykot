<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('test1', [\App\Http\Controllers\TestController::class, 'index']);
Route::get('test2', [\App\Http\Controllers\TestController::class, 'test']);

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
