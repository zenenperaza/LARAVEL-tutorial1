<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(?string $categoria = NULL){

        if (!is_null($categoria)) {
            $categoria = Categoria::where('nombre', $categoria)->first();

            if (empty($categoria)) {
                dd("Categoria no existe");
               }  else{
                $productos = Producto::where('categoria_id', $categoria->id)->get();
               }

            
        } else {
            $productos = Producto::orderBy('nombre', 'ASC')->get();
        }    
       
        
        return view('productos', [
            'productos' => $productos,
        ]);
            
    }
    
 
    public function crearProducto() {
        $producto = new Producto();
        $producto->nombre = "Suero";
        $producto->categoria_id = 3;
        $producto->save();
    }

    public function verProducto(Producto $producto){
    
        return view('producto', [
            'producto' => $producto,
        ]);
    }
}
