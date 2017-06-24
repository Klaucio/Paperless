@extends('layouts.master-client')


@section('title')
    Meu perfil
@endsection

@section('css')
    <style>
        .card-disc {
            margin-top: 5px;
            margin-right: 5px;
        }

        .card-disc .card-title {
            font-weight: 500;
            text-transform: capitalize !important;
        }

        .card-disc .card-action {
            padding: 24px 30px;
            height: 70px;
        }

        .preloader-wrapper.small {
            width: 30px;
            height: 30px;
        }
    </style>
@endsection


@section('content')

    <!-- About Section start -->
    <section id="about" class="scroll-section root-sec padd-tb-60 grey lighten-5 about-wrap">
        <div class="container">
            <div class="row">
                <div class="clearfix about-inner">

                    <div class="col s12 m4">
                        <div class="person-about">
                            <h3 class="about-subtitle">Perfil</h3>
                            <p><b>Intituição de Ensino: </b>{{$user->instituicao->designacao}}</p>
                            <a class="waves-effect waves-light btn-large brand-bg white-text"><i
                                        class="material-icons left">edit</i>Editar Dados</a>
                        </div>
                    </div>
                    <!-- about me description -->

                    <div class="col s12 m4">
                        <div class="person-img wow fadeIn col s12">
                            <img class="z-depth-1" src="/img/avatar-default.png" alt="">
                        </div>

                        <a class="waves-effect waves-light col s12 btn-large brand-bg white-text"><i
                                    class="material-icons left">edit</i>Alterar Avatar</a>
                    </div>
                    <!-- about me image -->

                    <div class="col s12 m4">
                        <div class="person-info">
                            <h3 class="about-subtitle">Dados Pessoais</h3>
                            <h5><span>Nome :</span> {{$user->name}}</h5>
                            <h5><span>Email :</span> {{$user->email}}</h5>
                            <a class="waves-effect waves-light btn-large brand-bg white-text"><i
                                        class="material-icons left">edit</i>Editar Dados</a>
                        </div>

                        <div class="about-social">
                            <ul>
                                <li>
                                    <a href="#" class="btn-floating waves-effect waves-light white"><i
                                                class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-floating waves-effect waves-light white"><i
                                                class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-floating waves-effect waves-light white"><i
                                                class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-floating waves-effect waves-light white"><i
                                                class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="btn-floating waves-effect waves-light white"><i
                                                class="fa fa-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- about me info -->
                </div>

                <div class="col s12 offset-m2" id="searchable-container">

                    <div class="row">
                        <div class="input-field col s12 m6 offset-m1">
                            <i class="material-icons prefix">search</i>
                            <input id="container-search" type="text" class="validate">
                            <label for="icon_prefix">Buscar</label>
                        </div>
                    </div>
                    @foreach($user->disciplinas as $disciplina)
                        <div class="card horizontal card-disc col s12 m4">
                            <div class="card-image">

                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    <a href="#"><span
                                                class="card-title grey-text text-darken-4">{{$disciplina->designacao}}</span></a>
                                    <p>I am a very simple card. I am good at
                                        containing</p>
                                </div>
                                <div class="card-action">
                                    <div>
                                        <a class="btn-unfollow"
                                           data-dsc="{{$disciplina->id}}"
                                           href="#"><i
                                                    class="material-icons left">check_circle</i>Seguindo</a>
                                        <div id="pre{{$disciplina->id}}"
                                             class="preloader-wrapper small active hidden">
                                            <div class="spinner-layer spinner-green-only">
                                                <div class="circle-clipper left">
                                                    <div class="circle"></div>
                                                </div>
                                                <div class="gap-patch">
                                                    <div class="circle"></div>
                                                </div>
                                                <div class="circle-clipper right">
                                                    <div class="circle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- .container end -->
    </section>
    <!-- #about Section end -->

@endsection


@section('js')

    <script>
        $(document).ready(function () {

            $('#searchable-container').searchable({
                searchField: '#container-search',
                selector: '.card-disc',
                childSelector: '.card-stacked',
                show: function (elem) {
                    elem.slideDown(100);
                },
                hide: function (elem) {
                    elem.slideUp(100);
                }
            });

            $('.btn-follow').on('click', function (e) {
                e.preventDefault();

                var $this = $(this);
                $this.addClass('hidden');
                $('#pre' + $this.data('dsc')).removeClass('hidden');

//                alert($this.data('dsc'));

                $.ajax({
                    method: 'POST',
                    url: '/seguir-disciplina',
                    data: {'id': $this.data('dsc'), '_token': $('meta[name="csrf-token"]').attr('content')},
                    success: function (data) {

                        if (data.msg) {
                            $('#pre' + $this.data('dsc')).addClass('hidden');
                            $this.removeClass('hidden');
                            $this.prepend('<i class="material-icons left">check_circle</i>');
                            $this.text("Seguindo");
                        }
                        else if (!data.msg) {
                            window.location.href = '/login'
                        }
                    }
                });


            })

        })
    </script>

@endsection