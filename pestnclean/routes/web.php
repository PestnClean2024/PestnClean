<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\categoriesArticlesController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CustomerController;
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

//Quản lý admin
// Dịch vụ
Route::resource('categories', CategoriesController::class);
// Dịch vụ
Route::resource('sub_categories', SubCategoryController::class);
//Sản phẩm
Route::resource('products', ProductController::class);
Route::resource('categoriesArticles', CategoriesArticlesController::class);
//Danh mục bài viết
Route::resource('categoriesArticles', CategoriesArticlesController::class);
//Bài viết
Route::resource('articles', ArticlesController::class);
//Quản lý tài khoản khách hàng
Route::resource('customers', CustomerController::class);



Route::get('/search', [SearchController::class, 'search'])->name('search');

