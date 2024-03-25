<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hagencia de niñeras</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles -->
    <style>
          .card {
            width: 50%; 
            margin: 0 auto;
            border: 1px ; 
            padding: 20px;
        }

       .card-header, .card-body{
            background-color: #eee0ca; 
        }

    </style>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">{{ __('Hagencia de niñeras') }}</a>
            <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="{{ asset('images/amarillo_img.jpeg') }}" alt="">
                {{ Auth::user()->name }}
                <span class="fa fa-angle-down"></span>
            </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i> {{ __('Salir') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                </div>
            </li>
            </ul>
        </nav>


        @if(Auth::user()->rol->rol == 'Administrador') 
        <div class="card text-center">
                <div class="card-header">{{ __('Bienvenida a la agencia de niñeras!') }}</div>
               <h3> Administrador</h3>
               <div class="row">
                    <div class="col-md-6 mx-auto mt-5">
                        <div class="text-center">
                            <img src="../public/images/ninera2.jpg" class="img-fluid" alt="No">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                    <a href="{{ route('solicitudes.index') }}" class="btn btn-primary">Solicitudes</a>
                    <a href="{{ route('servicios.index') }}" class="btn btn-info">Servicios</a>
                    <a href="{{ route('rol.index') }}" class="btn btn-primary">Roles</a>
                    <a href="{{ route('usuario.index') }}" class="btn btn-info">Usuarios</a>
                    </div>
                </div>
            </div>
     
        @endif

        @if(Auth::user()->rol->rol == 'Niñera') 
        <div class="card text-center">
        
                <div class="card-header">{{ __('Bienvenida a la agencia de niñeras!') }}</div>
                <h4>Niñera</h4>
                <div class="row">
                    <div class="col-md-6 mx-auto mt-5">
                        <div class="text-center">
                            <img src="../public/images/ninera2.jpg" class="img-fluid" alt="No">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                    <a href="{{ route('solicitudes.index') }}" class="btn btn-primary">Solicitudes</a>
                    <a href="{{ route('servicios.index') }}" class="btn btn-info">Servicios</a>
                    </div>
                </div>
            </div>
        @endif

        @if(Auth::user()->rol->rol == 'Cliente') 
       
        <div class="card text-center">
                <div class="card-header">{{ __('Bienvenida a la agencia de niñeras!') }}</div>
                <h4>Cliente</h4>
                <div class="row">
                    <div class="col-md-6 mx-auto mt-5">
                        <div class="text-center">
                            <img src="../public/images/ninera2.jpg" class="img-fluid" alt="No">
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                    <a href="{{ route('solicitudes.index') }}" class="btn btn-primary">Solicitudes</a>
                    </div>
                </div>
            </div>
        @endif
   
        
           


    <!-- Bootstrap JS (opcional, si necesitas funcionalidad de Bootstrap) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
