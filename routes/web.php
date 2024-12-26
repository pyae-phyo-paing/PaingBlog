<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\FrontController::class, 'blogHome'])->name('blog-home');

Route::get('/blog-post/{id}',[App\Http\Controllers\FrontController::class, 'blogPost'])->name('blog-post');

Route::group(['middleware'=>['auth','role:Admin|User'],'prefix'=>'backend','as'=>'backend.'], function(){
    Route::get('/',[App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin-dashboard');
    Route::resource('posts',App\Http\Controllers\Admin\PostController::class);
    Route::resource('categories',App\Http\Controllers\Admin\CategoryController::class);
    Route::resource('users',App\Http\Controllers\Admin\UserController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
