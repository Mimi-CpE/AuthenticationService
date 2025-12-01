<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::prefix('auth')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
});

Route::post('logout', [AuthController::class, 'logout']);

Route::get('auth/public-key', function () {
    return response()->json([
        'key' => file_get_contents(storage_path('public.pem')),
        'algo' => 'RS256'
    ]);
});

Route::middleware([
    'auth:api'
])->prefix('/user')->group(function () {
    Route::post('/', )
});
