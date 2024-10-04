<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\SalesDataController;
use Illuminate\Support\Facades\Route;
Route::prefix('api')->group(function () {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/logout', [AuthController::class, 'logout']);
        
        // Employee Routes
        Route::get('/employees', [EmployeeController::class, 'index']);
        Route::post('/employees', [EmployeeController::class, 'store']);
        Route::get('/employees/{id}', [EmployeeController::class, 'show']);
        Route::put('/employees/{id}', [EmployeeController::class, 'update']);
        Route::delete('/employees/{id}', [EmployeeController::class, 'destroy']);
        
        // Sales Data Routes
        Route::get('/sales_data', [SalesDataController::class, 'index']);
        Route::post('/sales_data', [SalesDataController::class, 'store']);
        Route::get('/sales_data/{id}', [SalesDataController::class, 'show']);
        Route::put('/sales_data/{id}', [SalesDataController::class, 'update']);
        Route::delete('/sales_data/{id}', [SalesDataController::class, 'destroy']);
    });
});