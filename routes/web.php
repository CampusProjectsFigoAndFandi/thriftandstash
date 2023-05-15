<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

// remember : order matters

Route::get('/', [PostController::class, 'about']);


Route::get('/login', [UserController::class, 'getLogin'])->name('login')->middleware('guest');
// name is for middleware to detect where to redirect (from file Middleware/Authenticate.php)
Route::post('/login', [UserController::class, 'submitLogin']);
Route::get('/register', [UserController::class, 'getRegister'])->middleware('guest');
Route::post('/register', [UserController::class, 'submitRegister']);
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/users/{user}/manage', [UserController::class, 'manage']);

Route::get('/posts/new', [PostController::class, 'getNew'])->middleware('auth');
Route::get('/posts', [PostController::class, 'index']);
Route::post('/posts', [PostController::class, 'submitNew'])->middleware('auth');
Route::get('/posts/{post}', [PostController::class, 'show']);
Route::get('/posts/{post}/edit', [PostController::class, 'getEdit'])->middleware('auth');
Route::put('/posts/{post}', [PostController::class, 'submitEdit'])->middleware('auth');
Route::delete('/posts/{post}', [PostController::class, 'delete'])->middleware('auth');
