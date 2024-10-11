<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;


Route::controller(AuthController::class)->group(function () {
    Route::post('register', 'register');
    Route::post('login', 'login');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::resource('emails', EmailController::class);
});
