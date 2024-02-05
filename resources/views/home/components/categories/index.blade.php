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
        @livewire('posts-list')
    </div>
@endsection
