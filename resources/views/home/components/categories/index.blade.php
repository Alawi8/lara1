@extends('home.layouts.body')
@section('title')التصنيفات@endsection
@section('exept')@endsection
@section('author')@endsection
@section('content')
    <div>
        <div class="row">
            @if (isset($categories))
                
            @foreach ($categories as $category)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $category->name }}</h5>
                            ({{ $category->posts->count() }})
                            <p class="card-text">{{ $category->description }}</p>
                            <a href="{{ route('categories.show', $category->id) }}" class="btn btn-primary">عرض</a>
                        </div>
                    </div>
                </div>
            @endforeach
            @endif
        </div>
    </div>
@endsection
