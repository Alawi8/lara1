<div>
    {{-- اعلان جانبي --}}
    <amp-ad width="100vw" height="320" type="adsense" data-ad-client="ca-pub-6477832805856369" data-ad-slot="5564548170"
        data-auto-format="rspv" data-full-width="">
        <div overflow=""></div>
</amp-ad>
<div class="container">

    <div class="card">
        <div>
            <h2 class="active">أحدث المقالات</h2>
        </div>

        @if (isset($posts) && count($posts) > 0)
            @foreach ($posts as $item)
                <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-body-tertiary " style="">
                    <div class="list-group list-group-flush border-bottom scrollarea">
                        <a href="{{ route('display', ['title' => str_replace(' ', '_', $item->title)]) }}"
                            title="{{ $item->title }}"
                            class="list-group-item list-group-item-action {{ request()->routeIs('display') && request()->route('title') === str_replace(' ', '_', $item->title) ? 'active' : '' }}
                        py-3 lh-sm"
                            aria-current="true">
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                {{-- <img src="{{ $item->image_path }}" alt="النص البديل"
                                class="rounded-circle " width="30" height="30"> --}}
                                <h2> {{ $item->title }}
                                </h2>
                                <small>{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</small>
                            </div>
                            {{-- <div class="col-10 mb-1 "> {{ Str::limit($item->slug, 110) }} --}}
                            {{-- </div> --}}
                        </a>
                    </div>

                </div>
            @endforeach
        @else
            <p>لا توجد مقالات حاليًا.</p>
        @endif
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>

</div>
