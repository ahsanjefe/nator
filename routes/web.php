<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('s10UserDatabases', App\Http\Controllers\s_10_user_databasesController::class);
    Route::resource('s20UserTables', App\Http\Controllers\s_20_user_tablesController::class);
    Route::resource('s30DataTypes', App\Http\Controllers\s_30_data_typesController::class);
    Route::resource('s40TableTypes', App\Http\Controllers\s_40_table_typesController::class);
    Route::resource('s50Subtypes', App\Http\Controllers\s_50_subtypesController::class);
    Route::resource('s60ColumnTypes', App\Http\Controllers\s_60_column_typesController::class);
});

