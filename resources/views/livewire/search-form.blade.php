<div >
    <form  method="GET">
        @csrf
        <input class="form-control shadow" wire:model="searchTerm" type="text" placeholder="عن ماذا تبحث"  >
    </form>

    <ul class="list-group">
        @if($result && $result->count() > 0)
            @foreach($result as $post)
                <a href="{{ route('display', ['title' => str_replace(' ','_',$post->title)]) }}" class="list-group-item">{{$post->title}}</a>
            @endforeach
        @else
        @endif
    </ul>
</div>
