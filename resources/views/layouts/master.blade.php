<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from steelcoders.com/alpha/v1.2/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Jun 2017 13:10:55 GMT -->
<head>

    <!-- Title -->
    <title>Iboot | Paperless</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta charset="UTF-8">
    <meta name="description" content="Responsive Admin Dashboard Template" />
    <meta name="keywords" content="admin,dashboard" />
    <meta name="author" content="Steelcoders" />

    <!-- Styles -->
    {{--<link type="text/css" rel="stylesheet" href="{{'assets/plugins/materialize/css'}}/materialize.min.css"/>--}}
    {{--<link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css"/>--}}
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {{--<link href="{{'css'}}/MetroJs.min.css" rel="stylesheet">--}}
    {{--<link href="{{'css'}}/weather-icons.min.css" rel="stylesheet">--}}
    <link href="/css/materialize.min.css" rel="stylesheet">
    <link href="/css/materialPreloader.min.css" rel="stylesheet" type="text/css"/>
    <link href="/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>

    <!-- Theme Styles -->
    <link href="/css/alpha.min.css" rel="stylesheet" type="text/css"/>
    {{--<link href="{{'css'}}/custom.css" rel="stylesheet" type="text/css"/>--}}


</head>
<body>

<!-- <div class="mn-content fixed-sidebar"> -->
<header class="mn-header navbar-fixed">
    <nav class="cyan darken-1">
        <div class="nav-wrapper row">
            <section class="material-design-hamburger navigation-toggle">
                <a href="javascript:void(0)" data-activates="slide-out" class="button-collapse show-on-large material-design-hamburger__icon">
                    <span class="material-design-hamburger__layer"></span>
                </a>
            </section>
            <div class="header-title col s3 m3">
                <span class="chapter-title">Iboot | Paperless</span>
            </div>
            <form class="left search col s6 hide-on-small-and-down">
                <div class="input-field">
                    <input id="search" type="search" placeholder="procurar..." autocomplete="off">
                    <label for="search"><i class="material-icons search-icon">search</i></label>
                </div>
                <a href="javascript: void(0)" class="close-search"><i class="material-icons">fechar</i></a>
            </form>
            <ul class="right col s9 m3 nav-right-menu">
                <li><a href="javascript:void(0)" data-activates="chat-sidebar" class="chat-button show-on-large"><i class="material-icons">more_vert</i></a></li>
                <li class="hide-on-small-and-down"><a href="javascript:void(0)" data-activates="dropdown1" class="dropdown-button dropdown-right show-on-large"><i class="material-icons">notifications_none</i><span class="badge">4</span></a></li>
                <li class="hide-on-med-and-up"><a href="javascript:void(0)" class="search-toggle"><i class="material-icons">procurar...</i></a></li>
            </ul>

            <ul id="dropdown1" class="dropdown-content notifications-dropdown">
                <li class="notificatoins-dropdown-container">
                    <ul>
                        <li class="notification-drop-title">Today</li>
                        <li>
                            <a href="#!">
                                <div class="notification">
                                    <div class="notification-icon circle cyan"><i class="material-icons">done</i></div>
                                    <div class="notification-text"><p><b>Alan Grey</b> uploaded new theme</p><span>7 min ago</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <div class="notification">
                                    <div class="notification-icon circle deep-purple"><i class="material-icons">cached</i></div>
                                    <div class="notification-text"><p><b>Tom</b> updated status</p><span>14 min ago</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <div class="notification">
                                    <div class="notification-icon circle red"><i class="material-icons">delete</i></div>
                                    <div class="notification-text"><p><b>Amily Lee</b> deleted account</p><span>28 min ago</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <div class="notification">
                                    <div class="notification-icon circle cyan"><i class="material-icons">person_add</i></div>
                                    <div class="notification-text"><p><b>Tom Simpson</b> registered</p><span>2 hrs ago</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <div class="notification">
                                    <div class="notification-icon circle green"><i class="material-icons">file_upload</i></div>
                                    <div class="notification-text"><p>Finished uploading files</p><span>4 hrs ago</span></div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-drop-title">Yestarday</li>
                        <li>
                            <a href="#!">
                                <div class="notification">
                                    <div class="notification-icon circle green"><i class="material-icons">security</i></div>
                                    <div class="notification-text"><p>Security issues fixed</p><span>16 hrs ago</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <div class="notification">
                                    <div class="notification-icon circle indigo"><i class="material-icons">file_download</i></div>
                                    <div class="notification-text"><p>Finished downloading files</p><span>22 hrs ago</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#!">
                                <div class="notification">
                                    <div class="notification-icon circle cyan"><i class="material-icons">code</i></div>
                                    <div class="notification-text"><p>Code changes were saved</p><span>1 day ago</span></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>


        </div>
    </nav>
</header>
<div class="search-results">
    <div class="container search-container">
        <div class="row">
            <div class="col s12 search-head">
                <div class="row">
                    <div class="col s12">
                        <div class="left">
                            <p class="search-results-title">Quick search results</p>
                            <p class="search-filter left">
                                <input type="checkbox" class="filled-in" id="filled-in-box" checked/>
                                <label for="filled-in-box">Google search</label>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="res-not-found">No results found</div>
            </div>
            <div class="col s12 m4 search-result-container">
                <div class="card card-transparent">
                    <div class="row valign-wrapper">
                        <div class="col s3">
                            <img src="{{url('img')}}/profile-image-1.png" alt="" class="circle responsive-img z-depth-1">
                        </div>
                        <div class="col s9">
                                        <span class="search-result-text">
                                            Search <span class="search-text search-result-highlight"></span><br><span class="secondary-search-text">Last active 2 days ago</span>
                                        </span>
                        </div>
                    </div>
                </div>
                <div class="card card-transparent">
                    <div class="row valign-wrapper">
                        <div class="col s3">
                            <img src="{{url('img')}}/profile-image-3.jpg" alt="" class="circle responsive-img z-depth-1">
                        </div>
                        <div class="col s9">
                                        <span class="search-result-text">
                                            News about <span class="search-text search-result-highlight"></span><br><span class="secondary-search-text">23 Blogs</span>
                                        </span>
                        </div>
                    </div>
                </div>
                <div class="card card-transparent">
                    <div class="row valign-wrapper">
                        <div class="col s3">
                            <img src="{{url('img')}}/profile-image.png" alt="" class="circle responsive-img z-depth-1">
                        </div>
                        <div class="col s9">
                                        <span class="search-result-text">
                                            Tom King (Works at <span class="search-text search-result-highlight"></span>)<br><span class="secondary-search-text">Avaible for freelance work</span>
                                        </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 search-result-container">
                <div class="card card-transparent ">
                    <div class="row valign-wrapper">
                        <div class="col s3">
                            <span class="z-depth-1 circle search-circle indigo lighten-1">F</span>
                        </div>
                        <div class="col s9">
                                        <span class="search-result-text">
                                            <span class="search-text search-result-highlight"></span> on Facebook<br><span class="secondary-search-text"><a href="#">View website</a></span>
                                        </span>
                        </div>
                    </div>
                </div>
                <div class="card card-transparent">
                    <div class="row valign-wrapper">
                        <div class="col s3">
                            <span class="z-depth-1 circle search-circle light-blue lighten-1">T</span>
                        </div>
                        <div class="col s9">
                                        <span class="search-result-text">
                                            <span class="search-text search-result-highlight"></span> on Twitter<br><span class="secondary-search-text"><a href="#">View website</a></span>
                                        </span>
                        </div>
                    </div>
                </div>
                <div class="card card-transparent">
                    <div class="row valign-wrapper">
                        <div class="col s3">
                            <span class="z-depth-1 circle search-circle red darken-1">G</span>
                        </div>
                        <div class="col s9">
                                        <span class="search-result-text">
                                            Google+ <span class="search-text search-result-highlight"></span><br><span class="secondary-search-text"><a href="#">View website</a></span>
                                        </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 search-result-container">
                <div class="card card-transparent">
                    <div class="card-content first">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sunt in culpa qui<span class="search-text search-result-highlight"></span> quis.</p>
                    </div>
                    <div class="card-action">
                        <span class="grey-text">Yesterday, 4:56 PM</span>
                    </div>
                </div>
                <div class="card card-transparent">
                    <div class="card-content">
                        <p>Sunt in culpa qui <span class="search-text search-result-highlight"></span> officia deserunt mollit anim id est laborum. officia deserunt mollit anim id est laborum officia deserunt mollit anim</p>
                    </div>
                    <div class="card-action">
                        <span class="grey-text">27 January 2016</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--<div class="col s10 m10 16">--}}
    {{--@yield('content')--}}
{{--</div>--}}

<div class="container">
@yield('content')

</div>



<aside id="slide-out" class="side-nav white fixed">
    <div class="side-nav-wrapper">
        <div class="sidebar-profile">
            <div class="sidebar-profile-image">
                <img src="{{url('img')}}/profile-image.png" class="circle" alt="">
            </div>
            <div class="sidebar-profile-info">
                <a href="javascript:void(0);" class="account-settings-link">
                    <p>Frankstein</p>
                    <span>frankstein@gmail.com<i class="material-icons right">arrow_drop_down</i></span>
                </a>
            </div>
        </div>
        <div class="sidebar-account-settings">
            <ul>
                <li class="no-padding">
                    <a class="waves-effect waves-grey"><i class="material-icons">mail_outline</i>Inbox</a>
                </li>
                <li class="no-padding">
                    <a class="waves-effect waves-grey"><i class="material-icons">star_border</i>Starred<span class="new badge">18</span></a>
                </li>
                <li class="no-padding">
                    <a class="waves-effect waves-grey"><i class="material-icons">done</i>Sent Mail</a>
                </li>
                <li class="no-padding">
                    <a class="waves-effect waves-grey"><i class="material-icons">history</i>History<span class="new grey lighten-1 badge">3 new</span></a>
                </li>
                <li class="divider"></li>
                <li class="no-padding">
                    <a class="waves-effect waves-grey"><i class="material-icons">exit_to_app</i>Sign Out</a>
                </li>
            </ul>
        </div>
        <ul class="sidebar-menu collapsible collapsible-accordion" data-collapsible="accordion">
            <li class="no-padding active"><a class="waves-effect waves-grey active" href="{{url('admin')}}"><i class="material-icons">home</i>Dashboard</a></li>
            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">school</i>Instituicao<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="{{url('universidades')}}">Universidades</a></li>
                        <li><a href="{{url('faculdades')}}">Faculdades</a></li>
                        <li><a href="{{url('departamentos')}}">Departamentos</a></li>
                        <li><a href="{{url('cursos')}}">Cursos</a></li>
                    </ul>
                </div>
            </li>


            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">account_circle</i>Utilizadores<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="form-elements.html">Roles</a></li>
                        <li><a href="{{url('users')}}">Utilizadores</a></li>

                    </ul>
                </div>
            </li>

        </ul>
        <div class="footer">
            <p class="copyright">FuturoDigital ©</p>
            <a href="#!">Privacy</a> &amp; <a href="#!">Terms</a>
        </div>
    </div>
</aside>

<div class="left-sidebar-hover"></div>


<!-- Javascripts -->
{{--<script src="{{ url('js')}}/jquery-2.2.0.min.js"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/js/materialize.min.js"></script>
{{--<script src="{{ url('js')}}/materialize.min.js"></script>--}}
{{--<script src="{{ url('js')}}/materialPreloader.min.js"></script>--}}
{{--<script src="{{ url('js')}}/jquery.blockui.js"></script>--}}
{{--<script src="{{ url('js')}}/jquery.waypoints.min.js"></script>--}}
{{--<script src="{{ url('js')}}/jquery.counterup.min.js"></script>--}}
{{--<script src="{{ url('js')}}/jquery.sparkline.min.js"></script>--}}
{{--<script src="{{ url('js')}}/chart.min.js"></script>--}}
{{--<script src="{{ url('js')}}/jquery.flot.min.js"></script>--}}
{{--<script src="{{ url('js')}}/jquery.flot.time.min.js"></script>--}}
{{--<script src="{{ url('js')}}/jquery.flot.symbol.min.js"></script>--}}
{{--<script src="{{ url('js')}}/jquery.flot.resize.min.js"></script>--}}
{{--<script src="{{ url('js')}}/jquery.flot.tooltip.min.js"></script>--}}
{{--<script src="{{ url('js')}}/curvedLines.js"></script>--}}
{{--<script src="{{ url('js')}}/jquery.peity.min.js"></script>--}}
<script src="/js/alpha.min.js"></script>
<script src="/js//dashboard.js"></script>
<script src="/js//jquery.dataTables.min.js"></script>
<script src="/js//table-data.js"></script>
</body>

</html>