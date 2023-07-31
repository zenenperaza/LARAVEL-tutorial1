<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('categorias', function () {
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


// Route::get('categorias/{nombreCategoria}', function (string $nombreCategoria) {
//     echo 'producto de '.$nombreCategoria;
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
                
            } else {
                echo 'CATEGORIA INVALIDAD';
            }
        }
});

