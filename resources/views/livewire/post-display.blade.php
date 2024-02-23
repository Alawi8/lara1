<div class="container-fluid">
component
    @if (isset($post))
        <div class="row">
            @forelse ($post as $post)
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-12 ">
                    <a class="nav-link" href="{{ route('display', ['title' => str_replace(' ','_',$post->title)]) }}" title="{{ $post->title }}">

                        <div id='card-posts-menu'>
                            <img id="card-posts-menu-img" class="bg-dark legend img-fluid" src="{{ $post->image_path }}"
                                class="card-img-top" alt="{{ $post->title }}">
                            <div class="card-body">
                                <h2>{{ $post->title }}</h2>
                                <span class="badge text-bg-success">{{ \Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</span>
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

        <div class="d-flex justify-content-center" dir="">
            {{-- {{ $all_posts->links() }} --}}
        </div>
        <button x-on:click="$wire.toggleShowMessage()">...</button>

    @endif
</div>