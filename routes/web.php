<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;



use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.auth.login');
});


Route::get('/login',[AuthController::class,'login'])->name('login');

Route::post('/authenticate',[AuthController::class,'authenticate'])->name('authenticate');
Route::get('reg',[AuthController::class,'reg'])->name('registr.create');
Route::post('reg-store',[AuthController::class,'registr_store'])->name('registr.store');
Route::post('logout',[AuthController::class,'logout'])->name('logout');



Route::resource('categories',CategoryController::class);

Route::resource('products',ProductController::class);