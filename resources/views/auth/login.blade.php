@extends('layouts.master-client')


@section('title')
    Login
@endsection

@section('css')
    <style>
        #login-secion {
            margin-top: 200px;
            margin-bottom: 200px;
        }
    </style>
    @endsection

@section('content')
<div class="container" id="login-secion">
    <div class="row">
        <div class="col s12 m8 offset-m2">
            <div class="card z-depth-5">
                <div class="card-content">
                    <span class="card-title center-align">Login</span>


                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col s12">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                           <strong class="red-text">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="input-field col s12">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                <label for="email">E-Mail</label>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col s12">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong class="red-text">{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="input-field col s12">
                                <input id="password" type="password" class="form-control" name="password" required>
                                <label for="password">Password</label>
                            </div>
                        </div>
                    <!--
                        <div class="input-field col s12">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                                </label>
                            </div>
                        </div>
                        -->

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="" href="{{ url('/password/reset') }}">Esqueceu a sua senha?</a>
                                <p>
                                    Não possui conta?<a class="" href="{{ url('/register') }}"> Criar conta</a>
                                </p>

                            </div>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
