<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>America Car Rental</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

  
    </head>
    <style> 
        .navbar-america{
          background-color: #025ed3;
          box-shadow: 0 8px 8px 0 rgba(0, 0, 0, 0.15);
        }
        .nav-link-america{
          color: whitesmoke;
          margin-top: 5px;
          font-weight: bold;
          font-size: larger;
          margin-left: 30px;
        }
        .menu-america{
          margin-left:50px;
        }
        .img-america{
          margin-left: 50px;
          margin-right: 150px;
        }
        .boton-nav{
          margin-left: 400px;
          border: none;
        }
        .menu-america ul li p{
          
          border-bottom:3px solid #025ed3;
        }
        .menu-america ul li p:hover{
          color:lawngreen;
          border-bottom:3px solid lawngreen;
        }
        h4{
          font-family: Arial, Helvetica, sans-serif;
          font-weight: bolder;
        }


    </style>
    <body>
    <nav class="navbar navbar-expand-sm navbar-dark  navbar-america">
    <img class="img-fluid img-america" src="{{URL::asset('/images/logo.png')}}" alt="America Car Rental" >
        <button class="navbar-toggler boton-nav" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse menu-america" id="navbarMenu">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <p class="nav-link-america">Inicio</p>
                </li>
                <li class="nav-item">
                    <p class="nav-link-america">Vehiculos</p>
                </li>
                <li class="nav-item">
                    <p class="nav-link-america">Ofertas</p>
                </li>
                <li class="nav-item">
                    <p class="nav-link-america">Sucursales</p>
                </li>
                <li class="nav-item">
                    <p class="nav-link-america">Políticas</p>
                </li>
                <li class="nav-item">
                    <p class="nav-link-america">Contacto</p>
                </li>
            </ul>
        </div>

    </nav>




    

        <div >
         
          <h4>Autos que reservaste para ti</h4>
           
            <?php $valor = 0?>

            @if(session('cart'))

            writeln(session('cart'));

            @foreach(session('cart') as $id -> $details)

                {{$details['nombre']}}

                {{$details['precio']}}

                {{details['cantidad']}}

                <img src="{{ $cart['foto']}}"width="130" height="90">

               @endforeach
               @endif
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>
