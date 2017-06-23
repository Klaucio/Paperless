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
                            <i class="material-icons">keyboard_arrow_down</i>
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
                <div class="col s12 l8 offset-l2">
                    <div class="center-heading">
                        <h2 class="title">Overview</h2>
                        <span class="center-line red"></span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit<br> sed do eiusmod tempor incididunt</p>
                    </div>
                </div>
            </div>
            <div class="row center">
                <div class="col s12 m6 l3">
                    <div class="card-panel overview-section-box wow fadeIn" data-wow-delay="0.1s">
                        <i class="ion-ios-book trans-effect"></i>
                        <h3>Manuais de Apoio </h3>
                        <p>
                            Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta.
                        </p>
                    </div>
                </div><!-- Col ends -->
                <div class="col s12 m6 l3">
                    <div class="card-panel overview-section-box wow fadeIn" data-wow-delay="0.2s">
                        <i class="ion-help trans-effect"></i>
                        <h3>Exercícios e Dúvidas</h3>
                        <p>
                            Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta.
                        </p>
                    </div>
                </div><!-- Col ends -->
                <div class="col s12 m6 l3">
                    <div class="card-panel overview-section-box wow fadeIn" data-wow-delay="0.3s">
                        <i class="ion-android-list trans-effect"></i>
                        <h3> Sempre Actualizado </h3>
                        <p>
                            Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta.
                        </p>
                    </div>
                </div><!-- Col ends -->
                <div class="col s12 m6 l3">
                    <div class="card-panel overview-section-box wow fadeIn" data-wow-delay="0.4s">
                        <i class="ion-android-star-outline trans-effect"></i>
                        <h3> Siga os Seus Favoritos </h3>
                        <p>
                            Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur. Donec id elit non mi porta.
                        </p>
                    </div>
                </div><!-- Col ends -->
            </div><!-- Row ends -->
        </div><!-- Container ends -->
    </section>
    <!-- #about Section end -->

    <!-- Resume Section start -->
    <section id="resume" class="scroll-section ">
        <section id="skill" class="root-sec white skill-wrap">
            <div class="sec-overlay">
                <div class="container">
                    <div class="row">
                        <div class="clearfix skill-inner">
                            <div class="col s12">
                                <div class="skill-left">
                                    <h2 class="title"> Discipinas </h2>
                                    <p class="regular-text"> Siga as Disciplinas do Seu Interesse.</p>

                                    <ul class="inline-menu col s6 clearfix portfolio-category" id="portfolio-msnry-sort">
                                        <li class="active"><a href="#" data-target="*">Todas</a>
                                        </li>
                                        <li><a href="#" data-target=".category-1">Art</a>
                                        </li>
                                        <li><a href="#" data-target=".category-2">Accessories</a>
                                        </li>
                                        <li><a href="#" data-target=".category-3">Design</a>
                                        </li>
                                        <li><a href="#" data-target=".category-4">Fashion</a></li>
                                    </ul>

                                    <div class="input-field col s6">
                                        <i class="material-icons prefix">search</i>
                                        <input id="icon_prefix" type="text" class="validate">
                                        <label for="icon_prefix">Buscar</label>
                                    </div>
                                </div>
                            </div>

                            <div id="portfolioModal" class="modal white">
                                <div class="model-img"></div>
                                <div class="modal-content">
                                    <h2 class="title">Lorem ipsum dolor sit fugit dolore.</h2>
                                    <p class="m-content">A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior.</p>
                                </div>

                                <div class="modal-footer">

                                </div>
                            </div>

                            <!-- Espaço para Disciplinas -->
                            <div class="portfolio-bottom col s12">
                                <div class="container">
                                    <div class="row">
                                        <div class="col s12">
                                            <ul class="clearfix protfolio-item" id="protfolio-msnry">

                                                <!-- Single Portfolio-->
                                                <li class="single-port-item category-1 category-3">
                                                    <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#"> <!-- Portfolio pop-up content-->
                                                        <div class="protfolio-image">
                                                            <img src="/img/pf1.jpg" alt="portfolio"> <!-- portfolio thumbnail-->
                                                            <div class="protfolio-content waves-effect waves-block waves-light">
                                                                <div class="protfolio-content__inner">
                                                                    <h2 class="p-title">item name</h2>
                                                                </div>
                                                            </div>
                                                            <div class="p-overlay"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <!--/ single portfolio -->

                                                <!-- Single Portfolio-->
                                                <li class="single-port-item category-2 category-1">
                                                    <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                                                        <div class="protfolio-image">
                                                            <img src="/img/pf2.jpg" alt="portfolio">
                                                            <div class="protfolio-content waves-effect waves-block waves-light">
                                                                <div class="protfolio-content__inner">
                                                                    <h2 class="p-title">item name</h2>
                                                                </div>
                                                            </div>
                                                            <div class="p-overlay"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <!--/ single portfolio -->

                                                <!-- Single Portfolio-->
                                                <li class="single-port-item category-1 category-2">
                                                    <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                                                        <div class="protfolio-image">
                                                            <img src="/img/pf3.jpg" alt="portfolio">
                                                            <div class="protfolio-content waves-effect waves-block waves-light">
                                                                <div class="protfolio-content__inner">
                                                                    <h2 class="p-title">item name</h2>
                                                                </div>
                                                            </div>
                                                            <div class="p-overlay"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <!--/ single portfolio -->

                                                <!-- Single Portfolio-->
                                                <li class="single-port-item category-3">
                                                    <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                                                        <div class="protfolio-image">
                                                            <img src="/img/pf4.jpg" alt="portfolio">
                                                            <div class="protfolio-content waves-effect waves-block waves-light">
                                                                <div class="protfolio-content__inner">
                                                                    <h2 class="p-title">item name</h2>
                                                                </div>
                                                            </div>
                                                            <div class="p-overlay"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <!--/ single portfolio -->

                                                <!-- Single Portfolio-->
                                                <li class="single-port-item category-1 category-3 category-4">
                                                    <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                                                        <div class="protfolio-image">
                                                            <img src="/img/pf5.jpg" alt="portfolio">
                                                            <div class="protfolio-content waves-effect waves-block waves-light">
                                                                <div class="protfolio-content__inner">
                                                                    <h2 class="p-title">item name</h2>
                                                                </div>
                                                            </div>
                                                            <div class="p-overlay"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <!--/ single portfolio -->

                                                <!-- Single Portfolio-->
                                                <li class="single-port-item category-2 category-4">
                                                    <a href="#portfolioModal" class="waves-effect waves-block waves-light modal-trigger" data-image-source="http://placehold.it/650x350" data-title="Your awesome portfolio title" data-content="A portfolio is a collection of documents and writing that you assemble in order to demonstrate that you have the appropriate prior." data-demo-link="#">
                                                        <div class="protfolio-image">
                                                            <img src="/img/pf6.jpg" alt="portfolio">
                                                            <div class="protfolio-content waves-effect waves-block waves-light">
                                                                <div class="protfolio-content__inner">
                                                                    <h2 class="p-title">item name</h2>
                                                                </div>
                                                            </div>
                                                            <div class="p-overlay"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <!--/ single portfolio -->

                                            </ul>
                                            <!-- portfolio load more button-->
                                            <a id="portfolio-item-loader" href="#" class="btn-floating btn-large waves-effect waves-light brand-bg"><i class="material-icons">add</i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>





                        </div>
                    </div>
                    <div class="btn-wrapp skl-ctrl">
                        <a class="btn-floating waves-effect waves-light btn-large brand-bg white-text go go-left"><i class="material-icons">keyboard_arrow_left</i></a>
                        <a class="btn-floating waves-effect waves-light btn-large brand-bg white-text go go-right"><i class="material-icons">keyboard_arrow_right</i></a>
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
                                        <h2 class="title"> recomendado para si </h2>
                                        <p class="regular-text">Aliquam lobortis. Maecenas vestibulum mollis diam. Pellentesque auctor neque nec urna. Nulla sit amet est. Aenean posuere tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus.</p>
                                    </div>
                                </div>
                                <div class="col s12">
                                    <div class="overflow-hidden">
                                        <div class="row">
                                            <div id="experienceSlider" class="clearfix card-element-wrapper">
                                                <div class="col s4 cold-xs-12 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                                                    <div class="card">
                                                        <div class="card-image waves-effect waves-block waves-light">
                                                            <h2 class="left-align card-title-top">January 2014 - Present</h2>
                                                            <div class="valign-wrapper card-img-wrap">
                                                                <img class="activator" src="/img/ghost_rider.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="card-content">
                                                            <span class="card-title activator brand-text">UX/UI Designer <i class="material-icons right">more_vert</i></span>
                                                            <p>Apple.inc</p>
                                                        </div>
                                                        <div class="card-reveal">
                                                            <div class="rev-title-wrap">
                                                                <span class="card-title activator brand-text">UX/UI Designer <i class="material-icons right">close</i></i></span>
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
                                                            <span class="card-title activator brand-text">UX/UI Designer<i class="material-icons right">more_vert</i></span>
                                                            <p>Android One</p>
                                                        </div>
                                                        <div class="card-reveal">
                                                            <div class="rev-title-wrap">
                                                                <span class="card-title activator brand-text">UX/UI Designer<i class="material-icons right">close</i></span>
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
                            <a class="btn-floating waves-effect waves-light btn-large white go go-left"><i class="material-icons black-text">keyboard_arrow_left</i></a>
                            <a class="btn-floating waves-effect waves-light btn-large white go go-right"><i class="material-icons black-text">keyboard_arrow_right</i></a>
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
                                <div class="col s12">
                                    <div class="overflow-hidden">
                                        <div class="row">
                                            <div id="educationSlider" class="clearfix card-element-wrapper">

                                                <!-- single education -->
                                                <div class="col s4 single-card-box wow fadeInUpSmall" data-wow-duration=".7s">
                                                    <div class="card">
                                                        <div class="card-image waves-effect waves-block waves-light">
                                                            <h2 class="left-align card-title-top">20011 - 2012</h2>
                                                            <div class="card-img-wrap">
                                                                <img class="activator" src="/img/grad-cap.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="card-content">
                                                            <span class="card-title activator brand-text">Masters of Science<i class="material-icons right">more_vert</i></span>
                                                            <p>Oxford University</p>
                                                        </div>
                                                        <!-- Reveal content-->
                                                        <div class="card-reveal">
                                                            <div class="rev-title-wrap">
                                                                <span class="card-title activator brand-text">Masters of Science<i class="material-icons right">close</i></span>
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
                                                                <img class="activator" src="/img/grad-cap.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="card-content">
                                                            <span class="card-title activator brand-text">Bachelor of Science<i class="material-icons right">more_vert</i></span>
                                                            <p>Oxford University</p>
                                                        </div>
                                                        <div class="card-reveal">
                                                            <div class="rev-title-wrap">
                                                                <span class="card-title activator brand-text">Bachelor of Science<i class="material-icons right">close</i></span>
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
                                                                <img class="activator" src="/img/grad-cap.png" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="card-content">
                                                            <span class="card-title activator brand-text">A Level<i class="material-icons right">more_vert</i></span>
                                                            <p>Oxford College</p>
                                                        </div>
                                                        <div class="card-reveal">
                                                            <div class="rev-title-wrap">
                                                                <span class="card-title activator brand-text">A Level<i class="material-icons right">close</i></span>
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
                                                                <img class="activator" src="/img/grad-cap.png" alt="">
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