<?php

use App\Http\Controllers\API\Auth\LoginController;
use App\Http\Controllers\API\Auth\LogoutController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->group(function () {
    Route::post('login', LoginController::class);
    Route::delete('logout', LogoutController::class)->middleware('auth:sanctum');
});
