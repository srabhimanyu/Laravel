<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
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

// Route::get('/', function () {
    
//     return view('welcome');
//    // return "admin is here";
// });

// Route::get('/about', function () {
//     return "Hi about page";
// });

// Route::get('/contact', function () {
//     return "Hi i am contact";
// });

// Route::get('/post/{id}/{name}', function ($id,$name) {
//     return "This is post number".$id." ".$name;
// });

// Route::get('/admin/posts/example',array('as'=>'admin.home', function() {
//  $url = route('admin.home');
 
//   return "this url is" . $url;
// }));

// Route::get('/post/{id}',[PostsController::class,'index']);
//
Route::resource('posts','App\Http\Controllers\PostsController');
