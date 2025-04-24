<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Models\Product;
use App\Models\Service;
use App\Models\ProductRating;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\ProductRatingController; // <- Tambahkan ini

// routes/web.php

// Rute untuk halaman utama, menampilkan produk, layanan, dan rating
Route::get('/', function () {
    $products = Product::all();
    $services = Service::all();
    $comments = ProductRating::all();

    return view('home', compact('products', 'services', 'comments'));
})->name('home');

// === Auth Routes (Login Manual Admin) ===
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login.submit');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// === Admin Routes (Hanya dapat diakses oleh admin) ===
Route::middleware('admin')->prefix('admin')->group(function () {

    // Dashboard Admin
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    // === Produk ===
    Route::get('products', [ProductController::class, 'index'])->name('admin.products.index');
    Route::get('products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::post('products', [ProductController::class, 'store'])->name('admin.products.store');
    Route::get('products/{product}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
    Route::put('products/{product}', [ProductController::class, 'update'])->name('admin.products.update');
    Route::delete('products/{product}', [ProductController::class, 'destroy'])->name('admin.products.destroy');

    // === Services ===
    Route::get('services', [ServiceController::class, 'index'])->name('admin.services.index');
    Route::get('services/create', [ServiceController::class, 'create'])->name('admin.services.create');
    Route::post('services', [ServiceController::class, 'store'])->name('admin.services.store');
    Route::get('services/{service}/edit', [ServiceController::class, 'edit'])->name('admin.services.edit');
    Route::put('services/{service}', [ServiceController::class, 'update'])->name('admin.services.update');
    Route::delete('services/{service}', [ServiceController::class, 'destroy'])->name('admin.services.destroy');

    // === Verifikasi Rating Produk ===
    // Anda bisa menambahkan logika untuk verifikasi rating produk di sini.
});

// === Rating Produk (oleh pengguna) ===
Route::post('/product-rating', [ProductRatingController::class, 'store'])->name('product.rating.store');

// === Hapus Rating Produk (oleh pengguna yang sudah login) ===
Route::delete('/product/{product}/rating/{rating}', [ProductRatingController::class, 'destroy'])
    ->name('product.rating.destroy')
    ->middleware('auth'); // Memastikan hanya pengguna yang login yang bisa menghapus rating
