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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('auth.login');
// });

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/post', 'PostController@post');

Route::get('/profile', 'ProfileController@profile');

Route::get('/category', 'CategoryController@category');

Route::post('/addCategory', 'CategoryController@addCategory');

Route::post('/addProfile', 'ProfileController@addProfile');

Route::post('addPost', 'PostController@addPost');

Route::get('/view/{id}', 'PostController@view');

Route::get('/edit/{id}', 'PostController@edit');

Route::post('/editPost/{id}', 'PostController@editPost');

Route::get('/like/{id}', 'PostController@like');

Route::get('/dislike/{id}', 'PostController@dislike');

Route::get('/delete/{id}', 'PostController@deletePost');

Route::post('/delete/{id}/comment', 'CommentController@deleteComment');

Route::get('/category/{id}', 'PostController@category');

Route::post('/comment/{id}', 'PostController@comment');

Route::post('/search', 'PostController@search');