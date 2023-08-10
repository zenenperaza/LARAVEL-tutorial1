@extends('_layouts.admin')

@section('contenido')

<div class="col-sm-6">
    <div class="card">
      <div class="card-header"><strong>Categoria</strong>  </div>
      <div class="card-body">

        @include('_includes.admin._modules.errors')
        
        <form method="post" action=" {{ action([ App\Http\Controllers\Backend\CategoriaController::class, 'store']) }} ">
            @csrf
           
        <div class="row">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="name">Name</label>
              <input class="form-control" id="name" type="text" name="nombre" placeholder="" value="  " autocomplete="off">
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