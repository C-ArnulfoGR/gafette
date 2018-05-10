<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    {!! Html::style('assets/css/fontawesome-free-5.0.6/web-fonts-with-css/css/fontawesome.css') !!}
    {!! Html::style('assets/css/MDB/css/bootstrap.min.css') !!}
    {!! Html::style('assets/css/MDB/css/mdb.min.css') !!}
    {!! Html::script('assets/js/jquery-3.2.1.min.js') !!}
    {!! Html::script('assets/js/popper.min.js') !!}
    {!! Html::script('assets/js/bootstrap.min.js') !!}
    {!! Html::script('assets/css/MDB/js/mdb.min.js') !!}
    {!! Html::script('assets/js/all.js') !!}
    {!! Html::style('css/layout.css') !!}

    <title>@yield('title') - @yield('sitio')</title>
</head>
<body>

    <div class="fixed-top">
        <header class="topbar">
            <div class="container">
                <div class="row">
                    <!-- social icon-->
                    <div class="col-sm-12">
                        <ul class="social-network">
                            <li><a class="waves-effect waves-dark" target="_blank" href="@yield('link_fb')"><i class="fab fa-facebook"></i></a></li>
                            <li><a class="waves-effect waves-dark" target="_blank" href="@yield('link_tw')"><i class="fab fa-twitter"></i></a></li>
                            <li><a class="waves-effect waves-dark" target="_blank" href="@yield('link_yt')"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg navbar-dark mx-background-top-linear">
            <div class="container">
                <h4 class="navbar-brand" href="#" style="text-transform: uppercase;"> @yield('sitio')</h4>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('index') }}">Inicio
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about_us') }}">Acerca de</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact_us') }}">Contactános</a>
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
                            <button type="button" class="btn btn-dark">Enlaces rápidos</button>
                            <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="sr-only">Opciones del menú</span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('about_us') }}"><i class="fas fa-question-circle"></i>  Acerca de...</a>
                                <a class="dropdown-item" href="{{ route('contact_us') }}"><i class="fas fa-phone-square"></i> Contactános</a>
                            </div>
                        </div>          
                    </div>
                    <div class="col-md-4 col-sm-6"></div>
                    <div class="col-md-4 col-sm-6">
                        <div class="btn-group dropup">
                            <button type="button" class="btn btn-dark">Diseñadores del sitio</button>
                            <button type="button" class="btn btn-dark dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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