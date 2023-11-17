<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TestController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('category-add',function(){
    return view('admin.category.create');
});

// Route::get('categories',function(){
//     return view('admin.category.index');
// });


Route::resource('categories',CategoryController::class);