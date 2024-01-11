@extends('home.layouts.body')
@section('content')
<div>
    <h2>{{ $post->title }}</h2>
    <p>{!! $post->content !!}</p>
    {{-- أضف أي أكواد HTML أو تصميم إضافي حسب احتياجاتك --}}
</div>
@endsection
