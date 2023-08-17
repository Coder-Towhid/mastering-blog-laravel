<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SingleBlogController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\loginController;


Route::get('/', [HomeController::Class, 'index'])->name('home');
Route::get('/single-blog/{id}', [HomeController::Class, 'show'])->name('single-blog');
Route::get('/blog', [BlogController::Class, 'index'])->name('blog');
Route::post('/create-blog', [BlogController::Class, 'store'])->name('create-blog');
Route::get('/login', [loginController::class, 'index'])->name('login');

