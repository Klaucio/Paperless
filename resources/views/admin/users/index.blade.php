@extends('layouts.master')

@section('content')

    <main class="mn-inner">
        <div class="row">
            <div class="col s12">
                <div class="page-title">Utilizadores</div>
            </div>
            <a href="{{route('users.create')}}" class="btn-floating btn-small waves-effect waves-light primary right"><i class="material-icons right">add</i></a>


            <div class="col s12 m12 l12">

                <div class="card">
                    <div class="card-content">
                        <table id="example" class="display responsive-table datatable-example">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Tipo</th>
                                <th>Universidade</th>
                                <th>Estado</th>
                                <th>Accao</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->tipo}}</td>
                                <td>{{$user->instituicao->designacao}}</td>
                                <td>{{$user->estado}}</td>
                                <td><a href="{{route('users.edit',$user->id)}}" class="btn-floating btn-tiny waves-effect waves-light green"><i class="material-icons">edit</i></a>  | <a href="{{route('users.destroy',$user->id)}}" class="btn-floating btn-tiny waves-effect waves-light red"><i class="material-icons">delete</i></a></td>
                            </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection