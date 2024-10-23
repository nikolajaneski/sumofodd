<?php

use App\Http\Controllers\Api\BlogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/blog/{blog}', [BlogController::class, 'show']);



# Route to get to calculate method 
Route::get('/calculate', [BlogController::class, 'calculate']);

