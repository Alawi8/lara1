<div>
    <form>
        <input class="form-control" wire:model="searchTerm" type="text" placeholder="عن ماذا تبحث">
    </form>

    <ul class="list-group">
        @if($result && $result->count() > 0)
            @foreach($result as $post)
                <a href="#" class="list-group-item">{{$post->title}}</a>

                
            @endforeach
        @else
        @endif
    </ul>
</div>
