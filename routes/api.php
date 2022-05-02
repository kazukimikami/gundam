<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\DictionaryController;

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
});

Route::get('index', [DictionaryController::class, 'index']);
Route::post('index', [DictionaryController::class, 'show']);
Route::get('index2', [DictionaryController::class, 'create']);
Route::put('index', [DictionaryController::class, 'delete']);
Route::delete('index', [DictionaryController::class, 'update']);
