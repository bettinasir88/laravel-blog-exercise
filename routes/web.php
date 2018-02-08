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

/* Admin */
Route::namespace('Admin')
    ->prefix('admin')
    ->middleware(['auth'])
    ->group(function () {

    /* Posts */
    Route::resource('post', 'PostController');
});

/* Posts */
Route::get('/', 'PostController@index')->name('homepage');
Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/{post}', 'PostController@show')->name('posts.view');

/* Auth */