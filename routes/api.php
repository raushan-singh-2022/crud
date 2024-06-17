<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/products',[ProductController::class,'index']);

Route::post('/products/create', [ProductController::class, 'store']);

Route::get('products/edit/{id}',[productController::class,'edit']);

Route::put('products/update/{id}',[productController::class,'update']);

Route::delete('products/delete/{id}',[productController::class,'delete']);

Route::get('products/{id}',[ProductController::class,'show']);