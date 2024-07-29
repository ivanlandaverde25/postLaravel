<?php

use App\Http\Controllers\DependenciaController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProveedorController;
use Illuminate\Support\Facades\Route;

// Ruta para la pagina principal
Route::get('/', HomeController::class);

// Rutas para las paginas de Posts
// Generacion de todas las rutas por medio de Resource
Route::resource('posts', PostController::class)
->names('posts');

// También se puede utilizar con metodos como except o only
// Route::resource('posts', PostController::class)
// ->names('posts')
// ->except(['create', 'update', 'delete']);

// Route::resource('posts', PostController::class)
// ->names('posts')
// ->only(['index','show']);

// De igual forma se puede utilizar para crear las rutas para un api
// Route::apiResource('posts', PostController::class);

// Metodos Get
// Route::get('/posts', [PostController::class, 'index'])
//     ->name('posts.index');

// Route::get('/posts/create', [PostController::class, 'create'])
//     ->name('posts.create');

// Route::get('/posts/{post}', [PostController::class, 'show'])
//     ->name('posts.show');

// Route::get('/posts/{post}/edit', [PostController::class, 'edit'])
//     ->name('posts.edit');

// // Metodos Post
// Route::post('/posts', [PostController::class, 'store'])
//     ->name('posts.store');

// // Metodos put
// Route::put('/posts/{post}', [PostController::class, 'update'])
//     ->name('posts.update');

// // Metodos destoy
// Route::delete('/posts/{post}', [PostController::class, 'destroy'])
//     ->name('posts.destroy');



// Rutas para las paginas de empresas
// Generacion de todas las rutas por medio de Resource
Route::resource('empresas', EmpresaController::class)
->names('empresas');

//Metodos Get
// Route::get('/empresas', [EmpresaController::class, 'index'])
//     ->name('empresas.index');

// Route::get('/empresas/create', [EmpresaController::class, 'create'])
//     ->name('empresas.create');

// Route::get('/empresas/{id}', [EmpresaController::class, 'show'])
//     ->name('empresas.show');

// Route::get('/empresas/{id}/edit', [EmpresaController::class, 'edit'])
//     ->name('empresas.edit');

// // Metodos Post
// Route::post('/empresas', [EmpresaController::class, 'store'])
//     ->name('empresas.store');

// // Metodos Put
// Route::put('/empresas/{id}', [EmpresaController::class, 'update'])
//     ->name('empresas.update');

// // Metodos delete
// Route::delete('/empresas/{id}', [EmpresaController::class, 'destroy'])
//     ->name('empresas.destroy');




//Rutas para empleados
// Generacion de todas las rutas por medio de Resource
Route::resource('/empleados', EmpleadoController::class)
    ->names('empleados');

// Metodos GET
// Route::get('/empleados', [EmpleadoController::class, 'index'])
//     ->name('empleados.index');

// Route::get('/empleados/create', [EmpleadoController::class, 'create'])
//     ->name('empleados.create');

// Route::get('/empleados/{id}', [EmpleadoController::class, 'show'])
//     ->name('empleados.show');

// Route::get('/empleados/{id}/edit', [EmpleadoController::class, 'edit'])
//     ->name('empleados.edit');

// // Metodos POST
// Route::post('/empleados', [EmpleadoController::class,'store'])
//     ->name('empleados.store');

// // Metodos PUT
// Route::put('/empleados/{id}', [EmpleadoController::class, 'update'])
//     ->name('empleados.update');

// // Metodos Destoy
// Route::delete('/empleados/{id}', [EmpleadoController::class, 'destroy'])
//     ->name('empleados.destroy');

// RUTAS PARA DEPENDENCIAS
Route::resource('/dependencias', DependenciaController::class)
    ->names('dependencias');


// Rutas para Proveedores
// MUY IMPORTANTE PARA TABLAS QUE SEAN EN PLURAS, SE DEBE DEFINIR EL NOMBRE DEL PARAMETRO O SINO DA ERORR ALVVVVV
Route::resource('/proveedores', ProveedorController::class)
    ->parameters(['proveedores' => 'proveedor'])
    ->names('proveedores');