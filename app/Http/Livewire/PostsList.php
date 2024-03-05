<?php
// app/Http/Livewire/HomeData.php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Post;

class PostsList extends Component
{
    public $categories;
    public function mount()
    {
        $this->loadData();
    }

    public function loadData()
    {
        $this->categories = Category::latest('created_at')->select('name','title','id')->take(12)->get();
    }

    public function render()
    {
        return view('livewire.posts-list');
    }
}
