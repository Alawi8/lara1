@extends('home.layouts.body')

@section('title'){{ $dis_posts->title }}@endsection
@section('exept'){{ $dis_posts->exept }}@endsection
@section('author'){{ $dis_posts->writer }}@endsection

@section('content')
    <div id="content-items" class="container-fluid">
        <h1 class="my-4">{{ $dis_posts->title }}</h1>

        <div id="content-img-posts-card" class="rounded-4 text-center mb-4">
            <img src="{{ $dis_posts->image_path }}" alt="{{ $dis_posts->title }}" class="img-fluid rounded">
        </div>

        <div id="content" class="mb-4">
            {!! $dis_posts->content !!}
        </div>
    </div>
@endsection
