<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\AdminController;

// Frontend
Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/product/{id}', [FrontendController::class, 'show'])->name('product.show');

// Auth
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

// Admin Routes with middleware
Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
    Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/admin/login', [AuthController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');


Route::post('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');

Route::post('/cart/increase/{id}', [CartController::class, 'increase']);
Route::post('/cart/decrease/{id}', [CartController::class, 'decrease']);
Route::post('/cart/remove/{id}', [CartController::class, 'remove']);

Route::get('/checkout', [CartController::class, 'checkout']);


Route::post('/place-order', [OrderController::class, 'place'])->name('order.place');
Route::get('/success', function () {
    return view('frontend.success');
})->name('success');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


