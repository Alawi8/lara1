<!doctype html>
<html>
@extends('home.layouts.body')

@section('content')

    <div class="container-fluid ">
        @if (isset($posts))
            <div class="row">
                @foreach ($posts as $post)
                    <div class=" col-xl-4 col-lg-6 col-md-6 col-sm-12 ">
                        <a class="nav-link" href="{{ route('display', $post->id) }}">
                            <div id='card-posts-menu' class="card">
                                <img id="card-posts-menu-img" class="bg-dark"
                                    src="{{ asset('/public/img/offers/' . $post->image_path) }}" class="card-img-top"
                                    alt="{{ $post->title }}">
                                <div class="card-body">
                                </div>
                                <h6>{{ $post->title }}</h6>
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

@endsection

</html>
