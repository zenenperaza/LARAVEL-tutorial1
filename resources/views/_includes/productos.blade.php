
<h3>Productos</h3>
<div class="container">
    <div class="row">
 
     @foreach ($productos as $producto)
 
     <div class="card m-2" style="width: 18rem;">
         {{-- <img src="..." class="card-img-top" alt="..."> --}}
         <div class="card-body">
           <h5 class="card-title">{{ $producto->nombre }}</h5>
           <h6 class="card-title">{{ $producto->categoria->nombre }}</h6>
           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
           <a href="{{ action([App\Http\Controllers\ProductoController::class, 'verProducto'], $producto) }} " class="btn btn-primary">Ver producto</a>
         </div>
       </div>
 
       @endforeach
 
 </div>
 </div>