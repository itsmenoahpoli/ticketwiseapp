<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\Trips\TripsController;

Route::prefix('v1')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::post('signin', [AuthController::class, 'signin'])->name('auth.signin');
        Route::post('signup', [AuthController::class, 'signup'])->name('auth.signup-passenger');
    });

	Route::apiResource('trips', TripsController::class);
});
