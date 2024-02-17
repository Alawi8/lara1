<div class=" bg-light shadow  container p-1 position-sticky" style="top: 10rem;">
    {{-- اعلان جانبي --}}
    <amp-ad width="100vw" height="320" type="adsense" data-ad-client="ca-pub-6477832805856369" data-ad-slot="5564548170"
        data-auto-format="rspv" data-full-width="">
        <div overflow=""></div>
    </amp-ad>
    <div>
        <h1 class="active">أحدث المقالات</h1>
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
                            <small>{{ \Carbon\Carbon::parse($item->date)->diffForHumans() }}</small>
                        </div>
                        <div class="col-10 mb-1 "> {{ Str::limit($item->exept, 110) }}
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    @else
        <p>لا توجد مقالات حاليًا.</p>
    @endif

</div>
