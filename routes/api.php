<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\Auth\AuthController;
use App\Http\Controllers\API\s_30_data_typesAPIController;
use App\Http\Controllers\API\s_10_user_databasesAPIController;
use App\Http\Controllers\API\s_20_user_tablesAPIController;
use App\Http\Controllers\API\Auth;
use App\Http\Controllers\API\s_60_column_typesAPIController;
use App\Http\Controllers\API\s_40_table_typesAPIController;
use App\Http\Controllers\API\s_50_subtypesAPIController;

    

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function() {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/profile', [AuthController::class, 'getProfile']);
    Route::put('/profile', [AuthController::class, 'updateProfile']);

    Route::resource('s_10_user_databases', s_10_user_databasesAPIController::class);
    Route::resource('s_20_user_tables', s_20_user_tablesAPIController::class);
    Route::resource('s_30_data_types', s_30_data_typesAPIController::class);
    Route::resource('s_40_table_types', s_40_table_typesAPIController::class);
    Route::resource('s_50_subtypes', s_50_subtypesAPIController::class);
    Route::resource('s_60_column_types', s_60_column_typesAPIController::class);

    Route::post('s_10_user_databases/{id}', [s_10_user_databasesAPIController::class, 'update']);
    Route::post('s_20_user_tables/{id}', [s_20_user_tablesAPIController::class, 'update']);
    Route::post('s_30_data_types/{id}', [s_30_data_typesAPIController::class, 'update']);
    Route::post('s_40_table_types/{id}', [s_40_table_typesAPIController::class, 'update']);
    Route::post('s_50_subtypes/{id}', [s_50_subtypesAPIController::class, 'update']);
    Route::post('s_60_column_types/{id}', [s_60_column_typesAPIController::class, 'update']);
});
