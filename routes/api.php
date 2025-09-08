<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Api\RequestFromOnlineController;

// Public Route: Login to generate Sanctum token
Route::post('/login', function (Request $request) {
    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    return response()->json([
        'token' => $user->createToken('API Token')->plainTextToken
    ]);
});

// Protected Routes (require Bearer token)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/save-request', [RequestFromOnlineController::class, 'save']);
});
// Route::post('/save-request', [RequestFromOnlineController::class, 'save']);