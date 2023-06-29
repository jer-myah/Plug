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

Route::middleware([\App\Http\Middleware\EnsureRouteIsEnlisted::class])->group(function () {
    Route::get('/', function (Request $request) {
        return "Hello World!";
    });

    Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
        return "user";
    });

});
