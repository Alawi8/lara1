@extends('home.layouts.body')
@section('title')
{{$post->title}}
@endsection
@section('link')
<a class="nav-link" title="{{ $post->title }}">{{ $post->title }}</a>

@endsection

@section('content')
<div>
    <h1>{{ $post->title }}</h1>
    <p>{!! $post->content !!}</p>
</div>
@endsection
