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


Route::get('/posts', 'PostsController@GetAllPosts');

Route::get('/create', 'PostsController@CreatePost');

Route::post('/create', 'PostsController@NewPost');

Route::get('/post/{id}', 'PostsController@GetSinglePost');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
