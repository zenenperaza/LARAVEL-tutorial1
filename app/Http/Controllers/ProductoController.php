<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
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
        // dd($productos);
          
        return view('productos', [
            'productos' => $productos
        ]);
            
    }
}
