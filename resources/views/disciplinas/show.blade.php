@extends('layouts.master-client')


@section('title')
    Material de {{$disciplina->designacao}}
@endsection

@section('css')
    <style>
        .blogpage-banner-wrap {
            margin-bottom: 30px;
        }

        .blog-post-meta {
            padding: 5px 0;
        }

        .single-banner .title {
            margin-bottom: 7px;
        }

        .single-banner .title {
            font-size: 30px;
            margin-bottom: 20px;
            line-height: 1.2;
        }


        .single-banner {}


        .blog-post-meta {
            padding: 5px 0;
        }


        .blog-post-meta a,
        .blog-post-meta span {
            color: #fff;
            font-size: 14px;
            display: inline-block;
        }

        footer {
            margin-top: 100px;
        }
    </style>
    @endsection


@section('content')
<!-- Banner start -->
<section id="banner" class="root-sec brand-bg padd-tb-55 single-banner blogpage-banner-wrap">
    <div class="container">
        <div class="row">
            <div class="clearfix blog-banner-text blog-single-banner">
                <div class="col-md-12">
                    <h2 class="title"> {{$disciplina->designacao}} </h2>
                    <ul class="clearfix blog-post-meta">
                        </li>
                        <li> {{$disciplina->area->designacao}}</li>
                        <li><a href="#">{{count($disciplina->materiais)}} Materiais</a>
                        </li>
                        <li><a href="#">{{count($disciplina->seguidores)}} Seguidores</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> <!-- ./Banner end -->


<div class="container" id="searchable-container">

    <div class="row">
        <div class="input-field col s12 m6 offset-m1">
            <i class="material-icons prefix">search</i>
            <input id="container-search" type="text" class="validate">
            <label for="icon_prefix">Buscar</label>
        </div>
    </div>
    @foreach($disciplina->materiais as $material)
        <div class="card horizontal card-disc col s12 m4">
            <div class="card-image">

            </div>
            <div class="card-stacked">
                <div class="card-content">
                    <a href="/material/{{$material->id}}"><span
                                class="card-title grey-text text-darken-4">{{$material->pivot->titulo}}</span></a>
                    {{--<p> {{$material->pivot->descricao}} </p>--}}
                    <p> {{$material->pivot->created_at->diffForHumans()}} </p>
                </div>
                <div class="card-action">
                    <div>
                        <a class="btn-see"
                           data-dsc="{{$material->id}}"
                           href="/material/{{$material->id}}"><i
                                    class="material-icons left">remove_red_eye</i>Visualizar</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection


@section('js')


@endsection
