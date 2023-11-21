@extends('home.layouts.body')
@section('title')
    المقالات
@endsection
@section('content')

    <div class="container-fluid ">

        @if (isset($posts))
            <div class="row">
                @forelse ($posts as $post)
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12 ">
                        <a class="nav-link" href="{{ route('display', $post->title) }}">
                            <div id='card-posts-menu' class="card">
                                <img id="card-posts-menu-img" class="bg-dark legend img-fluid" src="{{ $post->image_path }}"
                                    class="card-img-top" alt="{{ $post->title }}">
                                <div class="card-body">

                                </div>
                                <h6 class="animate__animated animate__bounce">{{ $post->title }}</h6>

                                @include('home.pages.time')
                            </div>
                        </a>
                    </div>
                

                    {{-- @while (true)
                        <p>Im looping forever</p>
                    @endwhile --}}
                @empty
                    <div class="alert alert-secondary text-center" role="alert">
                        لم يتم العثور على مقالات
                    </div>
                @endforelse
            </div>

        @endif
    </div>
@endsection
