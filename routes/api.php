<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\http\controllers\EremployeeController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
    //Route::post('employee/add', [App\Http\Controllers\EremployeeController::class, 'add']);
});
Route::post('employee/add', [App\Http\Controllers\EremployeeController::class, 'add']);
//Route::get('employee', [App\Http\Controllers\EremployeeController::class, 'index'])->name('employee');