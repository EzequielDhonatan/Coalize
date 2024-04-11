<?php

use Illuminate\{

    Http\Request,
    Support\Facades\Route

}; // Illuminate

use App\Http\Controllers\{

    CustomerController,
    ProductController

}; // Controllers

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('customer', CustomerController::class);
Route::apiResource('product', ProductController::class);
