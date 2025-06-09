<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user2', function (Request $request) {
    dd('hello world');
});
