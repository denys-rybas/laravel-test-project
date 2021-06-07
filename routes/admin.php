<?php

// 'middleware' => 'role:admin'

Route::get('/', 'Admin\Home\HomeController')->name('index');
Route::resource('/posts', 'Admin\Post\PostController');
