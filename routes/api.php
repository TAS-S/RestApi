<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\ApiWorkerController;
use App\Http\Controllers\Api\v1\ApiContactController;

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

// Route::post('/contacts', [ApiContactController::class,'store']);
// Route::get('/contacts', [ApiContactController::class,'index']);
Route::prefix('v1')->group(function(){
    Route::apiResource('contacts', ApiContactController::class);
    Route::apiResource('workers', ApiWorkerController::class);
});
