<?php

use App\Http\Controllers\Api\ApiStateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', function(Request $request) {
    $credenciais = $request->only(['email', 'password']);
    if (!Auth::attempt($credenciais)) {
        return response()->json('Unauthorized', 401);
    }

    $user = Auth::user();
    $user->tokens()->delete();
    $token = $user->createToken('token');
    
    return response()->json($token->plainTextToken);
});

Route::get('/state/{state}/city', [ApiStateController::class, 'city']);