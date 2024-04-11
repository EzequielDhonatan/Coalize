<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{

    Authentication\Sanctum\AuthenticationSanctumController,
    CustomerController,
    ProductController

}; // Controllers

Route::prefix('v1')->group(function () {

    Route::apiResource('/token/create', AuthenticationSanctumController::class);

    Route::middleware(['auth:sanctum'])->group(function () {

        Route::apiResource('customer', CustomerController::class);
        Route::apiResource('product', ProductController::class);

    }); // Sanctum

}); // V1
