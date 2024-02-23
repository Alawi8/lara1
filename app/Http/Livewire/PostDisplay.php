<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class PostDisplay extends Component
{
    public $post;

    public function mount()
    {
        $this->post = Post::get();
    }

    public function render()
    {
        return view('livewire.post-display');
    }
}

