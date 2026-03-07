<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\CategoryApiController;
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
Route::get('/test', function () {
    return response()->json(['message' => 'Hello from Laravel API ahh ahh']);
});

Route::get('/test123', function () {
    return response()->json(['message' => 'Jonny jonny yes mommy']);
});
Route::apiResource('/categories', CategoryApiController::class);





