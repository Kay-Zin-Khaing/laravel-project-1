<?php

// User Route
Route::group(['namespace' => 'User'],function(){
    Route::get('/','HomeController@index');
    Route::get('post/{post}','PostController@post')->name('post');
});

// Admin Route
Route::group(['namespace' => 'Admin'],function(){
    Route::get('admin/home','HomeController@index')->name('admin.home');
    Route::resource('admin/category','CategoryController');
    Route::resource('admin/post','PostController');
    Route::resource('admin/tag','TagController');
    Route::resource('admin/user','UserController');
});
