<?php

use App\Http\Controllers\AssessmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'form-handling-question'], function () {
    Route::get('/basic', [AssessmentController::class, 'formhandlingQuestionBasic']);
    Route::get('/intermediate', [AssessmentController::class, 'formhandlingQuestionIntermediate']);
    Route::get('/advanced', [AssessmentController::class, 'formhandlingQuestionAdvanced']);
    Route::get('/advanced/pagetwo', [AssessmentController::class, 'formhandlingQuestionAdvancedPageTwo']);
});
