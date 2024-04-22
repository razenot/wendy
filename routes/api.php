<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\GuestsController;
use App\Http\Controllers\Api\V1\AgentsController;
use App\Http\Controllers\Api\V1\TodoController;
use App\Http\Controllers\Api\V1\OutlayController;
use App\Http\Controllers\AuthController;


Route::prefix('v1')->group(function () {
    Route::get('/guests', [GuestsController::class, 'index']);
    Route::get('/guests/{id}', [GuestsController::class, 'show']);
    Route::post('/guests', [GuestsController::class, 'store']);
    Route::post('/guests-update', [GuestsController::class, 'update']);
    Route::delete('/guests/{id}', [GuestsController::class, 'destroy']);

    Route::get('/agents', [AgentsController::class, 'index']);
    Route::get('/agents/{id}', [AgentsController::class, 'show']);
    Route::post('/agents', [AgentsController::class, 'store']);
    Route::post('/agents-update', [AgentsController::class, 'update']);
    Route::delete('/agents/{id}', [AgentsController::class, 'destroy']);

    Route::get('/todo', [TodoController::class, 'index']);
    Route::get('/todo/{id}', [TodoController::class, 'show']);
    Route::post('/todo', [TodoController::class, 'store']);
    Route::post('/todo-update', [TodoController::class, 'update']);
    Route::delete('/todo/{id}', [TodoController::class, 'destroy']);

    Route::get('/outlay', [OutlayController::class, 'index']);
    Route::get('/outlay/{id}', [OutlayController::class, 'show']);
    Route::post('/outlay', [OutlayController::class, 'store']);
    Route::post('/outlay-update', [OutlayController::class, 'update']);
    Route::delete('/outlay/{id}', [OutlayController::class, 'destroy']);
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {

    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::post('/me', [AuthController::class, 'me']);

})->middleware('auth:api');


// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:api');

// Route::post('/login', function (Request $request) {
//     $credentails = $request->only(['email', 'password']);

//     if(!$token = auth()->attempt($credentails)) {
//         return response()->json(
//             status: 401,
//         );
//     }

//     return response()->json([
//         'data' => [
//             'token' => $token,
//             'token_type' => 'bearer',
//             'expires_in' => auth()->factory()->getTTL() * 60
//         ]
//     ]);
// });
