<?php

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EmpresaController;
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

// Metodos put
Route::put('/posts/{post}', [PostController::class, 'update']);

// Metodos destoy
Route::delete('/posts/{post}', [PostController::class, 'destoy']);

// Rutas para las paginas de empresas
//Metodos Get
Route::get('/empresas', [EmpresaController::class, 'index']);
Route::get('/empresas/create', [EmpresaController::class, 'create']);
Route::get('/empresas/{id}', [EmpresaController::class, 'show']);
Route::get('/empresas/{id}/edit', [EmpresaController::class, 'edit']);

// Metodos Post
Route::post('/empresas', [EmpresaController::class, 'store']);

// Metodos Put
Route::put('/empresas/{id}', [EmpresaController::class, 'update']);

// Metodos delete
Route::delete('/empresas/{id}', [EmpresaController::class, 'destroy']);


//Rutas para empleados
// Metodos GET
Route::get('/empleados', [EmpleadoController::class, 'index']);
Route::get('/empleados/create', [EmpleadoController::class, 'create']);
Route::get('/empleados/{id}', [EmpleadoController::class, 'show']);
Route::get('/empleados/{id}/edit', [EmpleadoController::class, 'edit']);

// Metodos POST
Route::post('/empleados', [EmpleadoController::class,'store']);

// Metodos PUT
Route::put('/empleados/{id}', [EmpleadoController::class, 'update']);

// Metodos Destoy
Route::delete('/empleados/{id}', [EmpleadoController::class, 'destroy']);
