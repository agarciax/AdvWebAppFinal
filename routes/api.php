<?php

use App\Http\Controllers\Api\CogsController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\SaleController;
use App\Http\Controllers\Api\SprocketsController;
use App\Models\Sales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResource('sprockets',SprocketsController::class);
Route::apiResource('cogs',CogsController::class);
Route::apiResource('customers',CustomerController::class);
Route::apiResource('sales',SaleController::class);


//Route::get('/customers', [CustomerController::class, 'index']);
//Route::get('/customers/{id}', [CustomerController::class, 'show']);
//Route::post('/customers', [CustomerController::class, 'store']);
//Route::delete('/customers/{id}', [CustomerController::class, 'destroy']);
//
//Route::get('/sales', [Sales::class, 'index']);
//Route::get('/sales/{id}', [Sales::class, 'show']);
//Route::post('/sales', [Sales::class, 'store']);
//Route::get('/sales/{id}', [Sales::class, 'destroy']);
//
//Route::get('/sprockets', [SprocketsController::class, 'index']);
//Route::get('/sprockets/{id}', [SprocketsController::class, 'show']);
//Route::post('/sprockets', [SprocketsController::class, 'store']);
//Route::delete('/sprockets/{id}', [SprocketsController::class, 'destroy']);
//
//Route::get('/cogs', [CogsController::class, 'index']);
//Route::get('/cogs/{id}', [CogsController::class, 'show']);
//Route::post('/cogs', [CogsController::class, 'store']);
//Route::get('/cogs/{id}', [CogsController::class, 'destroy']);
