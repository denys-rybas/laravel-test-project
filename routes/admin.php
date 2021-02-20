<?php


use Illuminate\Support\Facades\Route;

// 'middleware' => 'role:admin'
Route::group([], function () {
    Route::resource('/','PostController')->name('index', 'adm-posts');
});
