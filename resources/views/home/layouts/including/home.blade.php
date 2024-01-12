<div class="container-fluid">

    @section('style')
        <!--style -->
        <style>

        </style>
    @endsection
    @if (isset($all_posts))
        <div class="row">
            @forelse ($all_posts as $post)
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12 ">
                    <a class="nav-link " href="{{ route('display', $post->id) }}">
                        <div id='card-posts-menu'>
                            <img id="card-posts-menu-img" class="bg-dark legend img-fluid" src="{{ $post->image_path }}"
                                class="card-img-top" alt="{{ $post->title }}">
                            <div class="card-body">
                                <h1>{{ $post->title }}</h1>
                                {{ \Carbon\Carbon::parse($post->date)->diffForHumans() }}
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
            </div>
        </div>
            {{ $all_posts->links() }}
    @endif
    <div class="bg-light">
        <hr>
        <h6>التصنيفات</h6>
        <div>
            <div class="row">
                @if (isset($categories))
                    @foreach ($categories as $category)
                        <div id="" class="col-md-4 mb-4 card ">
                            <a href="{{ route('categories.show', $category->id) }}" class="nav-link">
                            <!-- Jumbotron -->
                            <div class="bg-image p-5 text-center shadow-1-strong rounded mb-5 ">
                                <h1 class="mb-3 h2">{{ $category->name }}</h1>
                                <p>
                                    {{ Str::limit($category->title, 110) }}
                                </p>
                                <span class="badge bg-primary rounded-pill">{{$category->posts->count()}}</span>
                            </div>
                        </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
