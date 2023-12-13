<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\Livewire;
use Livewire\WithPagination;

class Posts extends Component
{

    use WithPagination;
    public function render()
    {
        $posts = Post::select('title', 'image_path', 'date')->paginate(12);
        return view('livewire.posts',[
            'posts'=> $posts ,
        ]);
    }
  // في كمبوننت Posts
  public function ShowPosts($id)
  {
      $post = Post::findOrFail($id); // افترض أنك تحصل على المقال من قاعدة البيانات
      $this->emit('showPosts', ['title' => $post->title, 'content' => $post->content, 'writer' => $post->writer, /* وهكذا */]);
  }

    
}
