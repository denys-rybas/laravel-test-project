<?php

/* home */
Route::get('/', 'Front\IndexController@index')->name('home');
/* posts */
Route::get('/posts', 'Front\PostController@index')->name('posts');
Route::get('/post/{slug}', 'Front\PostController@getPostBySlug')->name('post');
