<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('api/get_single_question', [App\Http\Controllers\TestController::class, 'get_single_question']);
Route::post('api/submit_user', [App\Http\Controllers\TestController::class, 'submit_user']);
Route::post('api/calculate_result', [App\Http\Controllers\TestController::class, 'calculate_result']);
