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
    <link type="text/css" rel="stylesheet" href="assets/plugins/materialize/css/materialize.min.css"/>
    <script src="{{ url('quickadmin/js') }}/bootstrap.min.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="assets/plugins/metrojs/MetroJs.min.css" rel="stylesheet">
    <link href="assets/plugins/weather-icons-master/css/weather-icons.min.css" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="assets/css/alpha.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>




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
                <span class="chapter-title">Alpha</span>
            </div>
            <form class="left search col s6 hide-on-small-and-down">
                <div class="input-field">
                    <input id="search" type="search" placeholder="Search" autocomplete="off">
                    <label for="search"><i class="material-icons search-icon">search</i></label>
                </div>
                <a href="javascript: void(0)" class="close-search"><i class="material-icons">close</i></a>
            </form>
            <ul class="right col s9 m3 nav-right-menu">
                <li><a href="javascript:void(0)" data-activates="chat-sidebar" class="chat-button show-on-large"><i class="material-icons">more_vert</i></a></li>
                <li class="hide-on-small-and-down"><a href="javascript:void(0)" data-activates="dropdown1" class="dropdown-button dropdown-right show-on-large"><i class="material-icons">notifications_none</i><span class="badge">4</span></a></li>
                <li class="hide-on-med-and-up"><a href="javascript:void(0)" class="search-toggle"><i class="material-icons">search</i></a></li>
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
                            <img src="assets/images/profile-image-1.png" alt="" class="circle responsive-img z-depth-1">
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
                            <img src="assets/images/profile-image-3.jpg" alt="" class="circle responsive-img z-depth-1">
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
                            <img src="assets/images/profile-image.png" alt="" class="circle responsive-img z-depth-1">
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

<div class="container">
@yield('content')

</div>


<aside id="slide-out" class="side-nav white fixed">
    <div class="side-nav-wrapper">
        <div class="sidebar-profile">
            <div class="sidebar-profile-image">
                <img src="assets/images/profile-image.png" class="circle" alt="">
            </div>
            <div class="sidebar-profile-info">
                <a href="javascript:void(0);" class="account-settings-link">
                    <p>David Doe</p>
                    <span>david@gmail.com<i class="material-icons right">arrow_drop_down</i></span>
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
            <li class="no-padding active"><a class="waves-effect waves-grey active" href="index-2.html"><i class="material-icons">settings_input_svideo</i>Dashboard</a></li>
            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">apps</i>Apps<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li><a href="search.html">Search</a></li>
                        <li><a href="todo.html">Todo</a></li>
                    </ul>
                </div>
            </li>


            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">mode_edit</i>Forms<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="form-elements.html">Form Elements</a></li>
                        <li><a href="form-wizard.html">Form Wizard</a></li>
                        <li><a href="form-upload.html">File Upload</a></li>
                        <li><a href="form-image-crop.html">Image Crop</a></li>
                        <li><a href="form-image-zoom.html">Image Zoom</a></li>
                        <li><a href="form-input-mask.html">Input Mask</a></li>
                        <li><a href="form-select2.html">Select2</a></li>
                    </ul>
                </div>
            </li>


            <li class="no-padding">
                <a class="collapsible-header waves-effect waves-grey"><i class="material-icons">tag_faces</i>Extra Pages<i class="nav-drop-icon material-icons">keyboard_arrow_right</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="404.html">404 Page</a></li>
                        <li><a href="500.html">500 Page</a></li>
                        <li><a href="invoice.html">Invoice</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="sign-in.html">Sign In</a></li>
                        <li><a href="sign-up.html">Sign Up</a></li>
                        <li><a href="lock-screen.html">Lock Screen</a></li>
                        <li><a href="pattern-lock-screen.html">Pattern Lock Screen</a></li>
                        <li><a href="forgot.html">Forgot Password</a></li>
                        <li><a href="pricing-tables.html">Pricing Tables</a></li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="timeline.html">Timeline</a></li>
                        <li><a href="calendar.html">Calendar</a></li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
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
<script src="assets/plugins/jquery/jquery-2.2.0.min.js"></script>
<script src="assets/plugins/materialize/js/materialize.min.js"></script>
<script src="assets/plugins/material-preloader/js/materialPreloader.min.js"></script>
<script src="assets/plugins/jquery-blockui/jquery.blockui.js"></script>
<script src="assets/plugins/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/plugins/counter-up-master/jquery.counterup.min.js"></script>
<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="assets/plugins/chart.js/chart.min.js"></script>
<script src="assets/plugins/flot/jquery.flot.min.js"></script>
<script src="assets/plugins/flot/jquery.flot.time.min.js"></script>
<script src="assets/plugins/flot/jquery.flot.symbol.min.js"></script>
<script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
<script src="assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script src="assets/plugins/curvedlines/curvedLines.js"></script>
<script src="assets/plugins/peity/jquery.peity.min.js"></script>
<script src="assets/js/alpha.min.js"></script>
<script src="assets/js/pages/dashboard.js"></script>

</body>

</html>