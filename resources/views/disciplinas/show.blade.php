@extends('layouts.master-client')


@section('title')
    Material de {{$disciplina->designacao}}
@endsection

@section('css')
    <style>

    </style>
    @endsection


@section('content')
<!-- Banner start -->
<section id="banner" class="root-sec brand-bg padd-tb-55 single-banner blogpage-banner-wrap">
    <div class="container">
        <div class="row">
            <div class="clearfix blog-banner-text blog-single-banner">
                <div class="col-md-12">
                    <h2 class="title">  </h2>
                    <ul class="clearfix blog-post-meta">
                        </li>
                        <li>Nome da Area</li>
                        <li><a href="#">5 Materiais</a>
                        </li>
                        <li><a href="#">5 Seguidores</a>
                        </li>
                        <li><a href="#">UX Design</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> <!-- ./Banner end -->

@endsection


@section('js')


@endsection
