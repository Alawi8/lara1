<div class="container">
    <h6>المقالات</h6>
    @if (isset($posts))
        <div class="row">
            @forelse ($posts as $post)
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <a class="nav-link" href="javascript:void(0)" wire:click="ShowPosts({{$post->id}})">
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
                {{-- {{ $all_posts->links() }} --}}
            </div>
        </div>

    @endif

</div>