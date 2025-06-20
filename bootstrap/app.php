<?php

use App\Http\Middleware\Test2Middleware;
use App\Http\Middleware\TestMiddleware;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
        then: function () {
            Route::prefix('web-v2')
                // ->middleware('auth')
                ->as('web-v2.')
                ->namespace('App\Http\Controllers')
                ->group(base_path('routes/web-v2.php'));
        }
    )
    ->withMiddleware(function (Middleware $middleware) {})
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
