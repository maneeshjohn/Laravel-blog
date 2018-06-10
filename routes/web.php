<?php

/*
--------------------------------------------------------------------------
 Web Routes
--------------------------------------------------------------------------
 Here is where you can register web routes for your application. These
 routes are loaded by the RouteServiceProvider within a group which
 contains the "web" middleware group. Now create something great!
 */

Route::get('/', 'PostsController@index')->name('home');

Route::get('/create', 'PostsController@create');

Route::post('/posts', 'PostsController@store');

Route::get('/posts/{post}', 'PostsController@show');

Route::post('/posts/{post}/comment', 'CommentsController@store');

Route::get('/login', 'AuthsController@login');

Route::post('/login', 'AuthsController@session');

Route::get('/register', 'AuthsController@register');

Route::post('/register', 'AuthsController@store');

Route::get('/logout', 'AuthsController@destroy');