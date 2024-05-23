@extends('home.layouts.body')
<style>
    h1 {
        color: #263238;
    }
</style>
@section('content')

    <div class="container">
    @section('title', __('Server Error'))
    @section('code', '500')
    @section('message', __('Server Error'))
</div>

@endsection
