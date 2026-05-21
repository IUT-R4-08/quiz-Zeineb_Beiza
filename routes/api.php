<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\QuestionController;
use App\Http\Controllers\Api\AnswerController;

Route::apiResource('categories', CategoryController::class);
Route::apiResource('questions', QuestionController::class);
Route::apiResource('answers', AnswerController::class);