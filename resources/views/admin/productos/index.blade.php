@extends('_layouts.admin');

@section('contenido')


@include('_includes.admin._modules.success')


<table class="table table-responsive-sm table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($productos as $producto)
      <tr>
        <td>{{ $producto->id }}</td>
        <td>{{ $producto->nombre }}</td>
        <td>
          <div class="d-flex align-intems-center">
           <a href="{{ action([App\Http\Controllers\Backend\ProductoController::class, 'edit'], $producto->id) }}  " class="mr-3">
            <button class="btn btn-info">Editar</button>
          </a>

          <form method="post" action=" {{ action([ App\Http\Controllers\Backend\ProductoController::class, 'destroy'], $producto->id) }} "
            onclick="return confirm('Seguro eliminar este elemento')"
            >
            @csrf
            <input type="hidden" name="_method" value="delete">
         
            <button class="btn btn-danger" type="submit">Eliminar</button>
          
          </form>
        </div>

        </td>
      </tr>
      @endforeach
      
     
    </tbody>
  </table>
    
@endsection