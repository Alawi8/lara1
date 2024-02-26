@extends('home.layouts.body')
@section('link')
<a class="nav-link" href="{{route('categories.index')}}" title="التصنيفات">التصنيفات<span class="mx-3">|</span></a>
<a class="nav-link" href="{{ route('categories.show', $category->id) }}" title="{{$category->name}}">{{$category->name}}</a>

@endsection
@section('title')
{{$category->name}}
@endsection
@section('content')
    <div >

        @if (isset($posts))
            <div class="row">
                @forelse ($posts as $post)
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <a class="nav-link" href="{{ route('display', ['title' => str_replace(' ','_',$post->title)]) }}" title="{{ $post->title }}">
                            <div id='card-posts-menu'>
                                <img id="card-posts-menu-img" class="bg-dark legend img-fluid" src="{{ $post->img_url }}"
                                    class="card-img-top" alt="{{ $post->title }}">
                                <div class="card-body">
                                    <h2>{{ $post->title }}</h2>
                                    <span class="badge text-bg-success">{{ \Carbon\Carbon::parse($post->date)->diffForHumans() }}</span>
                                </div>
                            </div>
                        </a>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-secondary text-center" role="alert">
                            لم يتم العثور على مقالات
                        </div>
                    </div>
                @endforelse
                <div class="d-flex justify-content-center">
                    {{ $posts->links() }}
                </div>
            </div>
        @endif
    </div>
@endsection
