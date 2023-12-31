<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CrearProductoRequest;
use App\Http\Requests\EditarProductoRequest;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();

        return view( 'admin.productos.index', [
            'productos' => $productos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        
        return view( 'admin.productos.create',[
            'categorias' => $categorias
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CrearProductoRequest $request)
    {
        $producto = new Producto();
        
        $producto->fill($request->validated());
        
        // $producto->nombre = $request->input('nombre');
        // $producto->precio = $request->input('precio');
        // $producto->stock = $request->input('stock');
        // $producto->categoria_id = $request->input('categoria_id');
        $producto->save();

        return Redirect::action([ProductoController::class, 'index'])->with([
            'success' => 'El producto ha sido creado',
        ]) ;

    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        $categorias = Categoria::all();

        return view('admin.productos.edit', [
            'producto' => $producto,  'categorias' => $categorias
           ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EditarProductoRequest $request, Producto $producto)
    {

        $producto->fill($request->validated());

        // $producto->nombre = $request->input('nombre');
        // $producto->precio = $request->input('precio');
        // $producto->stock = $request->input('stock');
        // $producto->categoria_id = $request->input('categoria_id');
        $producto->save();

        return Redirect::action([ProductoController::class, 'index'])->with([
            'success' => 'El producto ha sido actualizado',
        ]) ;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}
