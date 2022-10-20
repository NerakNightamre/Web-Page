<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;


Route::view('/', 'welcome')->name('home');

Route::view('/about', 'about')->name('about');

Route::view('/contact', 'contact')->name('contact');


Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
Route::get('blog/create', [PostController::class, 'create'])->name('posts.create');
Route::post('blog', [PostController::class, 'store'])->name('posts.store');
Route::get('/blog/{id}', [PostController::class, 'show'])->name('posts.show');

Route::view('/myself', 'myself')->name('myself');
