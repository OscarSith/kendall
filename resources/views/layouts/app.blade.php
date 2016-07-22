<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kendall Perú Travel - Administrador</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap3-wysihtml5.min.css') }}">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        .fa-btn {
            margin-right: 6px;
        }
        .navbar-brand {
            padding-top: 0;
            padding-bottom: 0;
        }
        .mt0 {
            margin-top: 0
        }
        .content-buttons .btn-block{
            margin-top: 10px;
        }
        .inactivo {
            border-color: #F00 !important;
            opacity: 0.7;
        }
        .img-mini {
            background-repeat: no-repeat;
            background-size: 100%;
            height: 210px;
        }
        .info-cat {
            color: #fff;
            margin-top: 0;
            padding: 6px 0;
        }
        .inter {
            background-color: #7BBA4E;
        }
        .locales {
            background-color: #2EAAE2;
        }
        .list-country {
          background-size: cover;
          background-position: 50% 50%;
          height: 180px
        }
        .no-padding-sides {
          padding-left: 0 !important;
          padding-right: 0 !important;
        }
        .no-padding-sides h5 {
            height: 30px;
            overflow: hidden;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/logo.png') }}" class="img-responsive" title="Ir a la página web" style="height:50px">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ route('dashboard') }}">Inicio</a></li>
                    <li><a href="{{ route('categoria') }}">Categoria</a></li>
                    <li><a href="{{ route('promociones') }}">Promociones - Ofertas</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('salir') }}"><i class="fa fa-btn fa-sign-out"></i>Cerrar Sesión</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')
    <script type="text/javascript" src="{{ asset('js/jquery.2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    @yield('textarea')
</body>
</html>