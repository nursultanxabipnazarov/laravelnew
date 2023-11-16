<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TestController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category',function(){
    return view('admin.category.index');
});

Route::get('/category-create',function(){
    return view('admin.category.create');
});

Route::get('test',[TestController::class,'index']);