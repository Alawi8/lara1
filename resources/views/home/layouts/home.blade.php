<div class="container-fluid">
    <style>
        #card-posts-menu {
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
            border: 5px solid;
            border-radius: 20px 20px 20px 20px;
            border-color: rgb(255, 255, 255);
            margin-bottom: 25px;
            box-shadow: 0 0 25px rgb(163, 160, 160)
        }

        #card-posts-menu:hover {
            transform: scale(1.05);
        }

        #card-posts-menu-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            box-shadow: 0 0 25px rgb(163, 160, 160) width: 100%;
            height: 10rem;
            border-radius: 20px 20px 0 90px
        }

        .card-body {
            padding: 15px;
        }

        .card-body h6 {
            margin-bottom: 10px;
            font-size: 1.2rem;
        }
    </style>

    @if (isset($all_posts))
        <div class="row">
            @forelse ($all_posts as $post)
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <a class="nav-link" href="{{ route('display', $post->title) }}">
                        <div id='card-posts-menu' >
                            <img id="card-posts-menu-img" class="bg-dark legend img-fluid" src="{{ $post->image_path }}"
                                class="card-img-top" alt="{{ $post->title }}">
                            <div class="card-body">
                                <h6>{{ $post->title }}</h6>
                                @include('home.components.pages.time')
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
                {{ $all_posts->links() }}
            </div>
        </div>
    @endif
</div>
