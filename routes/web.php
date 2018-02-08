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

    /* Admin */
    Route::namespace('Admin')
        ->prefix('admin')
        ->middleware(['auth'])
        ->group(function () {

        /* Posts */
        Route::resource('post', 'PostController');
    });

    /* Auth */

    /* Posts */
    Route::get('/', 'PostController@index')->name('posts.index');

    Route::get('posts/{slug}', function (App\Post $post) {
        //
    })->name('posts.view');
});
