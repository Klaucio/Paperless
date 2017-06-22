@extends('layouts.master-client')


@section('tittle')
    Início
    @endsection


@section('content')

    <!-- Home Section start -->
    <section id="home" class="scroll-section root-sec grey lighten-5 home-wrap">
        <div class="sec-overlay">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <div class="home-inner">
                            <div class="center-align home-content">
                                <h1 class="home-title"><span>Paperless</span></h1>
                                <h2 class="home-subtitle"> Nós moldamos nossas ferramentas e, posteriormente, as nossas ferramentas nos moldam. </h2>
                                <a href="#contact" class="hire-me-btn btn waves-effect waves-light btn-large brand-bg white-text regular-text"> Ver Tutorial <i class="mdi-content-send left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .container end -->
            <div class="section-call-to-area">
                <div class="container">
                    <div class="row">
                        <a href="#about" class="btn-floating btn-large button-middle call-to-about section-call-to-btn animated btn-up btn-hidden" data-section="#about">
                            <i class="mdi-navigation-expand-more"></i>
                        </a>
                    </div>
                </div>
                <!-- .container end -->
            </div>
        </div>
    </section>
    <!-- #home Section end -->

    <!-- About Section start -->
    <section id="about" class="scroll-section root-sec padd-tb-60 grey lighten-5 about-wrap">
        <div class="container">
            <div class="row">
                <div class="clearfix about-inner">

                    <div class="col s12 m4">
                        <div class="person-about">
                            <h3 class="about-subtitle">My Story</h3>
                            <p>Hello, I’m a UI/UX Designer &amp; Front End Developer from Victoria, Australia. I hold a master degree of Web Design from the World University. <br />
                                And scrambled it to make a type specimen book. It has survived not only five centuries</p>
                            <a class="waves-effect waves-light btn-large brand-bg white-text"><i class="mdi-content-archive left"></i> Download Resume</a>
                        </div>
                    </div>
                    <!-- about me description -->

                    <div class="col s6 m4">
                        <div class="person-img wow fadeIn">
                            <img class="z-depth-1" src="img/person.jpg" alt="">
                        </div>
                    </div>
                    <!-- about me image -->

                    <div class="col s6 m4">
                        <div class="person-info">
                            <h3 class="about-subtitle">Personal Information</h3>
                            <h5><span>Name :</span> John Doe</h5>
                            <h5><span>Age :</span> 25 Years</h5>
                            <h5><span>Phone :</span> +0123456789</h5>
                            <h5><span>Email :</span> email@domain.com</h5>
                            <h5><span>Address :</span> Dhaka, Bangladesh</h5>
                        </div>

                        <div class="about-social">
                            <ul>
                                <li>
                                    <a href="#" class="btn-floating waves-effect waves-light white"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-floating waves-effect waves-light white"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-floating waves-effect waves-light white"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-floating waves-effect waves-light white"><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-floating waves-effect waves-light white"><i class="fa fa-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- about me info -->

                </div>
            </div>
        </div>
        <!-- .container end -->
    </section>
    <!-- #about Section end -->

    <!-- Resume Section start -->
    <section id="resume" class="scroll-section ">
        <section id="skill" class="root-sec white skill-wrap">
            <div class="sec-overlay">
                <div class="container">
                    <div class="row">
                        <div class="clearfix skill-inner">
                            <div class="col s12 col m3">
                                <div class="skill-left">
                                    <h2 class="title">Titulo 1 </h2>
                                    <p class="regular-text">Man behind the gun, any sophisticated weapons. Human remains that taking the role. We are experienced in utilizing all resources.</p>
                                </div>
                            </div>

                            <!-- Espaço -->

                        </div>
                    </div>
                    <div class="btn-wrapp skl-ctrl">
                        <a class="btn-floating waves-effect waves-light btn-large brand-bg white-text go go-left"><i class="mdi-navigation-chevron-left "></i></a>
                        <a class="btn-floating waves-effect waves-light btn-large brand-bg white-text go go-right"><i class="mdi-navigation-chevron-right "></i></a>
                    </div>
                </div>
            </div>
            <!-- .container end -->
        </section>

        <section id="experience" class="root-sec padd-tb-120 brand-bg experience-wrap">
            <div class="container">
                <div class="row">
                    <div class="experience-inner">
                        <div class="col s12 m10 card-box-wrap">
                            <div class="row">
                                <div class="clearfix section-head experience-text">
                                    <div class="col s12">
                                        <h2 class="title"> titulo 2 </h2>
                                        <p class="regular-text">Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.</p>
                                    </div>
                                </div>
                                <div class="col l12">
                                    <div class="overflow-hidden">
                                        <div class="row">
                                            <div id="experienceSlider" class="clearfix card-element-wrapper">
                                                <div class="col s4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                                                    <div class="card">
                                                        <div class="card-image waves-effect waves-block waves-light">
                                                            <h2 class="left-align card-title-top">January 2014 - Present</h2>
                                                            <div class="valign-wrapper card-img-wrap">
                                                                <img class="activator" src="img/ghost_rider.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="card-content">
                                                            <span class="card-title activator brand-text">UX/UI Designer<i class="mdi-navigation-more-vert right"></i></span>
                                                            <p>Apple.inc</p>
                                                        </div>
                                                        <div class="card-reveal">
                                                            <div class="rev-title-wrap">
                                                                <span class="card-title activator brand-text">UX/UI Designer<i class="mdi-navigation-close right"></i></span>
                                                                <p>Apple.inc</p>
                                                            </div>
                                                            <p class="rev-content">
                                                                Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col s4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                                                    <div class="card">
                                                        <div class="card-image waves-effect waves-block waves-light">
                                                            <h2 class="left-align card-title-top">January 2014 - Present</h2>
                                                            <div class="valign-wrapper card-img-wrap">
                                                                <img class="activator" src="img/lion.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="card-content">
                                                            <span class="card-title activator brand-text">UX/UI Designer<i class="mdi-navigation-more-vert right"></i></span>
                                                            <p>Android One</p>
                                                        </div>
                                                        <div class="card-reveal">
                                                            <div class="rev-title-wrap">
                                                                <span class="card-title activator brand-text">UX/UI Designer<i class="mdi-navigation-close right"></i></span>
                                                                <p>Android One</p>
                                                            </div>
                                                            <p class="rev-content">
                                                                Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col s4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
                                                    <div class="card">
                                                        <div class="card-image waves-effect waves-block waves-light">
                                                            <h2 class="left-align card-title-top">January 2014 - Present</h2>
                                                            <div class="valign-wrapper card-img-wrap">
                                                                <img class="activator" src="img/bull.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="card-content">
                                                            <span class="card-title activator brand-text">UX/UI Designer<i class="mdi-navigation-more-vert right"></i></span>
                                                            <p>Android One</p>
                                                        </div>
                                                        <div class="card-reveal">
                                                            <div class="rev-title-wrap">
                                                                <span class="card-title activator brand-text">UX/UI Designer<i class="mdi-navigation-close right"></i></span>
                                                                <p>Android One</p>
                                                            </div>
                                                            <p class="rev-content">
                                                                Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col s4 cold-xs-12 single-card-box">
                                                    <div class="card">
                                                        <div class="card-image waves-effect waves-block waves-light">
                                                            <h2 class="left-align card-title-top">January 2014 - Present</h2>
                                                            <div class="valign-wrapper card-img-wrap">
                                                                <img class="activator" src="img/beakers.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="card-content">
                                                            <span class="card-title activator brand-text">UX/UI Designer<i class="mdi-navigation-more-vert right"></i></span>
                                                            <p>Windows Phone</p>
                                                        </div>
                                                        <div class="card-reveal">
                                                            <div class="rev-title-wrap">
                                                                <span class="card-title activator brand-text">UX/UI Designer<i class="mdi-navigation-close right"></i></span>
                                                                <p>Windows Phone</p>
                                                            </div>
                                                            <p class="rev-content">
                                                                Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col s4 cold-xs-12 single-card-box">
                                                    <div class="card">
                                                        <div class="card-image waves-effect waves-block waves-light">
                                                            <h2 class="left-align card-title-top">January 2014 - Present</h2>
                                                            <div class="valign-wrapper card-img-wrap">
                                                                <img class="activator" src="img/kid.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="card-content">
                                                            <span class="card-title activator brand-text">UX/UI Designer<i class="mdi-navigation-more-vert right"></i></span>
                                                            <p>Windows Phone</p>
                                                        </div>
                                                        <div class="card-reveal">
                                                            <div class="rev-title-wrap">
                                                                <span class="card-title activator brand-text">UX/UI Designer<i class="mdi-navigation-close right"></i></span>
                                                                <p>Windows Phone</p>
                                                            </div>
                                                            <p class="rev-content">
                                                                Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrapp exp-ctrl">
                            <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="mdi-navigation-chevron-left brand-text"></i></a>
                            <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="mdi-navigation-chevron-right brand-text"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="education" class="root-sec grey lighten-5 padd-tb-120 education-wrap">
            <div class="container">
                <div class="row">
                    <div class="education-inner">
                        <div class="col s12 m10 card-box-wrap">
                            <div class="row">
                                <div class="clearfix section-head education-text">
                                    <div class="col s12">
                                        <h2 class="title"> titulo 3 </h2>
                                        <p class="regular-text">Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.</p>
                                    </div>
                                </div>
                                <div class="col l12">
                                    <div class="overflow-hidden">
                                        <div class="row">
                                            <div id="educationSlider" class="clearfix card-element-wrapper">

                                                <!-- single education -->
                                                <div class="col s4 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                                                    <div class="card">
                                                        <div class="card-image waves-effect waves-block waves-light">
                                                            <h2 class="left-align card-title-top">20011 - 2012</h2>
                                                            <div class="card-img-wrap">
                                                                <img class="activator" src="img/grad-cap.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="card-content">
                                                            <span class="card-title activator brand-text">Masters of Science<i class="mdi-navigation-more-vert right"></i></span>
                                                            <p>Oxford University</p>
                                                        </div>
                                                        <!-- Reveal content-->
                                                        <div class="card-reveal">
                                                            <div class="rev-title-wrap">
                                                                <span class="card-title activator brand-text">Masters of Science<i class="mdi-navigation-close right"></i></span>
                                                                <p>Oxford University</p>
                                                            </div>
                                                            <p class="rev-content">
                                                                Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div> <!-- single education end -->

                                                <!-- single education -->
                                                <div class="col s4 single-card-box wow fadeInUpSmall" data-wow-delay=".2s" data-wow-duration=".7s">
                                                    <div class="card">
                                                        <div class="card-image waves-effect waves-block waves-light">
                                                            <h2 class="left-align card-title-top">2005 - 2007</h2>
                                                            <div class="card-img-wrap">
                                                                <img class="activator" src="img/grad-cap.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="card-content">
                                                            <span class="card-title activator brand-text">Bachelor of Science<i class="mdi-navigation-more-vert right"></i></span>
                                                            <p>Oxford University</p>
                                                        </div>
                                                        <div class="card-reveal">
                                                            <div class="rev-title-wrap">
                                                                <span class="card-title activator brand-text">Bachelor of Science<i class="mdi-navigation-close right"></i></span>
                                                                <p>Oxford University</p>
                                                            </div>
                                                            <p class="rev-content">
                                                                Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div> <!-- single education -->

                                                <!-- single education -->
                                                <div class="col s4 single-card-box wow fadeInUpSmall" data-wow-delay=".4s" data-wow-duration=".7s">
                                                    <div class="card">
                                                        <div class="card-image waves-effect waves-block waves-light">
                                                            <h2 class="left-align card-title-top">2005 - 2007</h2>
                                                            <div class="card-img-wrap">
                                                                <img class="activator" src="img/grad-cap.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="card-content">
                                                            <span class="card-title activator brand-text">A Level<i class="mdi-navigation-more-vert right"></i></span>
                                                            <p>Oxford College</p>
                                                        </div>
                                                        <div class="card-reveal">
                                                            <div class="rev-title-wrap">
                                                                <span class="card-title activator brand-text">A Level<i class="mdi-navigation-close right"></i></span>
                                                                <p>Oxford College</p>
                                                            </div>
                                                            <p class="rev-content">
                                                                Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div> <!-- single education -->

                                                <!-- single education -->
                                                <div class="col s4 single-card-box">
                                                    <div class="card">
                                                        <div class="card-image waves-effect waves-block waves-light">
                                                            <h2 class="left-align card-title-top">1995 - 2005</h2>
                                                            <div class="card-img-wrap">
                                                                <img class="activator" src="img/grad-cap.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="card-content">
                                                            <span class="card-title activator brand-text">O Level<i class="mdi-navigation-more-vert right"></i></span>
                                                            <p>Oxford School</p>
                                                        </div>
                                                        <div class="card-reveal">
                                                            <div class="rev-title-wrap">
                                                                <span class="card-title activator brand-text">O Level<i class="mdi-navigation-close right"></i></span>
                                                                <p>Oxford School</p>
                                                            </div>
                                                            <p class="rev-content">
                                                                Collaboratively initiate collaborative schemas for high-quality communities. Objectively create sticky relationships via team building outsourcing.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div> <!-- single education -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-wrapp edu-ctrl">
                            <a class="btn-floating waves-effect waves-light btn-large brand-bg go go-left"><i class="mdi-navigation-chevron-left"></i></a>
                            <a class="btn-floating waves-effect waves-light btn-large brand-bg go go-right"><i class="mdi-navigation-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- #resume Section end -->

    @endsection


@section('css')



    @endsection


@section('js')


    @endsection