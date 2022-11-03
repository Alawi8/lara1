<!doctype html>
<html>
@extends('home.layouts.body')

@section('content')

    <body>
        <div class="container">
            @if (isset($posts))
                <div class="row">
                    @foreach ($posts as $post)
                        <div class=" col-xl-4 col-lg-6 col-md-6 col-sm-12 ">
                            <a class="nav-link" href="{{ route('display', $post->id ) }}">
                                <div class="card" style="width: 18rem;">
                                    <img id="card-menu-posts" class="card-img-top rounded-3" src="{{ asset ('/public/img/offers/'. $post->image_path) }}"
                                        class="card-img-top" alt="...">
                                    <div class="card-body">
                                    </div>
                                    <h6>{{ $post->title }}</h6>
                                    <p class="card-text">{{ $post->id }}.</p>
                                    <small class="text-muted">9 mins</small>

                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="alert alert-secondary text-center" role="alert">
                    لم يتم العثور على مقالات
                </div>
            @endif

        </div>

    </body>

    </html>
@endsection
