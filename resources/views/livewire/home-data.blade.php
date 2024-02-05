<div class="container bg-light shadow p-3">
    <h1>أحدث المقالات</h1>
    <hr>
    @if (isset($posts) && count($posts) > 0)
        @foreach ($posts as $item)
            <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-body-tertiary ">
                <div class="list-group list-group-flush border-bottom scrollarea">
                    <a href="{{ route('display', ['title' => str_replace(' ', '_', $item->title)]) }}"
                        class="list-group-item list-group-item-action {{ request()->routeIs('display') && request()->route('title') === str_replace(' ', '_', $item->title) ? 'active' : '' }}
                     
                        py-3 lh-sm"
                        aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                            {{-- <img src="{{ $item->image_path }}" alt="النص البديل"
                                class="rounded-circle " width="30" height="30"> --}}
                            <strong class=""> {{ $item->title }}
                            </strong>
                            <small>{{ \Carbon\Carbon::parse($item->date)->diffForHumans() }}</small>
                        </div>
                        <div class="col-10 mb-1 small"> {{ Str::limit($item->exept, 110) }}
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    @else
        <p>لا توجد مقالات حاليًا.</p>
    @endif
</div>
