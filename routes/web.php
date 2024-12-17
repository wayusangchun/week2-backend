<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [DashboardController::class, 'index']);
// http://127.0.0.1:8000/categories
// Route::get('/categories', [CategoryController::class, 'index']);

Route::resource('/categories', CategoryController::class)->only([
    'index', 'store', 'update', 'destroy'
]);