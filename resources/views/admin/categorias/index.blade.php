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
      @foreach ($categorias as $categoria)
      <tr>
        <td>{{ $categoria->id }}</td>
        <td>{{ $categoria->nombre }}</td>
        <td>
          <div class="d-flex align-intems-center">
           <a href="{{ action([App\Http\Controllers\Backend\CategoriaController::class, 'edit'], $categoria->id) }}  " class="mr-3">
            <button class="btn btn-info">Editar</button>
          </a>

          <form method="post" action=" {{ action([ App\Http\Controllers\Backend\CategoriaController::class, 'destroy'], $categoria->id) }} "
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