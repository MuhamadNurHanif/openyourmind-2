<?php

use Illuminate\Foundation\Application;
// use App\Http\Middleware\RoleMiddleware;
// use App\Http\Middleware\PermissionMiddleware;
// use App\Http\Middleware\RoleOrPermissionMiddleware;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Tambahkan middleware Spatie Permission
        $middleware->alias([
            // 'role' => RoleMiddleware::class,
            // 'permission' => PermissionMiddleware::class,
            // 'role_or_permission' => RoleOrPermissionMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
