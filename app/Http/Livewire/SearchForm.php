<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class SearchForm extends Component
{
    public $searchTerm = '';
    public $result;

    public function render()
    {
        if (empty($this->searchTerm)) {
            $this->result = Post::where('title', $this->searchTerm)->get();
        } else {
            $this->result = Post::where('title', 'like', '%' . $this->searchTerm . '%')->get();
        }

        return view('livewire.search-form');
    }
}
