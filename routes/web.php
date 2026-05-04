<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\OilChangeDetailsController;

Route::get("/", [OilChangeDetailsController::class, 'create']);
Route::get('/result/{oilChangeDetails}', [OilChangeDetailsController::class, 'show']);
Route::post('/check', [OilChangeDetailsController::class, 'store']);
