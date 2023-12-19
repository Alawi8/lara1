<?php

use App\Models\Post;
use Livewire\Component;

class ShowPosts extends Component
{
    public $data;

    public function mount()
    {
        // جلب البيانات من قاعدة البيانات أو من أي مصدر آخر
        $this->data = Post::all();
    }

    public function render()
    {
        return view('livewire.show-posts');
    }
}
