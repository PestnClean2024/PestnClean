<?php

use App\Http\Controllers\AccessController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SearchController;
<<<<<<< HEAD
use App\Http\Controllers\categoriesArticlesController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CustomerController;
=======
use App\Http\Controllers\ShopController;
>>>>>>> 0d4d1ea94d34ae96455373d3b1376e019d7015bc
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;


Route::fallback(function () {
    return redirect()->back();
});

Route::middleware(['guest'])->group(function () {
    Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('register', [AuthController::class, 'register']);
    Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login']);
});
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['role:customer'])->group(function () {
    // Các route khác dành cho admin
});

Route::middleware(['role:superadmin,admin,executive'])->group(function () {
    // Các route khác dành cho superadmin
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('categories', CategoriesController::class);
    Route::resource('products', ProductController::class);
    Route::resource('access', AccessController::class);
});

<<<<<<< HEAD
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

=======
>>>>>>> 0d4d1ea94d34ae96455373d3b1376e019d7015bc

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/{id}', [ShopController::class, 'shopDetails'])->name('shop.details');
Route::get('/search', [SearchController::class, 'search'])->name('search');

<<<<<<< HEAD
=======

//giỏ hàng
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/addtocart', [CartController::class, 'store'])->name('cart.store');
Route::patch('/cart/{id}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
>>>>>>> 0d4d1ea94d34ae96455373d3b1376e019d7015bc
