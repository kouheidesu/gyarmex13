<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Middleware\HelloMiddleware;

Route::get('/hello', [HelloController::class, 'index'])->middleware(HelloMiddleware::class);