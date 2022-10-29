@extends('home.layouts.body')

@section('content')
{{-- {{$dis_posts}} --}}

    <h1>{{ $dis_posts->title }}</h1>
    <img id="card-content-posts" src="{{ asset('/public/img/posts/' . $dis_posts->image_path) }}">
    <br>
    
    @php
        echo $dis_posts->content;
    @endphp
@endsection

