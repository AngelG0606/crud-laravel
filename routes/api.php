<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('products', ProductController::class); //  /api/products /api/products/{id}
Route::apiResource('books', BookController::class); //    /api/books /api/books/{id}