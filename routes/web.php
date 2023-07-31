<?php

use Illuminate\Support\Facades\Route;

Route::prefix('categorias')->group(function(){

    Route::prefix('ofertas')->group(function(){
        Route::get('ultimo-mes', function(){
            echo "ofertas del ultimo mes";
        });
        Route::get('ultima-semana', function(){
            echo "ofertas del ultimo semana";
        });

    });




    Route::get('/', function () {
        $categorias = [
         'Tomates',
         'Cebollas',
         'Pepinos',
         'Cilnatro'
        ];
        foreach ($categorias as $key => $value) {
         echo $value.'<br>';
        }
     
     });
     
     Route::get('oferta', function () {
      echo "categoria en ofertas";
     });
     
     Route::get('mas-vendidas', function () {
        echo "categoria en mas vendidas";
         
     });
     
     Route::get('{nombreCategoria}', function (string $nombreCategoria) {
         echo 'producto de '.$nombreCategoria;
     });

});


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

        if (is_null($categoria)) {
            foreach ($categorias as $categoriaArray) {
                foreach ($categoriaArray as $producto) {
                    echo $producto.'<br>';
                }
            }
        } else {
            if (array_key_exists($categoria, $categorias)) {
           

                foreach ($categorias[$categoria] as $key => $value) {
                    echo $value.'<br>';
                }
                
            } 
        }
});

