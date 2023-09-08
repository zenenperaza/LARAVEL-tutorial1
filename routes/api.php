<?php

use App\Http\Controllers\API\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('productos/{producto}', [ProductoController::class, 'show']);

Route::prefix('carrito')->group(function() {
    Route::post('calcular-total', [\App\Http\Controllers\API\CarritoController::class, 'calcularTotal']);
    // Route::post('finalizar-compra', [\App\Http\Controllers\API\CarritoController::class, 'finalizarCompra']);
});