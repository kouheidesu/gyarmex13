<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SessionController;

Route::get('/session', [SessionController::class, 'ses_get']);
Route::post('/session', [SessionController::class, 'ses_put']);