<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use App\Http\Middleware\TokenAuthMiddleware;

class Kernel extends HttpKernel
{
    protected $middlewareGroups = [
        'api' => [
            // Default Laravel API middleware
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    protected $routeMiddleware = [
        'auth.token' => TokenAuthMiddleware::class,
    ];
}
