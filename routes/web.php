<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Front Website Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [PropertyController::class, 'home'])->name('home');

Route::get('/listings', [PropertyController::class, 'index'])
    ->name('properties.index');

Route::get('/listings/{slug}', [PropertyController::class, 'show'])
    ->name('properties.show');

Route::get('/about', [PageController::class, 'about'])
    ->name('pages.about');

Route::get('/contact', [PageController::class, 'contact'])
    ->name('pages.contact');

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Public Blog Routes
|--------------------------------------------------------------------------
*/

Route::get('/blogs', [BlogController::class, 'index'])
    ->name('blogs.index');

Route::get('/blogs/{slug}', [BlogController::class, 'show'])
    ->name('blogs.show');