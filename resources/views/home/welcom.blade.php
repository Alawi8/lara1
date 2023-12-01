@extends('home.layouts.body')
@section('title')
    المقالات
@endsection
@section('content')
    <div class="container-fluid">

        @if (isset($all_posts))
            <div class="row">
                @forelse ($all_posts as $post)
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <a class="nav-link" href="{{ route('display', $post->title) }}">
                            <div id='card-posts-menu' class="card animate__animated animate__bounce">
                                <img id="card-posts-menu-img" class="bg-dark legend img-fluid" src="{{ $post->image_path }}"
                                    class="card-img-top" alt="{{ $post->title }}">
                                <div class="card-body">
                                    <h6>{{ $post->title }}</h6>
                                    @include('home.components.pages.time')
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-secondary text-center" role="alert">
                            لم يتم العثور على مقالات
                        </div>
                    </div>
                @endforelse
                <div class="d-flex justify-content-center">
                    {{-- {{ $all_posts->links() }} --}}
                </div>
            </div>
            @if (isset($categuries))
                @foreach ($categuries as $category)
                    <div>
                        <h2>{{ $category->name }}</h2>

                        @if ($category->posts->count() > 0)
                            <ul>
                                @foreach ($category->posts as $post)
                                    <li>{{ $post->title }}</li>
                                @endforeach
                            </ul>
                        @else
                            <p>No posts in this category.</p>
                            @endif
                        </div>
                        @endforeach
                        @else
                        <p>No category.</p>
            @endif
        @endif




    </div>
    <!-- resources/views/categories/index.blade.php -->

@endsection
