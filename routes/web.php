<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Models\Product;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Treatment\TreatmentController;

// === Public Routes ===
Route::get('/', function () {
    // Mengambil semua produk dari database
    $products = Product::all();

    // Menampilkan produk di halaman utama
    return view('home', compact('products'));
});


// === Auth Routes (Login Manual Admin) ===
Route::get('login', [AuthController::class, 'showLogin'])->name('login'); // Menampilkan halaman login
Route::post('login', [AuthController::class, 'login'])->name('login.submit'); // Proses login
Route::post('logout', [AuthController::class, 'logout'])->name('logout'); // Proses logout

Route::prefix('admin')->group(function () {
    // Routes untuk Dashboard
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // Routes untuk Produk
    Route::get('products', [ProductController::class, 'index'])->name('admin.products.index');  // Menggunakan nama 'admin.products.index'
    Route::get('products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('products', [ProductController::class, 'store'])->name('admin.products.store');
    Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('products/{product}', [ProductController::class, 'update'])->name('admin.products.update');
    Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy');
});

    // Routes untuk Treatment
    Route::get('/treatment', function () {
        return view('treatment');
    })->name('treatment');

    // Routes untuk Treatment
    Route::get('/contactUs', function () {
        return view('contactUs');
    })->name('contactUs');

