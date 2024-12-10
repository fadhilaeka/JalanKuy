<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories',[CategoriesController::class,'categories']);
Route::get('/entrycategories',[CategoriesController::class,'entrycategories']);
Route::get('/editcategories/{id}',[CategoriesController::class,'editcategories']);
Route::post('/update/{id}',[CategoriesController::class,'update']);
Route::get('/delete/{id}',[CategoriesController::class,'delete']);
Route::get('/cetak',[CategoriesController::class,'cetak']);
Route::post('/post',[CategoriesController::class,'post']);


