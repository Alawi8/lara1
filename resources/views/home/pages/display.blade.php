@extends('home.layouts.body')
@section('title')
    <title name="{{ $dis_posts->title }}">{{ $dis_posts->title }}</title>
@endsection

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
        <div id="content">
            @php
                echo $dis_posts->content;
            @endphp
        </div>
    </div>
@endsection
