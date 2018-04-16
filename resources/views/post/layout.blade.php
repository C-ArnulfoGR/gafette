<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    {!! Html::style('assets/css/fontawesome-free-5.0.6/web-fonts-with-css/css/fontawesome.css') !!}
    {!! Html::style('assets/css/bootstrap.min.css') !!}
    {!! Html::script('assets/js/jquery-3.2.1.min.js') !!}
    {!! Html::script('assets/js/popper.min.js') !!}
    {!! Html::script('assets/js/bootstrap.min.js') !!}
    {!! Html::script('assets/js/all.js') !!}
    {!! Html::style('css/layout.css') !!}
    <title>@yield('title') - Gafette</title>
</head>
<body>
<div class="fixed-top">
    <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
        <div class="container">
            <h6 class="navbar-brand" style="text-transform: uppercase;"> {{ $title }} </h6>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('AdminController@index') }}">Inicio
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('AdminController@basic') }}">Configuracion Basica</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Detalles del sitio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Otra opcion</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="container" style="margin-top: 100px; margin-bottom: 5%;">
    @yield('content')
</div>

<div class="">
    <footer class="footer-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="btn-group dropup">
                        <button type="button" class="btn btn-secondary">Enlaces rápidos</button>
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Opciones del menú</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ action('AdminController@index') }}"><i class="fas fa-star"></i>  Inicio</a>
                            <a class="dropdown-item" href="{{ action('AdminController@basic') }}"><i class="fas fa-cog"></i> Configuración Básica</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-globe"></i>  Detalles del sitio</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-user"></i>  Usuarios</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-question-circle"></i>  Otra opción</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6"></div>
                <div class="col-md-4 col-sm-6">
                    <div class="btn-group dropup">
                        <button type="button" class="btn btn-secondary">Desarrolladores de la página</button>
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="sr-only">Opciones del menú</span>
                        </button>
                        <div class="dropdown-menu">
                            <div class="dropdown-item"><i class="fas fa-male"></i> Arnulfito</div>
                            <div class="dropdown-item"><i class="fas fa-male" aria-hidden="true"></i> El Alex :v</div>
                            <div class="dropdown-item"><i class="fas fa-female" aria-hidden="true"></i> Besto waifu Karla bb</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">Copyright © Gafette - 2018.</div>
        </div>
    </footer>
</div>
</body>
</html>