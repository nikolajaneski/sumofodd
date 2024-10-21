<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class, 'index']);
Route::get('/blog/create', [BlogController::class, 'create']);
Route::get('/blog/{blog}', [BlogController::class, 'show']);
Route::post('/blog/store/', [BlogController::class, 'store']);
Route::get('/blog/{blog}/edit', [BlogController::class, 'edit']);
Route::post('/blog/{blog}/update', [BlogController::class, 'update']);

Route::get('/category/{category}', [CategoryController::class, 'show']);
