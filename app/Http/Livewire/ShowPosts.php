<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class ShowPosts extends Component
{
    public $id;

    public function mount($id)
    {
        $this->id = $id;
    }

    public function render()
    {
        $post = Post::findOrFail($this->id);

        return view('livewire.show-post', ['post' => $post]);
    }
}
