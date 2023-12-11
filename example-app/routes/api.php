<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;

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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

/* 
Route::get('AllUsers',[
    ExampleController::class,
    'index',
]); 
*/

Route::get('testroute',[
    ExampleController::class,
    'firstfun',
]); 

Route::get('testsum',[
    ExampleController::class,
    'getSum',
]); 

Route::post('testpayload',[
    ExampleController::class,
    'getSumWithPayload',
]); 


