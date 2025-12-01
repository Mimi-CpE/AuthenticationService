<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Public Routes
Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

// Discovery Endpoint (The "Senior" addition)
Route::get('auth/public-key', function () {
    return response()->json([
        'key' => file_get_contents(storage_path('public.pem')),
        'algo' => 'RS256'
    ]);
});
