@extends('home.layouts.body')
@section('exept')
@section('title')
@section('content')
@foreach ($result as $article)
<p>{{ $article->title }}</p>
@endforeach
@endsection
