<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', [TestController::class, 'index'])->middleware('throttle:api');
Route::get('/show', [TestController::class, 'show']);
