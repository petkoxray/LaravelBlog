<?php

Auth::routes();

Route::get('/', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create')->name('post_create');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts/', 'PostsController@store');

Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/posts/tags/{tag}', 'TagsController@index')->name('post_tags');
