@extends('layouts.master')

@section('content')

    <main class="mn-inner">
        <div class="row">
            <div class="col s12">
                <div class="page-title">Universidades</div>
            </div>

            <a href="{{route('departamentos.create')}}" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons right">add</i></a>

            <div class="col s12 m12 l12">

                <div class="card">
                    <div class="card-content">
                        <table id="example" class="display responsive-table datatable-example">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Abreviatura</th>
                                <th>Accao</th>

                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection