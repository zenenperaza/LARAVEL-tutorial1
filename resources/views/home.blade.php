@extends('_layouts.layout')

@section('main')

<h1>Home</h1>

<h3>Categorias</h3>

<div class="container">

<div class="row">

    @foreach ($categorias as $categoria)

    <div class="col-12">
      <h4>{{ $categoria->nombre }}</h4>
    </div>

    <div class="col-12">
      <div class="row">
        @foreach ($categoria->productos as $productos)
            
        <div class="card m-2" style="width: 18rem;">
          {{-- <img src="..." class="card-img-top" alt="..."> --}}
          <div class="card-body">
            <h5 class="card-title">{{ $productos->nombre }}</h5>
            {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a> --}}
          </div>
        </div>

        @endforeach

      </div>
    </div>
 


      @endforeach
 
</div>

</div>

{{-- @include('_includes.productos') --}}
    
@endsection