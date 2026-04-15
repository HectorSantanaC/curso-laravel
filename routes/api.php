<?php

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
*/

Route::get('/books', [ApiController::class, 'index']);

Route::post('/books', [ApiController::class, 'store']);

Route::delete('/books/{id}', [ApiController::class, 'destroy']);
