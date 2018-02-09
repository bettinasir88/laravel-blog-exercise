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
    // ->middleware(['auth'])
    ->group(function () {

    /* Dashboard */
    Route::get('/', 'DashboardController@index')->name('admin.dashboard');

    /* Posts */
    Route::resource('posts', 'PostController', ['except' => ['show'], 'names' => [
        'index'   => 'admin.posts.index',
        'create'  => 'admin.posts.create',
        'store'   => 'admin.posts.store',
        'edit'    => 'admin.posts.edit',
        'update'  => 'admin.posts.update',
        'destroy' => 'admin.posts.destroy',
    ]]);
});

/* Posts */
Route::get('/', 'PostController@index')->name('homepage');
Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/{post}', 'PostController@show')->name('posts.show');

/* Auth */