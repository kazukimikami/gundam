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
Route::get('gundam', [DictionaryController::class, 'index']);
Route::get('gundam/{id}', [DictionaryController::class, 'show']);
Route::post('gundam', [DictionaryController::class, 'create']);
Route::put('gundam', [DictionaryController::class, 'update']);
Route::delete('gundam/{id}', [DictionaryController::class, 'delete']);
