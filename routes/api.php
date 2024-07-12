<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApiDocController;
use App\Http\Controllers\API\ApiCategoryController;
use App\Http\Controllers\API\ApiMenuController;
use App\Http\Controllers\API\WebConfigController;
use App\Http\Controllers\API\ApiRequestController;
use App\Http\Controllers\API\ApiResponseController;
use App\Http\Controllers\API\ApiQueryController;

Route::apiResource('api-docs', ApiDocController::class);
Route::apiResource('api-categories', ApiCategoryController::class);
Route::apiResource('api-menus', ApiMenuController::class);
Route::apiResource('web-configs', WebConfigController::class);
Route::apiResource('api-requests', ApiRequestController::class);
Route::apiResource('api-responses', ApiResponseController::class);
Route::apiResource('api-queries', ApiQueryController::class);



