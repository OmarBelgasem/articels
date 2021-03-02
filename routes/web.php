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
// Route::get('/hello', function() {
//     return "hello there!";
// });
// Route::get('/users/{id}/{name}', function($id, $name) {
//     return "this is the $name with an id of $id";
// });
// Route::get('/profile', 'PagesController@index');
// Route::get('/profile', 'PagesController@show');


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');
Route::resource('profile', 'ProfileController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

