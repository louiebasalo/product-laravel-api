<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('products',ProductController::class);

// https://www.youtube.com/watch?v=WumgBzENYYk&list=PL2Antt9yUBE_-U9mpuv7_rEjQLaNcYVGm&index=26
