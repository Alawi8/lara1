@extends('home.layouts.body')
@section('exept')
@section('title')
@section('content')
    <p></p>
    <div class="row mb-2">
        @if($result->isEmpty())
        <div class="alert alert-secondary text-center" role="alert">
            لا توجد نتائج بحث.
        </div>
    @else
        @forelse($result as $article)
            <a href="{{ route('display', $article->id) }}" class="col-md-6 nav-link">
                <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary">World</strong>
                        <h3 class="mb-0">{{ $article->title }}</h3>
                        <div class="mb-1 text-muted">{{ \Carbon\Carbon::parse($article->date)->diffForHumans() }}</div>
                        <p class="card-text mb-auto">{{ Str::limit($article->exept, 150) }}</p>
                        {{-- Continue reading</a> --}}
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <svg class="bd-placeholder-img" width="200" height="250" xmlns=""
                        role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                        focusable="false" style="background-image: url('{{$article->image_path}}');">
                    </svg>
                    
                    </div>
                </div>
            </a>
        @empty
            <div class="col-12">
                <div class="alert alert-secondary text-center" role="alert">
                    لا توجد نتائج بحث.
                </div>
            </div>
        @endforelse
    @endif
        </div>

@endsection
