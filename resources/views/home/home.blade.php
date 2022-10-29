<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>مثال الألبوم · Bootstrap v5.2</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album-rtl/">
    @extends('home.layouts.body')
</head>

@section('content')

    <body>
        <div class="container">
            @if (isset($posts))
                <div class="row">
                    @foreach ($posts as $post)
                        <div class=" col-xl-4 col-lg-6 col-md-6 col-sm-12 ">
                            <a class="nav-link" href="{{ route('display', $post->id ) }}">
                                <div class="card" style=" ">
                                    <img id="card-menu-posts" src="{{ asset ('../../../laravel/storage/img/'. $post->image_path) }}"
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
