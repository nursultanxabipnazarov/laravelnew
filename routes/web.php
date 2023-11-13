<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/category-create',[CategoryController::class,'store']);

Route::get('/category-create',[CategoryController::class,'allData']);
Route::get('/',[CategoryController::class,'index']);
