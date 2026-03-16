<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;


/* User Routes */

Route::get('/', function () {
    return redirect('/register');
});

Route::get('/register', [AuthController::class,'showRegister'])->name('register');
Route::post('/register', [AuthController::class,'register']);

Route::get('/login', [AuthController::class,'showLogin'])->name('login');
Route::post('/login', [AuthController::class,'login']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('user.dashboard');


/* Admin Routes */

Route::prefix('admin')->group(function () {

    Route::get('/login', [AdminAuthController::class,'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class,'login']);

    Route::middleware('admin')->group(function () {

        Route::get('/', [AdminAuthController::class,'adminDashboard'])->name('admin.dashboard');

        Route::resource('categories', CategoryController::class);
        Route::resource('products', ProductController::class);

        Route::get('categories/{id}/subcategories', [CategoryController::class,'getSubcategories']);

    });

    Route::get('/logout', [AdminAuthController::class,'logout'])->name('admin.logout');

});
