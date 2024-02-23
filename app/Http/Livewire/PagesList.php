<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Page ;

class PagesList extends Component
{
    public $pages;

    public function mount()
    {
        $this->loadPages();
    }

    public function loadPages()
    {
        // $this->posts = Post::all(); 
        $this->pages = Page::take(4)->get();

    }

    public function render()
    {
        return view('livewire.pages-list');
    }
}
