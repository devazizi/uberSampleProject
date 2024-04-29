<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::middleware([])->group(function () {

    Route::namespace('Auth')->prefix('/auth')->group(function () {
        Route::prefix('/client')->group(function () {
            Route::get('signin', 'ClientAuthentication@signIn');
        });
    });

    // Route::middleware('auth::client-api')->group(function () {

    // });

    // Route::middleware('auth::manager-api')->group(function () {

    // });

    // Route::middleware('auth:driver-api')->group(function () {

    // });

});
