<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> @yield('title') - Paperless </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <!-- Favicon-->
    <link rel="shortcut icon" href="/img/favicon.png">

    <!-- Stylesheets -->
    {{--<link rel="stylesheet" href="/css/normalize.css">--}}
    <link rel="stylesheet" href="/font/font-awesome/css/font-awesome.min.css">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified JQuery -->
    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>


    <!-- Compiled and minified Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">

    <!-- Compiled and minified Materialize JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>

    <link rel="stylesheet" href="/css/animate.min.css" media="screen,projection"/>
    <link rel="stylesheet" href="/libs/sweetalert/sweet-alert.css" media="screen,projection"/>

    <link rel="stylesheet" href="/libs/owl-carousel/owl.carousel.css" media="screen,projection"/>
    <link rel="stylesheet" href="/libs/owl-carousel/owl.transitions.css" media="screen,projection"/>
    <link rel="stylesheet" href="/libs/owl-carousel/owl.theme.css" media="screen,projection"/>

    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/responsive.css">

    <!-- Choose your default colors -->
    <link rel="stylesheet" href="/css/colors/color1.css">
    <!-- <link rel="stylesheet" href="/css/colors/color2.css"> -->
    <!-- <link rel="stylesheet" href="/css/colors/color3.css"> -->
    <!-- <link rel="stylesheet" href="/css/colors/color4.css"> -->
    <!-- <link rel="stylesheet" href="/css/colors/color5.css"> -->
    <!-- <link rel="stylesheet" href="/css/colors/color6.css"> -->
    <!-- <link rel="stylesheet" href="/css/colors/color7.css"> -->
    <!-- <link rel="stylesheet" href="/css/colors/color8.css"> -->

    <!--[if lt IE 9]>
    <script src="/js/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

<!-- start option panel -->
<div id="switch">
    <div class="content-switcher">
        <p class="brand-text">Color Options:</p>
        <ul class="header">
            <li><a href="#" onclick="setActiveStyleSheet('color1'); return false;" class="button color switch"
                   style="background-color:#00bcd4"></a></li>
            <li><a href="#" onclick="setActiveStyleSheet('color2'); return false;" class="button color switch"
                   style="background-color:#ff4081"></a></li>
            <li><a href="#" onclick="setActiveStyleSheet('color3'); return false;" class="button color switch"
                   style="background-color:#C043D5"></a></li>
            <li><a href="#" onclick="setActiveStyleSheet('color4'); return false;" class="button color switch"
                   style="background-color:#73D077"></a></li>
            <li><a href="#" onclick="setActiveStyleSheet('color5'); return false;" class="button color switch"
                   style="background-color:#FE7448"></a></li>
            <li><a href="#" onclick="setActiveStyleSheet('color6'); return false;" class="button color switch"
                   style="background-color:#1ABBAC"></a></li>
            <li><a href="#" onclick="setActiveStyleSheet('color7'); return false;" class="button color switch"
                   style="background-color:#EAB82E"></a></li>
            <li><a href="#" onclick="setActiveStyleSheet('color8'); return false;" class="button color switch"
                   style="background-color:#799CAC"></a></li>
        </ul>
        <p class="brand-text">Menu Options:</p>
        <div class="menu-select" title="The menu will display in all devices">
            <input type="radio" id="menu1" name="intelligent-menu">
            <label for="menu1">Fixed</label>
        </div>
        <div class="menu-select" title="The menu will display or hide in all devices depending on scroll">
            <input type="radio" id="menu2" name="intelligent-menu" checked="checked">
            <label for="menu2">Intelligent ( Auto Hide )</label>
        </div>
        <div class="menu-select"
             title="Fixed menu will apply in non-mobile devices and Intelligent menu will apply in mobile devices">
            <input type="radio" id="menu3" name="intelligent-menu">
            <label for="menu3">Mobile Intelligent</label>
        </div>
        <div id="hide">
            <i class="fa fa-times"></i>
        </div>
    </div>
</div>

<div id="show" class="btn-floating waves-effect waves-light btn-large brand-text">
    <i class="fa fa-plus"></i>
</div>


<!-- Preloader -->
<div id="preloader">
    <div class="loader">
        <svg class="circle-loader" height="50" width="50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="6" stroke-miterlimit="10"/>
        </svg>
    </div>
</div><!--preloader end-->

<ul id="dropdown-user" class="dropdown-content" style="margin-top: 65px;">
    <li><a href="{{ route('logout') }}"
           onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </li>
    <li><a href="#!">Perfil</a></li>
    <li ><a href="#!">Configuções</a></li>
</ul>




<ul class="side-nav" id="mobile-demo">
    <li class="user-area">
        <div class="userView">
            <div class="background">
                <img class="responsive-img" style="" src="/img/ponte-ane.jpg">
            </div>
            <a href="#!user"><i class="material-icons large black-text">account_circle</i></a>
            <a href="#!name"><span class="name blue-text"> Nome do User </span></a>
        </div>
    </li>
    <li class="pesquisar">
        <nav class="white">
            <div class="nav-wrapper">
                <form>
                    <div class="input-field">
                        <input id="search" type="search" required>
                        <label class="label-icon" for="search"><i class="material-icons black-text">search</i></label>
                        <i class="material-icons">close</i>
                    </div>
                </form>
            </div>
        </nav>
    </li>
    <li><a href="{{url('/home')}}" class="waves-effect black-text"><i class="material-icons">home</i>Inicio</a></li>
    <li>
        <div class="divider"></div>
    </li>
</ul>

<div class="navbar-fixed">
    <nav class="nav green darken-3">
        <div class="nav-wrapper">
            <a href="{{url('/home')}}" class="brand-logo">
                <img class="responsive-img circle" src="/img/logo.png">
            </a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
                <li><a class="dropdown-button" href="#!"><i class="material-icons">notifications</i></a></li>
                <li><a class="dropdown-button" href="#!" data-activates="dropdown-user"><i class="medium material-icons left">account_circle</i> nome do user<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>

        </div>
    </nav>
</div>

<!-- Main Container -->
<main id="app" class="main-section">

    <div>
        @yield('content')
    </div>

    <!-- Footer Section end -->
    <footer id="footer" class="root-sec white root-sec footer-wrap">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="clearfix footer-inner">
                        <ul class="left social-icons">
                            <li><a href="#" class="tooltips tooltipped facebook" data-position="top" data-delay="50"
                                   data-tooltip="Facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#" class="tooltips tooltipped linkedin" data-position="top" data-delay="50"
                                   data-tooltip="Linkdin"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li><a href="#" class="tooltips tooltipped twitter" data-position="top" data-delay="50"
                                   data-tooltip="Twitter"><i class="fa fa-twitter"></i></a>
                            </li>
                        </ul> <!-- ./social icons end -->
                        <div class="right copyright">
                            <p>Paperless &copy; 2017 Todos Os Direitos Reservados</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- ./container end-->
    </footer>
    <!-- #footer end -->
</main>
<!-- Main Container end-->


<!-- JavaScripts -->
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/detectmobilebrowser.js"></script>
<script src="/js/isotope.pkgd.min.js"></script>
<script src="/js/wow.min.js"></script>
<script src="/js/jquery.waypoints.min.js"></script>
<script src="/js/jquery.counterup.min.js"></script>
<script src="/js/jquery.nicescroll.min.js"></script>
<script src="/libs/owl-carousel/owl.carousel.min.js"></script>
<script src="/libs/jwplayer/jwplayer.js"></script>
<script src="/libs/sweetalert/sweet-alert.min.js"></script>
<script src="/js/common.js"></script>
<script src="/js/main.js"></script>
</body>
</html>