<!DOCTYPE html>
<html dir="ltr" lang="es">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Theme-Paradise" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
    <!-- <link href='fonts/fontawesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'>-->
    <link rel="stylesheet" href="{{asset('fonts/fontawesome/css/font-awesome.min.css')}}">
    <!-- <link href='fonts/icomoon/style.css' rel='stylesheet' type='text/css'>-->
    <link  type='text/css'  rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
    <!--<link href='css/jquery-ui.min.css' rel='stylesheet' type='text/css'>-->
    <link  type='text/css'  rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}">
    <!--<link href='bootstrap/css/bootstrap.min.css' rel='stylesheet' type='text/css'>-->
    <link  type='text/css'  rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <!--<link href='css/animate.css' rel='stylesheet' type='text/css'>-->
    <link  type='text/css'  rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!--<link href='css/swiper.min.css' rel='stylesheet' type='text/css'>-->
    <link  type='text/css'  rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
    <!-- <link href='css/style.css' rel='stylesheet' type='text/css'>-->
    <link  type='text/css'  rel="stylesheet" href="{{asset('css/style.css')}}">

    <title> @yield('titulo')</title>

</head>
<body class="loading">
<h1 class="hidden">Homepage 1</h1>
<div id="preloader-wrapper">
    <div id="preloader"></div>
</div>

<header >
    <div class="container">
        <a href="#" class="logo-link"><img class="logo" src="images/logo.png" alt="Logo"></a>

        <nav class="main-menu clearfix">
            <h2 class="hidden">Main Menu</h2>
            <ul>
                <li class="menu-item">
                    <a href="{{url('/')}}">Inicio</a>
                </li>
                <li class="menu-item">
                    <a href="{{url('/about')}}">Quienes Somos</a>
                </li>

                <li class="menu-item">
                    <a href="{{url('/services')}}">Servicios</a>
                </li>
                <li class="menu-item">
                    <a href="{{url('/contact')}}">Contacto</a>
                </li>
                <li class="menu-item">
                    <a href="{{url('/contact')}}">Ingresar</a>
                </li>
            </ul>
        </nav>

        <div id="menu-toggle">
            <div class="bar first"></div>
            <div class="bar second"></div>
            <div class="bar third"></div>
        </div>
    </div>

    <nav id="mobile-menu">
        <h2 class="hidden">Mobile Navigation Menu</h2>
        <ul>
            <li class="mobile-menu-item">
                <a class="menu-item" href="#">Inicio<i class="toggle-state-icon icon-angle-right"></i></a>
            </li>
            <li class="mobile-menu-item">
                <a class="menu-item" href="about.html">Quienes Somos</a>
            </li>
            <li class="mobile-menu-item">
                <a class="menu-item" href="facilities.html">Servicios</a>
            </li>
            <li class="mobile-menu-item">
                <a class="menu-item" href="contact.html">Contacto</a>
            </li>
            <li class="mobile-menu-item">
                <a class="menu-item" href="contact.html">Ingresar</a>
            </li>
        </ul>
    </nav>
</header>

@yield('contenido')

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h3 class="subtitle"><strong>Links</strong></h3>
                <ul class="site-links">
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Quienes Somos</a></li>
                    <li><a href="#">FAQs</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
            <div class="col-sm-4 text-center">
                <h3 class="subtitle wide"><strong>El Samán Viterbo</strong> Hotel</h3>
                <div class="moon-divider small"></div>
                <p>Carrera 9 #8 - 51 - Viterbo</p>
                <p> <strong>Teléfono: </strong> 869 1136 - <strong>Celular: </strong>(+57) - 313 711 9851</p>
                <p><a href="#">hotelelsamanviterbo@hotmail.com</a></p>
                <div class="moon-divider small"></div>
            </div>
                <div class="social-links text-right">
                    <a class="social-link" href="#"><i class="fa fa-facebook"></i><i class="fa fa-facebook"></i></a>
                    <a class="social-link" href="#"><i class="fa fa-twitter"></i><i class="fa fa-twitter"></i></a>
                    <a class="social-link" href="#"><i class="fa fa-google-plus"></i><i class="fa fa-google-plus"></i></a>
                    <a class="social-link" href="#"><i class="fa fa-pinterest-p"></i><i class="fa fa-pinterest-p"></i></a>
                    <a class="social-link" href="#"><i class="fa fa-instagram"></i><i class="fa fa-instagram"></i></a>
                    <a class="social-link" href="#"><i class="fa fa-youtube"></i><i class="fa fa-youtube"></i></a>
                </div>
        </div>
    </div>
   <!-- <div class="copyright-area">
        <div class="container">
            <p>@2015 The Moon Hotel. Designed with <i class="fa fa-heart"></i></p>
        </div>
    </div>-->
</footer>

<!---<script type="text/javascript" src="js/jquery.js"></script>-->
<script type="text/javascript" src="{{ URL::asset('js/jquery.js')}}"></script>
<!--<script type="text/javascript" src="js/jquery-ui.js"></script>-->
<script type="text/javascript" src="{{ URL::asset('js/jquery-ui.js')}}"></script>
<!--<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>-->
<script type="text/javascript" src="{{ URL::asset('bootstrap/js/bootstrap.min.js')}}"></script>
<!--<script type="text/javascript" src="js/plugins.js"></script>-->
<script type="text/javascript" src="{{ URL::asset('js/plugins.js')}}"></script>
<!--<script type="text/javascript" src="js/functions.js"></script>-->
<script type="text/javascript" src="{{ URL::asset('js/functions.js')}}"></script>
</body>
</html>