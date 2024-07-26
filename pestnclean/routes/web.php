<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['role:customer'])->group(function () {
    Route::get('home', [AuthController::class, 'home'])->name('home');
    // Các route khác dành cho admin
});
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('categories', CategoriesController::class);
<<<<<<< HEAD
Route::resource('sub_categories', SubCategoryController::class);
Route::resource('products', ProductController::class);
=======


Route::get('/search', [SearchController::class, 'search'])->name('search');
>>>>>>> b33f29e78fdfdf25cd8a1adbe60cbd91bb9b150a
