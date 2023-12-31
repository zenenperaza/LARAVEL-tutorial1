<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoriaController as BackendCategoriaController;
use App\Http\Controllers\Backend\ProductoController as BackendProductoController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductoController;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
** CARRITO
*/

Route::get('carrito', [CarritoController::class, 'carrito']);


/*
**ADMIN
*/

Route::prefix('admin')->group(function(){

     Route::middleware('admin-logueado:0')->group(function() {
          Route::get('login', [AdminController::class, 'login']);
          Route::post('loguear', [AdminController::class, 'loguear']);
      });

     Route::middleware('admin-logueado:1')->group(function() {

          Route::get('logout', [AdminController::class, 'logout']);
     
          Route::get('/', [AdminController::class, 'home']);
     
          Route::resource('categorias', BackendCategoriaController::class);   
          
          Route::resource('productos', BackendProductoController::class);

     });

});

Route::get('crear-usuario', function(){
     $user = new User();
     $user->name = "Zenen Peraza";
     $user->email = "peraza@outlook.com";
     $user->password = Hash::make('3317397j');
     $user->save();

});