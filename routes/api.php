<?php

use App\Http\Controllers\ApiAssessmentController;
use App\Http\Controllers\ApiProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::group(['prefix' => 'api-development-question'], function () {
    
    // For basic
    Route::get('/hello', [ApiAssessmentController::class, 'hello']);

    // For Intermediate and advanced
    Route::apiResource('products', ApiProductController::class);

});