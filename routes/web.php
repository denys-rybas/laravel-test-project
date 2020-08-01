<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/* auth */
Auth::routes();
/* home */
Route::get('/', 'IndexController@index')->name('home');
/* posts */
Route::get('/posts', 'PostController@index')->name('posts');
Route::get('/post/{slug}', 'PostController@getPostBySlug')->name('post');

/* ADMIN */
Route::group(['prefix' => 'admin', 'middleware' => 'role:admin'], function () {
    Route::get('/', 'Admin\PostController@index')->name('adm-posts');
});
