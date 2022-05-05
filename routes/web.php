<?php

use App\Http\Controllers\CogsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SprocketsController;
use App\Models\Customer;
use App\Models\Sale;
use App\Models\Sales;
use Illuminate\Support\Facades\Route;


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
//Route::resource('customers', CustomerController::class);
//Route::resource('sprockets', SprocketsController::class);
//Route::resource('cogs', CogsController::class);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/CustomerMenu', function () {
    return view('customerMenu', ['customers' => Customer::all()]);
});
Route::get('/Sales', function () {
    return view('sales', ['customers' => Customer::all()]);
});
Route::get('/SalesReport', function () {
    return view('salesReport', ['sales' => Sale::all()]);
});
