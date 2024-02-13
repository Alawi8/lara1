@extends('home.layouts.body')
@section('link')
<a class="nav-link" href="{{route('categories.index')}}" title="التصنيفات">التصنيفات</a>
@endsection
@section('title')
    التصنيفات
@endsection
@section('content')
    <div>
        @livewire('posts-list')
    </div>
@endsection
