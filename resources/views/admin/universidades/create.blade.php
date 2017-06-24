@extends('layouts.master')

@section('content')
    <div class="row"></div>
    <div class="card">
        <div class="card-content">
            <span class="card-title">Registo de Universidades</span><br>
            <div class="row">
                <div class="input-field col s8">
                    <input id="designacao" type="text" class="validate">
                    <label for="designacao">Nome</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s8">
                    <input id="abreviatura" type="text">
                    <label for="abreviatura">Abreviatura</label>
                </div>
            </div>
        </div>
    </div>
    @endsection