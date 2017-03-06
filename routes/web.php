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


//Route::resource('/', 'PostController');

Route::get('/', function(){
    return redirect(action('PostController@index'));
});

Route::get('/posts', 'PostController@index');
Route::get('/posts/show/{id}', 'PostController@show');
Route::get('/posts/create', 'PostController@create')->middleware('auth');
Route::post('/posts/store', 'PostController@store')->middleware('auth');



Route::get('/comments', 'CommentController@index');
Route::get('/comments/show/{id}', 'CommentController@show');
Route::get('/comments/create', 'CommentController@create')->middleware('auth');
Route::post('/comments/store', 'CommentController@store')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index');
//Route::get('/posts/create', 'PostController@create');