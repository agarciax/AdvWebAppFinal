<?php

use App\Models\p2sts;
use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\User;


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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/posts', function () {
    $posts = p2sts::all();
    return view('p2sts', [
        'posts' => $posts
    ]);
//    return $posts;
});

//Route::get('/posts/{id}', function ($id) {
//    $posts = p2sts::find($id);
//    return $posts;
//});

Route::get("posts/{id}", function($id){
    $post = P2sts::find($id);
//    print_r($post);
//    exit(1);
    if ( $post == null ){
        return [
            'id' => $id,
            'error' => true,
            'msg' => "Error Id:$id Not Found"
        ];
    }
    return view('post', [
        'post' => $post
    ]);
});

Route::get('/users', function () {
    $user = User::all();
    return $user;
});
Route::get('/users/{id}', function ($id) {
   $user = User::find($id);
   return $user;
});


Route::get('/', function () {
    return view('posts');
});

//Route::get('/posts/{posts}', function($tok) {
//    $post = Blog::find($tok);
//    return $post;
//});


//Route::get('/posts2/{posts}', function($tok) {
//    $path = __DIR__ . "/../resources/blogData/{$tok}.html";
//    if(!file_exists($path)){
////        dd("File not exist Path:$path");
//        return redirect("/");
//    } cache()->remember("post2.{$tok}", 5, function() use($path){
//        $post = file_get_contents($path);
//        return $post;
//    });
//
////    return view('post')
//
//});

Route::get('/bike/{id}', function ($id) {
    return "ID:$id";
//}) -> where('id', '[A-z]');
//}) -> where('id', '[0-9][0-9][0-9]');
})->whereNumber("id");
//Route::get('/rows', function () {
//    $row = 100;
//    $cols = 50;
//    $cap = $row * $cols;
//    return view('size')->with('mySize', $cap)->with('row', $row)->with('col', $cols);
//});
//
//
//Route::get('/home', function() {
//    return "<h2 style='color: red'>Hello there</h2>";
//});
//Route::get('/pizza', function() {
//    return [
//      'Jack' => 'Plumber',
//      'Jill' => 'Electrician',
//      'James' => 'Carpenter',
//      'Jeff' => 'Roofer'
//    ];
//});
//Route::get('/shop', function() {
//    return view('bikes');
//});
//Route::get('/shop/{id}', function($id) {
//    $apples = "Red";
//    $bananas = "Bananas";
//    return "<h2>Shopping for bike id:$id</h2>";
//});
//Route::get('/buy/{id?}', function ($id=null) {
//    $oMsg = "";
//    if ( $id == null ){
//        $oMsg .= " Got nothing";
//    } else {
//        $oMsg .= " Got $id";
//    }
//    return $oMsg;
//});
