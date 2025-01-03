<?php

use App\Http\Controllers\AssessmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'assessment'], function () {
    Route::get('/', [AssessmentController::class]);
});
