<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(Request $request)
    {
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

        if (!is_null($request->input('nombre'))) {

            if (array_key_exists($request->input('nombre'), $categorias)) {
                foreach ($categorias[$request->input('nombre')] as $key => $value) {
                    echo $value . '<br>';
                }
            }
        } else {
            foreach ($categorias as $nombreCategoria => $categoria) {

                echo $nombreCategoria . '<br>';
            }
        }
    }

    public function categoria(string $nombreCategoria){
        echo 'productos de '.$nombreCategoria;
    }
 
    public function crearCategoria(){

    }
}
