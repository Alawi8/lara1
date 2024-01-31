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
        // $this->posts = Post::all(); 
        $this->posts = Post::latest('date')->select('title', 'id', 'date','time','image_path','exept')->take(7)->get();
    }

    public function render()
    {
        return view('livewire.home-data');
    }
}
