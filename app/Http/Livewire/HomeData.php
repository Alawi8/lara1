<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class HomeData extends Component
{
    public $posts;

    public function mount()
    {
        $this->loadPosts();
    }

    public function loadPosts()
    {
        if(empty($this->posts)){
            $this->posts = Post::latest('created_at')
                ->select('title', 'id', 'img_url', 'slug', 'created_at')
                ->take(7)
                ->get();
        }
    }

    public function render()
    {
        return view('livewire.home-data');
    }
}
