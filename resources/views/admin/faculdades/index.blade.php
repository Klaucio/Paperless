@extends('layouts.master')

@section('content')
    <main class="mn-inner">
        <div class="row">
            <div class="col s12">
                <div class="page-title">Faculdades</div>
            </div>
            <a href="{{route('faculdades.create')}}" class="btn-floating btn-small waves-effect waves-light primary right"><i class="material-icons right">add</i></a>


            <div class="col s12 m12 l12">

                <div class="card">
                    <div class="card-content">
                        <table id="example" class="display responsive-table datatable-example">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Abreviatura</th>
                                <th>Universidade</th>
                                <th>Accao</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($faculdades as $faculdade)
                                <tr>
                                    <td>{{$faculdade->designacao}}</td>
                                    <td>{{$faculdade->abreviatura}}</td>
                                    <td>{{$faculdade->instituicao->designacao}}</td>
                                    <td><a href="{{route('universidades.edit',$universidade->id)}}" class="btn-floating btn-tiny waves-effect waves-light green"><i class="material-icons">edit</i></a>  | <a href="/universidades/destroy/{{$universidade->id}}" class="btn-floating btn-tiny waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </main>
@endsection