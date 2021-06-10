<?php

use App\Http\Controllers\PersonController;

Route::get('/person', [PersonController::class, 'index']);
Route::post('/person', [PersonController::class, 'index']);