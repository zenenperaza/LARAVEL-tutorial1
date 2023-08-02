<?php

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('productos', function(){
    $categorias = [
        "fideos" => [
            'caracoles',
            'fideos largos',
            'espaguetis'
        ],
        "verduras" => [
            'tomates',
            'lechuga',
            'ocumo'
        ],
        ];

        $productos = [];

        foreach ($categorias as $categoriaArray) {
            foreach ($categoriaArray as $producto) {
                $productos[] = $producto;
            }
        }

        return new JsonResponse($productos);
});


Route::get('categorias', function(){
    echo "Api de categorias";
});