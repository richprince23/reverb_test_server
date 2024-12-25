<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/new', [App\Http\Controllers\OrderController::class, 'store']);
