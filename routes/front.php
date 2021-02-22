<?php

/* home */
Route::get('/', 'IndexController@index')->name('home');
/* posts */
Route::get('/posts', 'PostController@index')->name('posts');
Route::get('/post/{slug}', 'PostController@getPostBySlug')->name('post');
