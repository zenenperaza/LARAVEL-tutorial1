@extends('_layouts.admin')

@section('contenido')

<div class="col-sm-6">
    <div class="card">
      <div class="card-header"><strong>Productos</strong>  </div>
      <div class="card-body">

        @include('_includes.admin._modules.errors')
        
        <form method="post" action=" {{ action([ App\Http\Controllers\Backend\ProductoController::class, 'store']) }} ">
            @csrf
           
        <div class="row">

          <div class="col-sm-12">
            <div class="form-group">
              <label for="categoria">Categoria</label>
             <select name="categoria_id" id="" class="form-control">
              @foreach ($categorias as $categoria)
                  <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
              @endforeach
             </select>
            </div>
          </div>

          <div class="col-sm-12">
            <div class="form-group">
              <label for="name">Nombre</label>
              <input class="form-control" id="nombre" type="text" name="nombre" placeholder="" value="  " autocomplete="off">
            </div>
          </div>

          <div class="col-sm-12">
            <div class="form-group">
              <label for="stock">Stock</label>
              <input class="form-control" id="stock" type="number" name="stock" placeholder="" value="  " autocomplete="off">
            </div>
          </div>

          <div class="col-sm-12">
            <div class="form-group">
              <label for="precio">Precio</label>
              <input class="form-control" id="precio" type="text" name="precio" placeholder="" value="  " autocomplete="off">
            </div>
          </div>
          
          <div class="col-sm-12">
            <div class="form-group">
                <button class="btn btn-info" type="submit">Crear</button>
            </div>
          </div>

        </div> 
        </form>      
      </div>
    </div>
  </div>
@endsection