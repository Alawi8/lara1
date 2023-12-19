<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithPagination;

class PostsList extends Component
{
    use WithPagination;
    public function navigateToSecondComponent()
    {
        return redirect()->to('/second-component');
    }
    public function render()
    {
        return view('livewire.posts-list',[
            'post'=>Post::query()->paginate(8)
        ]);
    }
}
