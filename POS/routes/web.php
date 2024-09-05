<?php

use Illuminate\Support\Facades\Route;

// buat rute - Jobsheet 2 - Soal Praktikum
// route memanggil controller tiap halaman
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

//home
Route::get('/', [HomeController::class, 'index'])->name('home');

//produk
// Menggunakan route prefix akan mengelompokkan semua route yang memiliki
// awalan /category, sehingga Anda tidak perlu menuliskannya berulang kali.
Route::prefix('products')->group(function () {
    Route::get('food-beverage', [ProductsController::class, 'foodBeverage'])->name('products.food-beverage');
    Route::get('beauty-health', [ProductsController::class, 'beautyHealth'])->name('products.beauty-health');
    Route::get('home-care', [ProductsController::class, 'homeCare'])->name('products.home-care');
    Route::get('baby-kid', [ProductsController::class, 'babyKid'])->name('products.baby-kid');
});

//user
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile'])->name('user.profile');

//sales
Route::get('/sales', [SalesController::class, 'index'])->name('sales');

