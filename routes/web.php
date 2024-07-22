<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Ruta para la pagina principal
Route::get('/', HomeController::class);

// Rutas para las paginas de Posts
// Metodos Get
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'show']);
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);

// Metodos Post
Route::post('/posts', [PostController::class, 'store']);