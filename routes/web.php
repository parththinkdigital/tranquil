<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', [PropertyController::class, 'home'])->name('home');
Route::get('/listings', [PropertyController::class, 'index'])->name('properties.index');
Route::get('/listings/{slug}', [PropertyController::class, 'show'])->name('properties.show');
Route::get('/about', [\App\Http\Controllers\PageController::class, 'about'])->name('pages.about');
Route::get('/contact', [\App\Http\Controllers\PageController::class, 'contact'])->name('pages.contact');
Route::post('/contact', [\App\Http\Controllers\PageController::class, 'submitContact'])->name('pages.contact.submit');

// Blog routes (frontend only - controller pending)
Route::get('/journal', fn() => view('client.blogs.index'))->name('blogs.index');
Route::get('/journal/{slug}', fn($slug) => view('client.blogs.show'))->name('blogs.show');

// Route::middleware(['auth', 'verified'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

//---------------------------------AdminLogin--------------------------------// 
Route::get('/login', fn() => redirect('/admin/login'))->name('login');
Route::prefix('admin')->name('admin.')->group(function () {

    // Guest-only routes: redirect to dashboard if already logged in as admin
    Route::middleware('admin.guest')->group(function () {
        Route::get('/login', [AuthController::class, 'loginForm'])->name('signIn');
        Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    });

    Route::get('/register', [AuthController::class, 'register'])->name('register'); // Temporary route to seed admin
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    //----------------- Admin Authentication -----------------//
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('testimonials', \App\Http\Controllers\Admin\TestimonialController::class);
        Route::resource('contacts', \App\Http\Controllers\Admin\ContactController::class)->only(['index', 'destroy']);
        Route::resource('property', \App\Http\Controllers\Admin\PropertyController::class);
        Route::resource('property-type', \App\Http\Controllers\Admin\PropertyTypeController::class);
        Route::get('property-details/get-property-types/{property}', [\App\Http\Controllers\Admin\PropertyDetailController::class, 'getPropertyTypes'])->name('property-details.get-types');
        Route::resource('property-details', \App\Http\Controllers\Admin\PropertyDetailController::class);
        Route::resource('blogs', \App\Http\Controllers\Admin\BlogController::class);
    });
});

// require __DIR__ . '/auth.php';
