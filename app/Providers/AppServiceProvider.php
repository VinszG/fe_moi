<?php

namespace App\Providers;

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
use Illuminate\Support\ServiceProvider;
use App\Http\Middleware\AdminMiddleware;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Mendaftarkan route dengan middleware admin
        Route::middlewareGroup('admin', [
            AdminMiddleware::class,
        ]);
        
        // Mendaftarkan route admin dengan middleware 'admin'
        Route::prefix('admin')->middleware('admin')->group(function () {
            Route::get('dashboard', function () {
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

            Route::patch('admin/product-ratings/{rating}/verify', [AdminController::class, 'verify'])->name('admin.product_ratings.verify');
        });
    }
}
