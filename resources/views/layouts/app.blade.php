<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>@yield('title') - Car</title>

    <link rel="shortcut icon" href="https://sites.google.com/site/gomorymac/_/rsrc/1321182956510/19-tipos-de-autos/Cars%20icon.png" type="image/x-icon">  


  </head>
  <body class="bg-gray text-gray">

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(13 110 253 / 25%);">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Parqueadero</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="./">Inicio</a>
              </li>
              @if(!auth()->check())
                  
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login.index') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('registrer.index') }}">Registro</a>
                </li>

                @else

                <li class="nav-item">
                    <a class="nav-link" href="#">{{ auth()->user()->name }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login.destroy') }}">Salir</a>
                </li>

                @endif

            </ul>
          </div>
        </div>
      </nav>


    @yield('content')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>