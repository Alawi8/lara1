@extends('home.layouts.body')
@section('title')
<title name="{{$dis_posts->title}}" >{{$dis_posts->title}}</title>
@endsection

@section('content')
    {{-- {{$dis_posts}} --}}
    <div class="container-fluid">
        <h1>{{ $dis_posts->title }}</h1>
        <img id="content-img-posts-card" class="card-img-top rounded-3 text-center"
            src="{{ asset('assets/img/offers/' . $dis_posts->image_path) }}"
            name="{{ $dis_posts->title }}"
            alt="{{$dis_posts->title}}"
            >
        <br>
        <div id="content">
            @php
                echo $dis_posts->content;
            @endphp
        </div>

    </div>
@endsection
