@extends('home.layouts.body')
@section('content')
@if(session()->has('Success'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif
@include('home.pages.home')
@endsection

