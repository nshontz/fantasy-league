<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/teams', [\App\Http\Controllers\TeamController::class, 'index']);
Route::get('/schedule', [\App\Http\Controllers\MatchupController::class, 'index']);
Route::get('/awards', [\App\Http\Controllers\ReportController::class, 'awards']);
Route::get('/threshold-awards', [\App\Http\Controllers\ReportController::class, 'threshold_awards']);
Route::get('/weekly-statistics', [\App\Http\Controllers\ReportController::class, 'weekly_statistics']);
Route::get('/manager-statistics', [\App\Http\Controllers\ReportController::class, 'manager_statistics']);


