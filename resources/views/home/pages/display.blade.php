@extends('home.layouts.body')

@section('content')
    {{-- {{$dis_posts}} --}}
    <div class="container-fluid">
        <h1>{{ $dis_posts->title }}</h1>
        <img id="card-content-posts" class="card-img-top rounded-3 text-center"
            {{-- src="{{ asset('public/img/offers/' . $dis_posts->image_path) }}" --}}
            {{-- name="{{ asset('storage/img/' . $dis_posts->image_path) }}"> --}}
        <br>
        <div  id="content">
            @php
                echo $dis_posts->content;
            @endphp
        </div>

    </div>
@endsection
