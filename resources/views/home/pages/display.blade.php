@extends('home.layouts.body')
@section('title'){{ $dis_posts->title }}@endsection

@section('content')
    {{-- {{$dis_posts}} --}}
    <div id="content-items" class="container-fluid ">
        <h1>{{ $dis_posts->title }}</h1>
        <div id="content-img-posts-card" class="rounded-4 text-center">
            <img  
                src="{{ asset('assets/img/offers/' . $dis_posts->image_path) }}" name="{{ $dis_posts->title }}"
                alt="{{ $dis_posts->title }}">
        </div>
        <br>
        <div id="content" name="">
            {!! $dis_posts->content!!}
        </div>
    </div>
@endsection
