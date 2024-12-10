<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

Route::prefix('v1')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::post('signin', [AuthController::class, 'signin'])->name('auth.signin');
    });
});
