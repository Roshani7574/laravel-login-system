<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
Route::get('/', function () {
    return redirect('/register');
});


Route::get('/register',[AuthController::class,'showRegister']);
Route::post('/register',[AuthController::class,'register']);

Route::get('/login',[AuthController::class,'showLogin']);
Route::post('/login',[AuthController::class,'login']);

Route::view('/dashboard','dashboard');
Route::middleware('admin')->group(function () {

    Route::get('/admin',[AuthController::class,'adminDashboard'])->middleware('admin');

});
