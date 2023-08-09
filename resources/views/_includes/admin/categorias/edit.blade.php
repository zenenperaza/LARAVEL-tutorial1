@extends('_layouts.admin')

@section('contenido')

<div class="col-sm-6">
    <div class="card">
      <div class="card-header"><strong>Categoria {{ $categoria->nombre }}</strong>  </div>
      <div class="card-body">
        <form method="post" action=" {{ action([ App\Http\Controllers\Backend\CategoriaController::class, 'update'], $categoria->id) }} ">
            @csrf
            <input type="hidden" name="_method" value="patch">
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="name">Name</label>
              <input class="form-control" id="name" type="text" name="nombre" placeholder="" value=" {{ $categoria->nombre }} " autocomplete="off">
            </div>
          </div>
          
          <div class="col-sm-12">
            <div class="form-group">
                <button class="btn btn-info" type="submit">Actualizar</button>
            </div>
          </div>
        </div> 
        </form>      
      </div>
    </div>
  </div>
@endsection