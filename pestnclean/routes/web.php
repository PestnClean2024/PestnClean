<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('categories', CategoriesController::class);
