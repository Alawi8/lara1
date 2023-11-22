@extends('dash.layouts.header')

@section('content')
    <main>
        <div class="album py-5 bg-body-tertiary">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($posts as $post)
                        
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                                src="{{$post->image_path}}" role="img" aria-label="Placeholder: Thumbnail"
                                preserveAspectRatio="xMidYMid slice" focusable="false">
                            </img>
                            {{ $post->image_path }}
                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
