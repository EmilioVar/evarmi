<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::middleware(['throttle:10,1'])->group(function () {
Route::get('/', function () {
    return view('welcome');
});

Route::resource('projects', ProjectController::class)->middleware('auth');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::get('more-conffeti/{userToken}', function(string $userToken) {
    return view('more-conffeti', compact('userToken'));
})->name('more-conffeti');
});