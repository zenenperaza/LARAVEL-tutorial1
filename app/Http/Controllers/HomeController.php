<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        // dd('hola');
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
            $nombreCategorias = [];
    
            foreach ($categorias as $nombreCategoria => $categoriaArray) {
    
                $nombreCategorias[] = $nombreCategoria;
    
                foreach ($categoriaArray as $producto) {
                    $productos[] = $producto;
                }
            }
        
        return view('home', [
            'productos' => $productos,
            'categorias' => $nombreCategorias
        ]);
    }
}
