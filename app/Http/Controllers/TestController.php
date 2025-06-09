<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use App\Http\Middleware\TestMiddleware;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class TestController extends Controller implements HasMiddleware
{

    public static function middleware()
    {
        return [
            new Middleware(TestMiddleware::class, only: ['index'])
        ];
    }

    public function index()
    {
        dd('index');
    }

    public function show()
    {
        dd('show');
    }
}
