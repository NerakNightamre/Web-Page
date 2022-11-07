<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;


Route::view('/', 'welcome')->name('home');

Route::view('/about', 'about')->name('about');

Route::view('/contact', 'contact')->name('contact');


Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
// crear
Route::get('blog/create', [PostController::class, 'create'])->name('posts.create');
Route::post('blog', [PostController::class, 'store'])->name('posts.store');
//Mostrar
Route::get('/blog/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
//Editar
Route::patch('blog/{post}', [PostController::class, 'update'])->name('posts.update');
//Eliminar
Route::delete('blog/{post}', [PostController::class, 'destroy'])->name('posts.destroy');


Route::view('/myself', 'myself')->name('myself');