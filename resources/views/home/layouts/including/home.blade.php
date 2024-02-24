<div class="container-fluid">

    <video class="img-fluid" autoplay loop muted controls  height="300" volume="0.5">
        <source src='{{ asset('Video/موسيقى يوم التأسيس _ Saudia foundingday music.mp4') }}' type="video/mp4" />
    </video>
    
    <!-- Carousel wrapper -->
    @if (isset($all_posts))
        <div class="row">

            @forelse ($all_posts as $post)
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12 ">
                    <a class="nav-link" href="{{ route('display', ['title' => str_replace(' ', '_', $post->title)]) }}"
                        title="{{ $post->title }}">

                        <div id='card-posts-menu'>
                            <img id="card-posts-menu-img" class="bg-dark legend img-fluid" src="{{ $post->img_url }}"
                                class="card-img-top" alt="{{ $post->title }}">
                            <div class="card-body">
                                <h2>{{ $post->title }}</h2>
                                <span
                                    class="badge text-bg-success">{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</span>
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

        <div class="d-flex justify-content-center">
            {{ $all_posts->links() }}
        </div>
    @endif
</div>
