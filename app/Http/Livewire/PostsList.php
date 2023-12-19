<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class PostsList extends Component
{
    use WithPagination;
    public function render()
    {
        $post= Post::paginate(10);
        return view('livewire.posts-list',['post'=>$post]);
    }
}
