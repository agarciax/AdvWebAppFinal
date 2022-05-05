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
Route::resource('items', \App\Http\Controllers\ItemController::class);

Route::get('/', function() {
    $list = [];
    $list[] = 25;
    $list[] = 55;
    $list[] = "jack";
    return(View::make('review1')->with('myList', $list));
});
Route::get('/inventory', function () {
//   $items = array('hammers' => 5, 'Wrench' => 10, 'Saw' => 199, 'Vice' => 3);
//   $items['hammers'] += 1;

    $items = array(4,5, "Joe", 10, 22, 121);
    $items[] = 252;

    return(View::make('review2')->with('myList', $items));

});
Route::get('/home', function() {
    return View::make('aurora_home');
});
Route::get('/contact', function() {
   return View::make('aurora_contact');
});
Route::get('/animals', function() {
    return View::make('animals_home');
});
Route::get('/animalsFetch', [Animal2Controller::class, 'fetchAnimal']);

    //return "Made it fetch";

