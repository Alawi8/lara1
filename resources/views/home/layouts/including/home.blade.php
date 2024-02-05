<div class="container-fluid">


    @if (isset($all_posts))
        <div class="row">
            @forelse ($all_posts as $post)
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12 ">
                    <a class="nav-link" href="{{ route('display', ['title' => str_replace(' ','_',$post->title)]) }}">

                        <div id='card-posts-menu'>
                            <img id="card-posts-menu-img" class="bg-dark legend img-fluid" src="{{ $post->image_path }}"
                                class="card-img-top" alt="{{ $post->title }}">
                            <div class="card-body">
                                <h1>{{ $post->title }}</h1>
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
            </div>
        </div>
            {{ $all_posts->links() }}
    @endif
    <div class="bg-light">
        <hr>
        <h1>التصنيفات</h1>
        <div>
            @livewire('posts-list')
        </div>

    </div>
</div>
