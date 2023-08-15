<?php

use App\Http\Controllers\API\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('productos/{producto}', [ProductoController::class, 'show']);