@extends('dash.layouts.header')

@section('content')
    <div class="card">
        {{$posts[1]->title}}
    </div>
    
@endsection
