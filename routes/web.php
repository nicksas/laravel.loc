<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Route::get('/about', function (){
//    $name = 'About';
//   return view('about', compact('name'));
//});

Route::get('/', 'HomeController@index');

Route::get("/page/{slug}", 'PageController@show');

Route::get('/test', 'Test\TestController@index');

Route::resource('/posts', 'PostController', ['parameters' => [
    'posts' => 'id'
]]);
