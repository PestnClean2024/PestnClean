<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;


Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['role:customer'])->group(function () {
    // Các route khác dành cho admin
});

Route::middleware(['role:superadmin'])->group(function () {
    // Các route khác dành cho superadmin
});

Route::middleware(['role:admin'])->group(function () {
    // Các route khác dành cho admin
});

Route::middleware(['role:executive'])->group(function () {
    // Các route khác dành cho executive
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('categories', CategoriesController::class);
Route::resource('products', ProductController::class);


Route::get('/search', [SearchController::class, 'search'])->name('search');
