@extends('layouts.master-client')


@section('title')
    Criar Conta
@endsection

@section('css')
    <style>
        #register-secion {
            margin-top: 200px;
            margin-bottom: 200px;
        }

        .preloader-wrapper {
            margin-left: 50%;
        }
    </style>
@endsection

@section('content')
    <div class="container" id="register-secion">
        <div class="row">

            <div class="preloader-wrapper big active hidden">
                <div class="spinner-layer spinner-blue-only">
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

            <div class="col s12 m8 offset-m2" id="form-section">
                <div class="card z-depth-5">
                    <div class="card-content">
                        <span class="card-title center-align">Criar Conta</span>
                        <form class="form-horizontal" id="form-criar-conta">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nome</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name"
                                           value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">Endereço de E-Mail</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email"
                                           value="{{ old('email') }}" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="input-field col s12">
                                <select id="instituicao" name="instituicao_id" required class="validate" required>
                                    <option value="" disabled selected>Selecione uma opcão</option>
                                </select>
                                <label>Instituição de Ensino Superior</label>


                            </div>


                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirmar Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <a href="#" id="registar-user" class="btn btn-primary">
                                        Registar
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('js')
    <script>
        $(document).ready(function () {


            $.ajax({
                method: 'GET',
                url: '/instituicoes',
                accept: 'json',
                success: function (data) {

                    if (data.instituicoes) {
                        for (var i = 0; i < data.instituicoes.length; i++) {

                            $('#instituicao').append('<option value="' + data.instituicoes[i].id + '">' + data.instituicoes[i].designacao + '</option>')
                        }

                        $('#instituicao').trigger('contentChanged');
                    }
                    else {
                        alert('erro')

                    }
                }
            });


            $('#registar-user').on('click', function (e) {
                e.preventDefault();

                $('#form-section').addClass('hidden');
                $('.preloader-wrapper').removeClass('hidden');

                var dados = $('#form-criar-conta').serialize() + "&_token=" + $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    method: 'Post',
                    url: '/criar-conta',
                    enctype: 'multipart/form-data',
                    data: dados,
                    success: function (data) {

                        if (data.msg) {
                            $('.preloader-wrapper').addClass('hidden');


                            swal({
                                type: 'success',
                                title: 'Conta Criada com sucesso!',
                                text: '',
                                timer: 3000
                            }).then(
                                    function () {},
                                    // handling the promise rejection
                                    function (dismiss) {
                                        if (dismiss === 'timer') {
                                            window.location.href = '/';
                                        }
                                    });

                        }
                        else {
                            alert('erro')

                        }
                    }
                });

            })


        });
    </script>

@endsection
