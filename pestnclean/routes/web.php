<?php

use App\Http\Controllers\AccessController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\categoriesArticlesController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceCleaningController;

Route::fallback(function () {
    return redirect()->back();
});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/service-cleaning', [ServiceCleaningController::class, 'index'])->name('service-cleaning');

Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/{id}', [ShopController::class, 'shopDetails'])->name('shop.details');
Route::post('/feedback', [ShopController::class, 'storeFeedback'])->name('feedback.store');
Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['guest'])->group(function () {
    Route::post('register', [AuthController::class, 'register'])->name('register');
    Route::post('login', [AuthController::class, 'login'])->name('login');
});

Route::middleware(['role:customer'])->group(function () {
    // Các route khác dành cho user
    Route::resource('user', UserController::class);
    Route::get('/order', [OrderController::class,'index'])->name('order');
    //giỏ hàng
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/addtocart', [CartController::class, 'store'])->name('cart.store');
    Route::patch('/cart/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
});

Route::middleware(['role:superadmin,admin,executive'])->group(function () {
    // Các route khác dành cho admin
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('categories', CategoriesController::class);
    Route::resource('products', ProductController::class);
    Route::resource('access', AccessController::class);
    //Danh mục bài viết
    Route::resource('categoriesArticles', CategoriesArticlesController::class);
    //Bài viết
    Route::resource('articles', ArticlesController::class);
    //Quản lý tài khoản khách hàng
    Route::resource('customers', CustomerController::class);
});
Route::middleware(['role:executive'])->group(function () {
    // Các route khác dành cho admin
    //Bài viết
    Route::resource('articles', ArticlesController::class);
});
