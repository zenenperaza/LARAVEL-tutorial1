
<ul class="nav">
    <li class="nav-item"><a class="nav-link" href="{{ action([  App\Http\Controllers\Backend\AdminController::class, 'home' ]) }} "><i class="nav-icon la la-lg la-dashboard"></i> Home</a></li>
    <li class="nav-title">Adminstrador</li>
    <li class="nav-item nav-dropdown"><a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-lg la-file"></i> Categorias</a>
        <ul class="nav-dropdown-items">
          <li class="nav-item"><a class="nav-link" href="login.html" target="_top"><i class="nav-icon la la-lg la-star"></i> Crear</a></li>
          <li class="nav-item"><a class="nav-link" href="register.html" target="_top"><i class="nav-icon la la-lg la-star"></i> Editar</a></li>
        </ul>
      </li>
    </li>
  </ul>