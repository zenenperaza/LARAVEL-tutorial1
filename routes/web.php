<?php

use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
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
});


// Route::prefix('categorias')->group(function(){

//     Route::prefix('ofertas')->group(function(){
//         Route::get('ultimo-mes', function(){
//             echo "ofertas del ultimo mes";
//         });
//         Route::get('ultima-semana', function(){
//             echo "ofertas del ultimo semana";
//         });

//     });

//     Route::get('/', function (Request $request) {

//         $categorias = [
//             "fideos" => [
//                 'caracoles',
//                 'fideos largos',
//                 'espaguetis'
//             ],
//             "verduras" => [
//                 'tomates',
//                 'lechuga',
//                 'ocumo'
//             ],
//             ];

//         if(!is_null($request->input('nombre'))){

//             if (array_key_exists($request->input('nombre'), $categorias)) {
//                 foreach ($categorias[$request->input('nombre')] as $key => $value) {
//                     echo $value.'<br>';
//                 }
                
//             } 
            
//         } else {
//             foreach ($categorias as $nombreCategoria => $categoria) {
                
//                     echo $nombreCategoria.'<br>';
            
//             }
//         }

//         // dd($request->input('nombre'));

//         // foreach ($categorias as $key => $value) {
//         //  echo $value.'<br>';
//         // }
     
//      });
     
//      Route::get('oferta', function () {
//       echo "categoria en ofertas";
//      });
     
//      Route::get('mas-vendidas', function () {
//         echo "categoria en mas vendidas";
         
//      });
     
//      Route::get('{nombreCategoria}', function (string $nombreCategoria) {
//          echo 'producto de '.$nombreCategoria;
//      });

// });


// Route::get('productos/json', function(){
//     $categorias = [
//         "fideos" => [
//             'caracoles',
//             'fideos largos',
//             'espaguetis'
//         ],
//         "verduras" => [
//             'tomates',
//             'lechuga',
//             'ocumo'
//         ],
//         ];

//         $productos = [];

//         foreach ($categorias as $categoriaArray) {
//             foreach ($categoriaArray as $producto) {
//                 $productos[] = $producto;
//             }
//         }

//         return new JsonResponse($productos);

//         // return Response::json($productos);

//         // dd($productos);

// });


Route::get('productos/{categoria?}', function (?string $categoria = null) {
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
   
});

