<?php

use App\Models\p2sts;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Animal2Controller;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function() {
    return "Hello there from /";
});
Route::get('/animals2', [Animal2Controller::class, 'index']);
Route::post('/animals2', [Animal2Controller::class, 'create']);
Route::delete("animals2/{id}", [Animal2Controller::class,'delete']);

Route::get( 'all', [Animal2Controller::class, 'showAll']);


Route::get('/animals2/{animal}', [Animal2Controller::class, 'show']);
Route::get('/animals2/{animal}/{sound}', [Animal2Controller::class, 'showSound']);

Route::put('/animals2/{animal}', [Animal2Controller::class, 'doPut']);
Route::patch('/animals2/{animal}', [Animal2Controller::class, 'doPatch']);
