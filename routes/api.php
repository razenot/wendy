<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\GuestsController;
use App\Http\Controllers\Api\V1\AgentsController;

Route::prefix('v1')->group(function () {
    Route::get('/guests', [GuestsController::class, 'index']);
    Route::get('/guests/{id}', [GuestsController::class, 'show']);
    Route::post('/guests', [GuestsController::class, 'store']);
    Route::post('/guests-update', [GuestsController::class, 'update']);

    Route::get('/agents', [AgentsController::class, 'index']);
    Route::get('/agents/{id}', [AgentsController::class, 'show']);
    Route::post('/agents', [AgentsController::class, 'store']);
    Route::post('/agents-update', [AgentsController::class, 'update']);
});


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
