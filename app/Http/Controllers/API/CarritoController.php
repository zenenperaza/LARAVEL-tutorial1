<?php

namespace App\Http\Controllers\API;

use App\Data\ProductoCarritoData;
use App\Http\Controllers\Controller;
use App\Http\Requests\CalcularTotalCarritoAPIRequest;
use App\Http\Requests\FinalizarCompraAPIRequest;
use App\Models\Compra;
use App\Models\CompraProducto;
use App\Models\Producto;
use App\Services\CarritoService;
use App\Services\CompraService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CarritoController extends Controller
{

    private function calculoTotal(array $productos){

        $total = 0;

        foreach($productos as $requestProducto){

            $total += ($requestProducto->producto->precio * $requestProducto->cantidad);

        }

        return $total;
    }


    public function calcularTotal(CalcularTotalCarritoAPIRequest $request) {       

        return new JsonResponse([
            'total' => $this->calculoTotal($request->productosCarrito),
        ]);
    }


}