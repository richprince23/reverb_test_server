<?php

use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/new', [App\Http\Controllers\OrderController::class, 'store']);

Route::post('/test', [OrderController::class, 'test']);
