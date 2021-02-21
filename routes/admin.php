<?php


// 'middleware' => 'role:admin'

Route::get('/', 'IndexController')->name('index');
Route::resource('/posts', 'PostController');
