<!-- resources/views/categories/index.blade.php -->

@extends('layouts.app')  <!-- Assuming you have a layout file, adjust this as needed -->

@section('content')
    <h1>Categories</h1>

    @foreach ($categories as $category)
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
@endsection
