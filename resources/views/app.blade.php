<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Styles -->
    <link rel="stylesheet" href="resources/css/app.css" />

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .encabezado{
            background-color: #1b4b72;
            background-image: url("https://image.freepik.com/vector-gratis/tienda-electronica-moderna-tienda-interior-banner-copia-espacio_48369-11933.jpg");
            height: 150px;
            margin-bottom: 15px;
            border-radius: 20px ;
        }
        .containerEncabezado{
            width: 80%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }

        #navbar{
            border-radius: 20px;
        }

        #botonHome,
        #botonLogin,
        #botonRegister {
            color: white;
        }

        .container {
            max-width: 500px;
            margin: 10px auto;
            text-align: left;
            font-family: sans-serif;

        }


        .centrar{
            text-align: center;
        }

        form {

            background: #ecf5fc;
            padding: 40px 50px 45px;


        }

        .form-control:focus {
            border-color: #000;
            box-shadow: none;
        }

        label {
            font-weight: 600;
        }

        .error {
            color: red;
            font-weight: 400;
            display: block;
            padding: 6px 0;
            font-size: 14px;
        }

        .form-control.error {
            border-color: red;
            padding: .375rem .75rem;
        }



    </style>
</head>
<body>
<main class="py-4" id="mains">
    <div class="containerEncabezado">
        <div class="encabezado">

        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary" id="navbar">
            <a class="navbar-brand" href="#">Perfil</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item active">
                        <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Servicios
                        </a>
                        <div id="list-example" class="list-group">
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#list-item-1">Computadoras</a>
                                <a class="dropdown-item" href="#list-item-2">Monitor</a>
                                <a class="dropdown-item" href="#list-item-3">Teclados y Mouse</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#list-item-4"></a>
                            </div>
                        </div>
                    </li>

                </ul>


                <div>
                    @if (Route::has('login'))
                        <div class="top-right links">
                            @auth
                                <a id="botonHome" href="{{route('verPedido.index')}}">Ver Pedidos</a>
                            @else
                                <a id="botonLogin" href="{{ route('login') }}">Login</a>

                                @if (Route::has('register'))
                                    <a id="botonRegister" href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth

                        </div>
                    @endif
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

</main>
</body>
