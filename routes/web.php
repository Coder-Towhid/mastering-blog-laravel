<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SingleBlogController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\loginController;


Route::get('/', [HomeController::Class, 'index'])->name('home');
Route::get('/singleBlog', [SingleBlogController::Class, 'index'])->name('singleBlog');
Route::get('/blog', [BlogController::Class, 'index'])->name('blog');
Route::get('/login', [loginController::class, 'index'])->name('login');

