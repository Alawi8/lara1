<?
// LatestPosts.php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Illuminate\Support\Str;
use Carbon\Carbon;

class IndexPost  extends Component
{
    public $liveposts;

    public function mount()
    {
        $this->loadPosts();
    }

    public function loadPosts()
    {
        $this->liveposts = Post::latest()->get();
    }

    public function render()
    {
        return view('livewire.index-post');
    }
}
