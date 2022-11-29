<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('app');
});

Route::get('/scores/input', [\App\Http\Controllers\ScoreController::class, 'create']);
Route::post('/scores/store', [\App\Http\Controllers\ScoreController::class, 'store']);

Route::get('/schedule/input', [\App\Http\Controllers\ScheduleController::class, 'create']);
Route::post('/schedule/store', [\App\Http\Controllers\ScheduleController::class, 'store']);

