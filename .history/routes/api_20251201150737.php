<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('auth')->group(function () {
    Route::post('login', [AuthController::class, 'login']);
});

Route::get('auth/public-key', function () {
    return response()->json([
        'key' => file_get_contents(storage_path('public.pem')),
        'algo' => 'RS256'
    ]);
});
