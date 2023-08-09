<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoriaController as BackendCategoriaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);


Route::prefix('categorias')->group(function(){

     Route::get('/', [CategoriaController::class, 'index']);   
     Route::get('/crear-categoria', [CategoriaController::class, 'crearCategoria']);     
     Route::get('{nombreCategoria}', [CategoriaController::class, 'categoria']);
});


Route::get('productos/crear-producto', [ProductoController::class, 'crearProducto']);  
Route::get('productos/ver-producto/{producto}', [ProductoController::class, 'verProducto']);
Route::get('productos/{categoria?}', [ProductoController::class, 'index']);


/*
**ADMIN
*/

Route::prefix('admin')->group(function(){

     Route::get('login', [AdminController::class, 'login']);
     
     Route::get('/', [AdminController::class, 'home']);

     Route::resource('categorias', BackendCategoriaController::class);



});