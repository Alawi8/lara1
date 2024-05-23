<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;
use App\Models\Page ;

class PagesList extends Component
{
    public $pages;
    public $category;

    public function mount()
    {
        $this->loadPages();
    }

    public function loadPages()
    {
        // $this->posts = Post::all(); 
        $this->pages = Page::take(4)->get();
        $this->category = Category::all();

    }

    public function render()
    {
        return view('livewire.pages-list');
    }
}
