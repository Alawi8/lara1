@extends('home.layouts.body')
@section('style')
    <style>
        h1 {
            font-size: 19px;
        }
    </style>
@endsection
@section('content')
    <div>
        <div class="row">
            @if (isset($categories))
                @foreach ($categories as $category)
                    <div class="col-md-4 mb-4">
                        <a href="{{ route('categories.show', $category->id) }}" class="nav-link">
                        <!-- Jumbotron -->
                        <div class="bg-image p-5 text-center shadow-1-strong rounded mb-5 text-white"
                            style="background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/003.webp');">
                            <h1 class="mb-3 h2">{{ $category->name }}</h1>
                            <p>
                                {{ Str::limit($category->title, 110) }}
                            </p>
                            <span class="badge bg-primary rounded-pill">{{$category->posts->count()}}</span>
                        </div>
                    </a>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
