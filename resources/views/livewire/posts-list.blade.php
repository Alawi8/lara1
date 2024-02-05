<div>
    <div class="row">
        @if (isset($categories))
            @foreach ($categories as $category)
                <div id="card-posts-menu" class="col-md-4 mb-4 card ">
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