<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{

    Authentication\Sanctum\AuthenticationSanctumController,
    CustomerController

}; // Controllers

Route::prefix('v1')->group(function () {

    Route::apiResource('/token/create', AuthenticationSanctumController::class);

    Route::middleware(['auth:sanctum'])->group(function () {

        Route::apiResource('customer', CustomerController::class);

    }); // Sanctum

}); // V1
