<?php

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

Route::get('/', function(){
    return view('welcome');
});
Route::get('/posts', 'PostController@index')->name('home');
Route::get('/post/{post}', 'PostController@show');
Route::get('posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::post('/posts/{post}/comments', 'CommentsController@store');
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionsController@create');
Route::get('/logout', 'SessionsController@destroy');
/* */