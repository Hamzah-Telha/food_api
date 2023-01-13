<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\foodController;

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

// Route::post('/insertFood', 'App\Http\Controllers\foodController@index');

// Route::get('/foodTest', function() {
//     return new \Illuminate\Http\JsonResponse([
//         'data' => 'aaaa'
//     ]);
// });

Route::apiResource('foods',foodController::class);
