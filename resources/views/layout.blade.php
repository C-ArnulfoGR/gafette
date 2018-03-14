<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    {!! Html::style('assets/css/fontawesome-free-5.0.6/web-fonts-with-css/css/fontawesome.css') !!}
    {!! Html::style('assets/css/bootstrap.min.css') !!}
    {!! Html::script('assets/js/jquery-3.2.1.min.js') !!}
    {!! Html::script('assets/js/bootstrap.min.js') !!}
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    {!! Html::style('css/layout.css') !!}

    <title>@yield('title') - Gafette</title>
</head>
<body>
<div class="fixed-top">
    <header class="topbar">
        <div class="container">
            <div class="row">
                <!-- social icon-->
                <div class="col-sm-12">
                    <ul class="social-network">
                        <li><a class="waves-effect waves-dark" href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a class="waves-effect waves-dark" href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a class="waves-effect waves-dark" href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
        <div class="container">
            <a class="navbar-brand" href="#" style="text-transform: uppercase;"> Gafette</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contactános</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="container">
    @yield('content')
</div>

<footer class="footer-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <h3>Enalces rápidos</h3>
                <div class="info"><a href="#"><i class="fas fa-question-circle fa-2x"></i>	Acerca de...</a></div>
                <div class="info"><a href="#"><i class="fas fa-phone-square fa-2x"></i>	Contactános</a></div>
            </div>
            <div class="col-md-4 col-sm-6"></div>
            <div class="col-md-4 col-sm-6">
                <h3>Desarrolladores de la página</h3>
                <div class="info"><i class="fas fa-male fa-2x"></i> Arnulfito</div>
                <div class="info"><i class="fas fa-male fa-2x" aria-hidden="true"></i> El trapo del Alex</div>
                <div class="info"><i class="fas fa-female fa-2x" aria-hidden="true"></i> Besto waifu Karla bb</div>
            </div>
        </div>
        <div class="copyright">Copyright © Gafette - 2018.</div>
    </div>
</footer>
</body>
</html>