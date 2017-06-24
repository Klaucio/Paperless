@extends('layouts.master')
@section('content')

    <div class="col s12 m12 l6">
        <div class="card">
            <div class="card-content">
                <span class="card-title">Editar Universidade</span><br>
                <div class="row">
                    <form class="col s12" role="form" action="{{route('universidades.update',$universidades->id)}}" method="POST" accept-charset="UTF-8">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="PUT">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="designacao" name="designacao" value="{{$universidades->designacao}}" type="text" class="validate">
                                <label for="designacao">Nome</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="abreviatura" name="abreviatura" value="{{$universidades->abreviatura}}" type="text" class="validate">
                                <label for="abreviatura">Abreviatura</label>
                            </div>
                        </div>
                        <div class="row">
                            <button class="btn waves-effect waves-light right" type="submit" name="action">Gravar
                                <i class="material-icons right">save</i>
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection